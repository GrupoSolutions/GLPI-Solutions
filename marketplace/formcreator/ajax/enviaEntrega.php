<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require('../../../src/db_config.php');

    $id = $_POST['idF'];
    $entrega = $_POST['entrega'];
    $validator = $_POST['validator'];
    $localEntrega;
    switch($entrega) {
        case 0:
            $localEntrega = "Correios";
            break;
        case 1:
            $localEntrega = "Via Varejo";
            break;
        case 2: 
            $localEntrega = "Matriz";
            break;
        default:
        $localEntrega = "ERRO";
    }
    $sqlAlteraEntrega = "UPDATE glpi_plugin_formcreator_formanswers SET entrega = '{$localEntrega}', users_id_validator = '{$validator}'  WHERE id = '{$id}'";
    $alteraEntrega = mysqli_query($sqlcon, $sqlAlteraEntrega);

    echo "Alterado!";
}
?>
