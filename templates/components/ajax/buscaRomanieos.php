<?php
require_once('../../../src/db_config.php');
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$operacao = $_POST['operacao'];

$sqlBuscaRomaneios = "SELECT id, nome, cep, CASE WHEN operacao = 'trirma' THEN 'TRIAGEM/RMA' WHEN operacao = 'triagem' THEN 'TRIAGEM' WHEN operacao = 'rma' THEN 'RMA' WHEN operacao = 'whp' THEN 'WHP' END AS operacao, SUM(quantidade), data_envio FROM tb_envio_correio WHERE data_envio BETWEEN '{$data_inicio}' AND '{$data_fim}' ";
if($operacao != "todas"){
    $sqlBuscaRomaneios .=  " AND operacao = '{$operacao}' GROUP BY nome";
} else {
    $sqlBuscaRomaneios .= " GROUP BY nome";
}
$buscaRomaneio = mysqli_query($sqlcon, $sqlBuscaRomaneios);
$arrRom = array();

if($buscaRomaneio){
    while($rom = mysqli_fetch_array($buscaRomaneio)){
        $id = $rom[0];
        $nome = $rom[1];
        $cep = $rom[2];
        $operacao = $rom[3];
        $qtd = $rom[4];
        $envio = $rom[5];
        $arr = [$id, $nome, $cep, $operacao, $qtd, $envio];
        array_push($arrRom, $arr);
    }
} 
$numR = $buscaRomaneio->num_rows;
if($numR == 0) {
    return 404;
}

header('Content-Type: application/json');
echo json_encode($arrRom);
?>