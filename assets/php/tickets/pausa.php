<?php
require('../../../src/db_config.php');
function isDiaUtil(DateTime $data) {
    $diaDaSemana = $data->format('N'); // 1 (segunda) a 7 (domingo)
    return $diaDaSemana >= 1 && $diaDaSemana <= 5;
}

$sqlPausas = "SELECT * FROM tickets_pause WHERE tickets_id = 975";
$buscaPausas = mysqli_query($sqlcon, $sqlPausas);
$arrPausa = array();
if ($buscaPausas) {
    while ($pausa = mysqli_fetch_row($buscaPausas)) {
        if($pausa[2] && $pausa[3]){
            array_push($arrPausa, $pausa); // Adiciona apenas o valor do ID do cliente no array
        }
    }
}
$tempoPausas = 0;
$slaPausa = 0;
foreach($arrPausa as $pausa){
    $dataInicial = new DateTime($pausa[2]);
    $dataFinal = new DateTime($pausa[3]);
    $sqlIntervalo = "SELECT begin, end FROM glpi_calendarsegments WHERE day = {$dataInicial->format('N')}";
    $buscaIntervalo = mysqli_query($sqlcon, $sqlIntervalo);
    if ($buscaIntervalo) {
        $intervalo = mysqli_fetch_row($buscaIntervalo);
        $intervaloInicio = $intervalo[0];
        $intervaloFim = $intervalo[1];
    }
    echo "<br>";
    $dataAtual = clone $dataInicial;
    while ($dataAtual <= $dataFinal) {
        if (isDiaUtil($dataAtual) && $dataAtual->format('N') > 0 && $dataAtual->format('N') <= 5) {
            if ($dataAtual->format('H') >= $intervaloInicio && $dataAtual->format('H') < $intervaloFim) {
                $slaPausa = $slaPausa + 1;
            }
        }
        $dataAtual->modify('+1 minute');
    }
}








print_r($slaPausa);