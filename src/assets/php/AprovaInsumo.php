<?php
include('../../inc/includes.php');
if(isset($_POST)){
    require '../../src/db_config.php';

    $idSolicitacao = $_POST['idSolicitacao'];
    $quantidade = $_POST['quantidade'];
    $nomeConsumivel = $_POST['nomeConsumivel'];
    $idDestino = $_POST['insumoDestino'];
    $usuSolicitante = $_POST['usuarioSolicitante'];
    $usuValidador = $_POST['usuarioValidador'];
    $date = date('Y-m-d H:i:s');
    $arrIdInsumo = array();

    $idSQL = "SELECT id
    from glpi_consumables
    Where consumableitems_id = '$idDestino' and date_out IS NULL LIMIT $quantidade";

    $buscaIdInsumo = mysqli_query($sqlcon, $idSQL);

    //Aqui ele busca os id's dos insumos disponiveis no banco para que seja efetuado o update.
    if($buscaIdInsumo){
        while($qtdInsumo = mysqli_fetch_row($buscaIdInsumo)){
            array_push($arrIdInsumo, $qtdInsumo[0]);
        }
        $arrIdInsumo = implode(", ",$arrIdInsumo);
        //SQL DE BAIXA DE INSUMOS
        $baixaInsumos = "UPDATE glpi_consumables
        SET date_out = '$date' , itemtype = 'user', items_id = '$usuSolicitante'
        WHERE id IN ($arrIdInsumo)";
        //SQL DE ATUALIZAÇÃO DO FORM DE SOLICITAÇÕES
        $atualizaSolicitacao = "UPDATE glpi_plugin_consumables_requests
        SET validators_id = '$usuValidador', status = 3 
        WHERE id = '$idSolicitacao'";
        //Aqui que é efetuada a baixa e atualização dos insumos
        $execBaixa = mysqli_query($sqlcon, $baixaInsumos);
        $execSolicitacao = mysqli_query($sqlcon, $atualizaSolicitacao);
        if($execBaixa == 1 && $execSolicitacao == 1){
            $_SESSION['moviAprovada'] = true;
            header('Location: http://localhost/glpi/marketplace/consumables/front/wizard.form.php?action=consumablevalidation');
            exit();
        }
    }
}
?>