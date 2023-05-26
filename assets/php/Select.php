<?php  
 if(isset($_POST["employee_id"]))  
 {  
    $output = '';
    require('../../src/db_config.php');

    $qtd = $_POST["employee_id"];
    $qtd = explode("-", $qtd);
    
    $idSolicitacao = $qtd[1];
    $quantidade = $qtd[0];
    $nomeConsumivel = $qtd[2];
    $arrInsumo = array();

    $SQL = "SELECT glpi_consumableitems.id,
    glpi_consumableitems.locations_id,
    glpi_consumableitems.name,
    glpi_locations.name
    FROM glpi_consumableitems
        LEFT JOIN
        glpi_locations ON glpi_locations.id = glpi_consumableitems.locations_id
    WHERE glpi_consumableitems.name = '{$nomeConsumivel}'";
    $buscaInsumo = mysqli_query($sqlcon, $SQL);

    if($buscaInsumo){
        while($insumo = mysqli_fetch_row($buscaInsumo)){
            array_push($arrInsumo, $insumo);
        }
    }
    $qtdArrInsumo = count($arrInsumo);

    for($i=0; $i<$qtdArrInsumo; $i++){
        $qtdInsumosSQL = "SELECT COUNT(*)
        from glpi_consumables
        Where consumableitems_id = '{$arrInsumo[$i][0]}' and date_out IS NULL";

        $buscaQtdInsumo = mysqli_query($sqlcon, $qtdInsumosSQL);
        if($buscaQtdInsumo){
            while($qtdInsumo = mysqli_fetch_row($buscaQtdInsumo)){
                array_push($arrInsumo[$i], $qtdInsumo[0]);
            }
        }

    }
echo ' <div class="ui form">
<div class="field">
<input type="hidden" name="idSolicitacao" value="'. $idSolicitacao . '">
<input type="hidden" name="quantidade" value="'. $quantidade . '">
<input type="hidden" name="nomeConsumivel" value="'. $nomeConsumivel . '">
<select class="ui search dropdown" name="insumoDestino" required>
    <option value="" disabled selected>Selecione um Insumo</option>';
    
   foreach($arrInsumo as $insumos){
        if($quantidade > $insumos[4]){
            echo '<option disabled style="color: gray;" value="'.$insumos[0].'">'. $insumos[2]. ' - '. $insumos[3] . ' - QTD (' . $insumos[4] .')</option>';

        }else{
            echo '<option style="color: #0176b6;" value="'.$insumos[0].'">'. $insumos[2]. ' - '. $insumos[3] . ' - QTD (' . $insumos[4] .')</option>';
        }

   }
echo '
</select>
</div>
</div>';
 }  
$_POST['qtd'] = '';
?>