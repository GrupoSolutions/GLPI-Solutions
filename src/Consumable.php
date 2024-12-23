<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2023 Teclib' and contributors.
 * @copyright 2003-2014 by the INDEPNET Development Team.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

use Glpi\Event;

//!  Consumable Class
/**
 * This class is used to manage the consumables.
 * @see ConsumableItem
 * @author Julien Dombre
 **/
class Consumable extends CommonDBChild
{
    use Glpi\Features\Clonable;

   // From CommonDBTM
    protected static $forward_entity_to = ['Infocom'];
    public $no_form_page                = true;

    public static $rightname                   = 'consumable';

   // From CommonDBChild
    public static $itemtype             = 'ConsumableItem';
    public static $items_id             = 'consumableitems_id';

    public function getCloneRelations(): array
    {
        return [
            Infocom::class
        ];
    }

    public function getForbiddenStandardMassiveAction()
    {

        $forbidden   = parent::getForbiddenStandardMassiveAction();
        $forbidden[] = 'update';
        return $forbidden;
    }


    public static function getNameField()
    {
        return 'id';
    }


    public static function getTypeName($nb = 0)
    {
        return _n('Consumable', 'Consumables', $nb);
    }


    public function prepareInputForAdd($input)
    {

        $item = new ConsumableItem();
        if ($item->getFromDB($input["consumableitems_id"])) {
            return ["consumableitems_id" => $item->fields["id"],
                "entities_id"        => $item->getEntityID(),
                "date_in"            => date("Y-m-d")
            ];
        }
        return [];
    }

    public function post_addItem()
    {

       // inherit infocom
        $infocoms = Infocom::getItemsAssociatedTo(ConsumableItem::getType(), $this->fields[ConsumableItem::getForeignKeyField()]);
        if (count($infocoms)) {
            $infocom = reset($infocoms);
            $infocom->clone([
                'itemtype'  => self::getType(),
                'items_id'  => $this->getID()
            ]);
        }

        parent::post_addItem();
    }


    /**
     * send back to stock
     *
     * @param array $input Array of item fields. Only the ID field is used here.
     * @param int $history Not used
     *
     * @return bool
     */
    public function backToStock(array $input, $history = 1)
    {
        global $DB;

        $result = $DB->update(
            $this->getTable(),
            [
                'date_out' => 'NULL'
            ],
            [
                'id' => $input['id']
            ]
        );
        if ($result) {
            return true;
        }
        return false;
    }


    public function getPreAdditionalInfosForName()
    {

        $ci = new ConsumableItem();
        if ($ci->getFromDB($this->fields['consumableitems_id'])) {
            return $ci->getName();
        }
        return '';
    }


    /**
     * UnLink a consumable linked to a printer
     *
     * UnLink the consumable identified by $ID
     *
     * @param integer $ID       consumable identifier
     * @param string  $itemtype itemtype of who we give the consumable
     * @param integer $items_id ID of the item giving the consumable
     *
     * @return boolean
     **/
    public function out($ID, $itemtype = '', $items_id = 0)
    {
        global $DB;

        if (
            !empty($itemtype)
            && ($items_id > 0)
        ) {
            $result = $DB->update(
                $this->getTable(),
                [
                    'date_out'  => date('Y-m-d'),
                    'itemtype'  => $itemtype,
                    'items_id'  => $items_id
                ],
                [
                    'id' => $ID
                ]
            );
            if ($result) {
                return true;
            }
        }
        return false;
    }


    public static function showMassiveActionsSubForm(MassiveAction $ma)
    {
        global $CFG_GLPI;

        $input = $ma->getInput();
        switch ($ma->getAction()) {
            case 'give':
                if (isset($input["entities_id"])) {
                    Dropdown::showSelectItemFromItemtypes(['itemtype_name'
                                                              => 'give_itemtype',
                        'items_id_name'
                                                              => 'give_items_id',
                        'entity_restrict'
                                                              => $input["entities_id"],
                        'itemtypes'
                                                              => $CFG_GLPI["consumables_types"]
                    ]);
                    echo "<br><br>" . Html::submit(
                        _x('button', 'Give'),
                        ['name' => 'massiveaction']
                    );
                    return true;
                }
        }
        return parent::showMassiveActionsSubForm($ma);
    }


    public static function processMassiveActionsForOneItemtype(
        MassiveAction $ma,
        CommonDBTM $item,
        array $ids
    ) {

        switch ($ma->getAction()) {
            case 'backtostock':
                foreach ($ids as $id) {
                    if ($item->can($id, UPDATE)) {
                        if ($item->backToStock(["id" => $id])) {
                            $ma->itemDone($item->getType(), $id, MassiveAction::ACTION_OK);
                        } else {
                            $ma->itemDone($item->getType(), $id, MassiveAction::ACTION_KO);
                            $ma->addMessage($item->getErrorMessage(ERROR_ON_ACTION));
                        }
                    } else {
                        $ma->itemDone($item->getType(), $id, MassiveAction::ACTION_NORIGHT);
                        $ma->addMessage($item->getErrorMessage(ERROR_RIGHT));
                    }
                }
                return;
            case 'give':
                $input = $ma->getInput();
                if (
                    ($input["give_items_id"] > 0)
                    && !empty($input['give_itemtype'])
                ) {
                    foreach ($ids as $key) {
                        if ($item->can($key, UPDATE)) {
                            if ($item->out($key, $input['give_itemtype'], $input["give_items_id"])) {
                                $ma->itemDone($item->getType(), $key, MassiveAction::ACTION_OK);
                            } else {
                                $ma->itemDone($item->getType(), $key, MassiveAction::ACTION_KO);
                                $ma->addMessage($item->getErrorMessage(ERROR_ON_ACTION));
                            }
                        } else {
                             $ma->itemDone($item->getType(), $key, MassiveAction::ACTION_NORIGHT);
                             $ma->addMessage($item->getErrorMessage(ERROR_RIGHT));
                        }
                    }
                    Event::log(
                        $item->fields['consumableitems_id'],
                        "consumableitems",
                        5,
                        "inventory",
                        //TRANS: %s is the user login
                        sprintf(__('%s gives a consumable'), $_SESSION["glpiname"])
                    );
                } else {
                    $ma->itemDone($item->getType(), $ids, MassiveAction::ACTION_KO);
                }
                return;
        }
        parent::processMassiveActionsForOneItemtype($ma, $item, $ids);
    }


    /**
     * count how many consumable for the consumable item $tID
     *
     * @param integer $tID consumable item identifier.
     *
     * @return integer number of consumable counted.
     **/
    public static function getTotalNumber($tID)
    {
        global $DB;

        $result = $DB->request([
            'COUNT'  => 'cpt',
            'FROM'   => 'glpi_consumables',
            'WHERE'  => ['consumableitems_id' => $tID]
        ])->current();
        return (int)$result['cpt'];
    }


    /**
     * count how many old consumable for the consumable item $tID
     *
     * @param integer $tID consumable item identifier.
     *
     * @return integer number of old consumable counted.
     **/
    public static function getOldNumber($tID)
    {
        global $DB;

        $result = $DB->request([
            'COUNT'  => 'cpt',
            'FROM'   => 'glpi_consumables',
            'WHERE'  => [
                'consumableitems_id' => $tID,
                'NOT'                => ['date_out' => null]
            ]
        ])->current();
        return (int)$result['cpt'];
    }


    /**
     * count how many consumable unused for the consumable item $tID
     *
     * @param integer $tID consumable item identifier.
     *
     * @return integer number of consumable unused counted.
     **/
    public static function getUnusedNumber($tID)
    {
        global $DB;

        $result = $DB->request([
            'COUNT'  => 'cpt',
            'FROM'   => 'glpi_consumables',
            'WHERE'  => [
                'consumableitems_id' => $tID,
                'date_out'           => null
            ]
        ])->current();
        return(int) $result['cpt'];
    }

    /**
     * The desired stock level
     *
     * This is used when the alarm threshold is reached to know how many to order.
     * @param integer $tID Consumable item ID
     * @return integer
     */
    public static function getStockTarget(int $tID): int
    {
        global $DB;

        $it = $DB->request([
            'SELECT'  => ['stock_target'],
            'FROM'   => ConsumableItem::getTable(),
            'WHERE'  => [
                'id'  => $tID
            ]
        ]);
        if ($it->count()) {
            return $it->current()['stock_target'];
        }
        return 0;
    }

    /**
     * The lower threshold for the stock amount before an alarm is triggered
     *
     * @param integer $tID Consumable item ID
     * @return integer
     */
    public static function getAlarmThreshold(int $tID): int
    {
        global $DB;

        $it = $DB->request([
            'SELECT'  => ['alarm_threshold'],
            'FROM'   => ConsumableItem::getTable(),
            'WHERE'  => [
                'id'  => $tID
            ]
        ]);
        if ($it->count()) {
            return $it->current()['alarm_threshold'];
        }
        return 0;
    }

    /**
     * Get the consumable count HTML array for a defined consumable type
     *
     * @param integer $tID             consumable item identifier.
     * @param integer $alarm_threshold threshold alarm value.
     * @param boolean $nohtml          Return value without HTML tags.
     *
     * @return string to display
     **/
    public static function getCount($tID, $alarm_threshold, $nohtml = 0)
    {

       // Get total
        $total = self::getTotalNumber($tID);

        if ($total != 0) {
            $unused = self::getUnusedNumber($tID);
            $old    = self::getOldNumber($tID);

            $highlight = "";
            if ($unused <= $alarm_threshold) {
                $highlight = "class='tab_bg_1_2'";
            }
           //TRANS: For consumable. %1$d is total number, %2$d is unused number, %3$d is old number
            $tmptxt = sprintf(__('Total: %1$d, New: %2$d, Used: %3$d'), $total, $unused, $old);
            if ($nohtml) {
                $out = $tmptxt;
            } else {
                $out = "<div $highlight>" . $tmptxt . "</div>";
            }
        } else {
            if ($nohtml) {
                $out = __('No consumable');
            } else {
                $out = "<div class='tab_bg_1_2'><i>" . __('No consumable') . "</i></div>";
            }
        }
        return $out;
    }


    /**
     * Check if a Consumable is New (not used, in stock)
     *
     * @param integer $cID consumable ID.
     *
     * @return boolean
     **/
    public static function isNew($cID)
    {
        global $DB;

        $result = $DB->request([
            'COUNT'  => 'cpt',
            'FROM'   => 'glpi_consumables',
            'WHERE'  => [
                'id'        => $cID,
                'date_out'  => null
            ]
        ])->current();
        return $result['cpt'] == 1;
    }


    /**
     * Check if a consumable is Old (used, not in stock)
     *
     * @param integer $cID consumable ID.
     *
     * @return boolean
     **/
    public static function isOld($cID)
    {
        global $DB;

        $result = $DB->request([
            'COUNT'  => 'cpt',
            'FROM'   => 'glpi_consumables',
            'WHERE'  => [
                'id'     => $cID,
                'NOT'   => ['date_out' => null]
            ]
        ])->current();
        return $result['cpt'] == 1;
    }


    /**
     * Get the localized string for the status of a consumable
     *
     * @param integer $cID consumable ID.
     *
     * @return string
     **/
    public static function getStatus($cID)
    {

        if (self::isNew($cID)) {
            return _nx('consumable', 'New', 'New', 1);
        } else if (self::isOld($cID)) {
            return _nx('consumable', 'Used', 'Used', 1);
        }
        return '';
    }


    /**
     * Print out a link to add directly a new consumable from a consumable item.
     *
     * @param ConsumableItem $consitem
     *
     * @return void
     **/
    public static function showAddForm(ConsumableItem $consitem)
    {

        $ID = $consitem->getField('id');
        $name = $consitem->getField('name');
        $locID = $consitem->getField('locations_id');
        if (!$consitem->can($ID, UPDATE)) {
            return;
        }
        if ($ID > 0) {
            ?>
                <div class="boxMovimentacao " align="center">
                    <div class="boxP"> 
                        <p>Alteração de Localidade:</p>
                    </div>
                   
                    <div class="container">
                        <div class="form-check form-switch">
                            <input class="form-check-input" onchange="showDiv()" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
<?php
            require_once 'db_config.php';
            $query = "SELECT glpi_consumableitems.id,
            glpi_consumableitems.name AS INSUMO,
            glpi_locations.name as LOCAL
             FROM base_104.glpi_consumableitems
            LEFT JOIN
                glpi_locations on glpi_locations.id = glpi_consumableitems.locations_id
            Where glpi_consumableitems.id != '$ID' and glpi_consumableitems.name = '$name'";
            $buscaInsumo = mysqli_query($sqlcon, $query);
            $arrInsumos = array();
            if($buscaInsumo){
                while ($requ = mysqli_fetch_row($buscaInsumo)) {
                    array_push($arrInsumos, $requ);
                }
            }
            echo "<div class='firstbloc' id='frmAdd' align='center'>";
            echo "<form method='post'  action=\"" . static::getFormURL() . "\">";
            echo "<table class='tab_cadre_fixe' style='margin-left:5%;'>";
            echo "<tr class='center'><td class='tab_bg_2 '>";
            echo "<input type='hidden' name='consumableitems_id' value='$ID'>\n";
            echo "</td></tr>";
            echo "<p style='font-size:12px; color:gray'>Os campos com<span class='required'>*</span> são obrigatórios.</p>";
            echo "<tr><td width='18%'><label>Quantidade de insumos:</label><span class='required'>*</span></td>";
            echo "<td><input type='text' pattern='[0-9]*' name='to_add' required/></td>";
            echo "<td><label>Valor(R$): </label><span class='required'>*</span></td>";
            echo "<td><input placeholder='ex: 1500,00' type='number' min='0.1' step='any' name='valor_insumo' required/></td></tr>";
            echo "<tr><td><label>Data da NF: </label><span class='required'>*</span></td>";
            echo "<td><input style='width:225px' type='date' name='data_nf' required/></td>";
            echo "<td><label>Número da NF:</label><span class='required'>*</span></td>";
            echo "<td><input type='text' pattern='[0-9]*' name='numero_nf' required/></td></tr>";
            echo "<td><label>Observação:</label></td>";
            echo "<td><textarea id='comentario' name='comentario' rows='4' cols='23'></textarea></td>";
            echo "<div>";
            echo "</table>";
            echo "<p align='center'><input type='submit' name='add_several' value=\"" . _sx('button', 'Add consumables') . "\"
            class='btn btn-primary'></p>";
            Html::closeForm();?>
            </div>
            <form method="post" id="frmMovimentacao" action='../assets/php/MovimentaLacre.php'>
            <table class='tab_cadre_fixe' style='margin-left:5%'>
                <tr><p style='font-size:12px; color:gray' align="center">Os campos com<span class='required'>*</span> são obrigatórios.</p></tr>
                <input type="hidden" name="idOrigem" value="<?php echo $ID ?>">
                <tr class="center"><td class="tab_bg_2"></td></tr>
                <tr><td width='18%'><label>Quantidade de insumos:</label><span class='required'>*</span></td>
                <td><input type='text' pattern='[0-9]*' name='qtdInsumos' required/></td>
                <td width='18%'><label>Destino:</label><span class='required'>*</span></td>
                <td><select name="idDestino" required><option class='disabled' value=''>Selecione o destino</option><?php
                    foreach($arrInsumos as $insumo){
                        echo "<option name='id' value='$insumo[0]'>$insumo[1] - $insumo[2]</option>";
                    }
                ?></select></td>
                <tr><td><label>Observação:</label> </td>
                <td><textarea id='comentario' name='comentario' rows='4' cols='23'></textarea> </td></tr>
            </table>
            <p align='center'><input type='submit' name='add_several' value="Movimentar Insumos" class='btn btn-primary'></p>
            <script>
            function showDiv(){
                const divHide = document.getElementById('frmAdd');
                divHide.style.display === "none" ? divHide.style.display = "block" : divHide.style.display = "none";
                const consumableHide = document.getElementById('frmMovimentacao');
                consumableHide.style.display === "block" ? consumableHide.style.display = "none" : consumableHide.style.display = "block";
                
            }
            </script>
            <?php 
            Html::closeForm();
            echo "</div>";
            echo "</div>";
        }
    }


    /**
     * Print out the consumables of a defined type
     *
     * @param ConsumableItem $consitem
     * @param boolean        $show_old show old consumables or not. (default 0)
     *
     * @return void
     **/
    public static function showForConsumableItem(ConsumableItem $consitem, $show_old = 0)
    {
        global $DB;

        $tID = $consitem->getField('id');
        if (!$consitem->can($tID, READ)) {
            return;
        }

        if (isset($_GET["start"])) {
            $start = $_GET["start"];
        } else {
            $start = 0;
        }

        $canedit = $consitem->can($tID, UPDATE);
        $rand = mt_rand();
        $where = ['consumableitems_id' => $tID];
        $order = ['date_in', 'id'];
        if (!$show_old) { // NEW
            $where += ['date_out' => 'NULL'];
        } else { //OLD
            $where += ['NOT'   => ['date_out' => 'NULL']];
            $order = ['date_out DESC'] + $order;
        }

        $number = countElementsInTable("glpi_consumables", $where);

        $iterator = $DB->request([
            'FROM'   => self::getTable(),
            'WHERE'  => $where,
            'ORDER'  => $order,
            'START'  => (int)$start,
            'LIMIT'  => (int)$_SESSION['glpilist_limit']
        ]);


        echo "<table class='tab_cadre_fixehov' style='text-align: center;'>";
        if (!$show_old) {
            echo "<tr><th colspan=" . ($canedit ? '5' : '4') . ">";
            echo self::getCount($tID, -1);
            echo "</th></tr>";
        } 

       
        echo "</table>";
        
    }


    /**
     * Show the usage summary of consumables by user
     *
     * @return void
     **/
    public static function showSummary()
    {
        global $DB;

        if (!Consumable::canView()) {
            return;
        }

        $iterator = $DB->request([
            'SELECT' => [
                'COUNT'  => ['* AS count'],
                'consumableitems_id',
                'itemtype',
                'items_id'
            ],
            'FROM'   => 'glpi_consumables',
            'WHERE'  => [
                'NOT'                => ['date_out' => null],
                'consumableitems_id' => new \QuerySubQuery([
                    'SELECT' => 'id',
                    'FROM'   => 'glpi_consumableitems',
                    'WHERE'  => getEntitiesRestrictCriteria('glpi_consumableitems')
                ])
            ],
            'GROUP'  => ['itemtype', 'items_id', 'consumableitems_id']
        ]);
        $used = [];

        foreach ($iterator as $data) {
            $used[$data['itemtype'] . '####' . $data['items_id']][$data["consumableitems_id"]]
            = $data["count"];
        }

        $iterator = $DB->request([
            'SELECT' => [
                'COUNT'  => '* AS count',
                'consumableitems_id',
            ],
            'FROM'   => 'glpi_consumables',
            'WHERE'  => [
                'date_out'           => null,
                'consumableitems_id' => new \QuerySubQuery([
                    'SELECT' => 'id',
                    'FROM'   => 'glpi_consumableitems',
                    'WHERE'  => getEntitiesRestrictCriteria('glpi_consumableitems')
                ])
            ],
            'GROUP'  => ['consumableitems_id']
        ]);
        $new = [];

        foreach ($iterator as $data) {
            $new[$data["consumableitems_id"]] = $data["count"];
        }

        $iterator = $DB->request([
            'FROM'   => 'glpi_consumableitems',
            'WHERE'  => getEntitiesRestrictCriteria('glpi_consumableitems')
        ]);
        $types = [];

        foreach ($iterator as $data) {
            $types[$data["id"]] = $data["name"];
        }

        asort($types);
        $total = [];
        if (count($types) > 0) {
           // Produce headline
            echo "<div class='center'><table class='tab_cadrehov'><tr>";

           // Type
            echo "<th>" . __('Give to') . "</th>";

            foreach ($types as $key => $type) {
                echo "<th>$type</th>";
                $total[$key] = 0;
            }
            echo "<th>" . __('Total') . "</th>";
            echo "</tr>";

           // new
            echo "<tr class='tab_bg_2'><td class='b'>" . __('In stock') . "</td>";
            $tot = 0;
            foreach ($types as $id_type => $type) {
                if (!isset($new[$id_type])) {
                    $new[$id_type] = 0;
                }
                echo "<td class='center'>" . $new[$id_type] . "</td>";
                $total[$id_type] += $new[$id_type];
                $tot             += $new[$id_type];
            }
            echo "<td class='numeric'>" . $tot . "</td>";
            echo "</tr>";

            foreach ($used as $itemtype_items_id => $val) {
                echo "<tr class='tab_bg_2'><td>";
                list($itemtype,$items_id) = explode('####', $itemtype_items_id);
                $item = new $itemtype();
                if ($item->getFromDB($items_id)) {
                   //TRANS: %1$s is a type name - %2$s is a name
                    printf(__('%1$s - %2$s'), $item->getTypeName(1), $item->getNameID());
                }
                echo "</td>";
                $tot = 0;
                foreach ($types as $id_type => $type) {
                    if (!isset($val[$id_type])) {
                        $val[$id_type] = 0;
                    }
                    echo "<td class='center'>" . $val[$id_type] . "</td>";
                    $total[$id_type] += $val[$id_type];
                    $tot             += $val[$id_type];
                }
                echo "<td class='numeric'>" . $tot . "</td>";
                echo "</tr>";
            }
            echo "<tr class='tab_bg_1'><td class='b'>" . __('Total') . "</td>";
            $tot = 0;
            foreach ($types as $id_type => $type) {
                $tot += $total[$id_type];
                echo "<td class='numeric'>" . $total[$id_type] . "</td>";
            }
            echo "<td class='numeric'>" . $tot . "</td>";
            echo "</tr>";
            echo "</table></div>";
        } else {
            echo "<div class='center b'>" . __('No consumable found') . "</div>";
        }
    }


    public function getTabNameForItem(CommonGLPI $item, $withtemplate = 0)
    {

        if (!$withtemplate && Consumable::canView()) {
            $nb = 0;
            switch ($item->getType()) {
                case 'ConsumableItem':
                    if ($_SESSION['glpishow_count_on_tabs']) {
                        $nb =  self::countForConsumableItem($item);
                    }
                    return self::createTabEntry(self::getTypeName(Session::getPluralNumber()), $nb);
            }
        }
        return '';
    }


    /**
     * @param ConsumableItem $item
     *
     * @return integer
     **/
    public static function countForConsumableItem(ConsumableItem $item)
    {

        return countElementsInTable(['glpi_consumables'], ['glpi_consumables.consumableitems_id' => $item->getField('id')]);
    }


    public static function displayTabContentForItem(CommonGLPI $item, $tabnum = 1, $withtemplate = 0)
    {

        switch ($item->getType()) {
            case 'ConsumableItem':
                self::showAddForm($item);
                self::showForConsumableItem($item);
                self::showForConsumableItem($item, 1);
                break;
        }
        return true;
    }

    public function getRights($interface = 'central')
    {
        $ci = new ConsumableItem();
        return $ci->getRights($interface);
    }


    public static function getIcon()
    {
        return "ti ti-package";
    }
}
