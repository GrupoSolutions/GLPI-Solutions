<?php
include('../../inc/includes.php');
if(isset($_POST)){
    require '../../src/db_config.php';

    $idSolicitacao = $_POST['idSolicitacaoR'];
    $usuSolicitante = $_POST['usuarioSolicitante'];
    $usuValidador = $_POST['usuarioValidador'];
    $observacao = $_POST['observacao'];
    $date = date('Y-m-d H:i:s');
    $arrIdInsumo = array();

    
    $atualizaSolicitacao = "UPDATE glpi_plugin_consumables_requests
    SET validators_id = '$usuValidador', date_mod = '$date', status = 4, observacao = '$observacao'
    WHERE id = $idSolicitacao";
    //Aqui que é efetuada a baixa e atualização dos insumos
    $execSolicitacao = mysqli_query($sqlcon, $atualizaSolicitacao);
    if($execSolicitacao == 1){
        $_SESSION['moviReprovada'] = true;
        header('Location: https://ativo.gruposolutions.com.br/marketplace/consumables/front/wizard.form.php?action=consumablevalidation');
        exit();
    }
}

?>