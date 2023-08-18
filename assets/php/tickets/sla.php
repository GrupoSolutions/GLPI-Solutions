<?php
// Função para verificar se é um dia útil (segunda a sexta)
require_once('ticketcontroller.php');
function isDiaUtil(DateTime $data) {
    $diaDaSemana = $data->format('N'); // 1 (segunda) a 7 (domingo)
    return $diaDaSemana >= 1 && $diaDaSemana <= 5;
}

// Função para calcular o SLA em horas e minutos
function calcularSLA(DateTime $dataInicial, DateTime $dataFinal) {
    require('../src/db_config.php');
    $slaMinutos = 0;
    
    $dataAtual = clone $dataInicial;
    while ($dataAtual <= $dataFinal) {
        // Verifica se é dia útil e se está dentro do horário comercial
        if (isDiaUtil($dataAtual)) {
            if($dataAtual->format('N') > 0 || $dataAtual->format('N') <= 5) {
                $sqlIntervalo = "SELECT begin, end FROM glpi_calendarsegments WHERE day = {$dataAtual->format('N')}";

                $buscaIntervalo = mysqli_query($sqlcon, $sqlIntervalo);
                if($buscaIntervalo) {
                    while($intervalo = mysqli_fetch_row($buscaIntervalo)){
                        $intervaloInicio = $intervalo[0];
                        $intervaloFim = $intervalo[1];
                    }
                } 

                if($dataAtual->format('H') >= $intervaloInicio && $dataAtual->format('H') < $intervaloFim){
                    $slaMinutos += 60; // Adiciona 60 minutos (1 hora) ao SLA
                } 
            }
        }
        $dataAtual->modify('+1 hour');
    }

    if($dataAtual) {
        $minutosRestantes = $dataFinal->diff($dataInicial)->i;
        $slaMinutos += $minutosRestantes;
        // Calcula as horas e minutos a partir do total de minutos
        $horas = floor($slaMinutos / 60);
        $minutos = $slaMinutos % 60;
    }
    

    return [$horas, $minutos, $slaMinutos];
}

function calculaPausa($ID){
    require('../src/db_config.php');
    
    $sqlPausas = "SELECT * FROM tickets_pause WHERE tickets_id = {$ID}";
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
    return $slaPausa;
}
function calcularPorcentagemEntreMinutos($totalMinutos, $porcentagem) {
    // Fórmula para calcular a porcentagem
    $resultado = ($totalMinutos * $porcentagem) / 100;
    return $resultado;
}
function buscaSLATotal($ID) {
    require('../src/db_config.php');

    $sqlTicketBase = "SELECT slas_id_ttr FROM glpi_tickets where id = {$ID}";
    $sqlTicket = mysqli_query($sqlcon, $sqlTicketBase);
    if($sqlTicket) {
        $row = $sqlTicket->fetch_assoc();

        $slas_id_ttr = $row['slas_id_ttr'];
    }
    $SQL = "SELECT number_time from glpi_slas where id = {$slas_id_ttr}";
    $horasSLA = mysqli_query($sqlcon, $SQL);
    if($horasSLA){
        $r = $horasSLA->fetch_assoc();
        if (isset($r) && isset($r['number_time'])) {
            $horas = $r['number_time'];
        }
    }
    if(isset($horas)){
        return $horas;
    } else{
        return "00";
    }
}

function buscaAtendente($ID){
    require('../src/db_config.php');
    $arrAtendente = array();
    $arrUsuarioAtendente = array();
    $sqlAtendente = "SELECT users_id FROM glpi_tickets_users WHERE tickets_id = {$ID} AND type = 2";
    $atendente = mysqli_query($sqlcon, $sqlAtendente);

    if($atendente) {
        while($row = mysqli_fetch_assoc($atendente)){
            array_push($arrAtendente, $row['users_id']);
        }
    }
    foreach($arrAtendente as $aten) {
        $sqlUsuario = "SELECT name FROM glpi_users WHERE id = {$aten}";
        $usuario = mysqli_query($sqlcon, $sqlUsuario);
        if($usuario) {
            while($row = mysqli_fetch_assoc($usuario)){
                array_push($arrUsuarioAtendente, $row['name']);
            }
        }
    }
    // foreach ($arrUsuarioAtendente as &$fruta) {
    //     $palavras = explode(" ", $fruta);
    //     $primeirasLetras = "";
    
    //     foreach ($palavras as $palavra) {
    //         $primeirasLetras .= substr(ucfirst($palavra), 0, 1);
    //     }
    
    //     $fruta = $primeirasLetras;
    // }
    return $arrUsuarioAtendente;
}
function buscaSolicitante($ID){
    require('../src/db_config.php');
    $arrSolicitante = array();
    $arrUsuarioSolicitante = array();
    $sqlSolicitante = "SELECT users_id FROM glpi_tickets_users WHERE tickets_id = {$ID} AND type = 2";
    $solicitante = mysqli_query($sqlcon, $sqlSolicitante);

    if($solicitante) {
        while($row = mysqli_fetch_assoc($solicitante)){
            array_push($arrAtendente, $row['users_id']);
        }
    }
    foreach($arrAtendente as $aten) {
        $sqlUsuario = "SELECT name FROM glpi_users WHERE id = {$aten}";
        $usuario = mysqli_query($sqlcon, $sqlUsuario);
        if($usuario) {
            while($row = mysqli_fetch_assoc($usuario)){
                array_push($arrUsuarioAtendente, $row['name']);
            }
        }
    }
    // foreach ($arrUsuarioAtendente as &$fruta) {
    //     $palavras = explode(" ", $fruta);
    //     $primeirasLetras = "";
    
    //     foreach ($palavras as $palavra) {
    //         $primeirasLetras .= substr(ucfirst($palavra), 0, 1);
    //     }
    
    //     $fruta = $primeirasLetras;
    // }
    return $arrUsuarioAtendente;
}
function buscaObservador($ID){
    require('../src/db_config.php');
    $arrObservador = array();
    $arrUsuarioObservador = array();
    $sqlObservador = "SELECT users_id FROM glpi_tickets_users WHERE tickets_id = {$ID} AND type = 3";
    $observador = mysqli_query($sqlcon, $sqlObservador);

    if($observador) {
        while($row = mysqli_fetch_assoc($observador)){
            array_push($arrObservador, $row['users_id']);
        }
    }
    foreach($arrObservador as $obse) {
        $sqlUsuario = "SELECT name FROM glpi_users WHERE id = {$obse}";
        $usuario = mysqli_query($sqlcon, $sqlUsuario);
        if($usuario) {
            while($row = mysqli_fetch_assoc($usuario)){
                array_push($arrUsuarioObservador, $row['name']);
            }
        }
    }
    // foreach ($arrUsuarioAtendente as &$fruta) {
    //     $palavras = explode(" ", $fruta);
    //     $primeirasLetras = "";
    
    //     foreach ($palavras as $palavra) {
    //         $primeirasLetras .= substr(ucfirst($palavra), 0, 1);
    //     }
    
    //     $fruta = $primeirasLetras;
    // }
    return $arrUsuarioObservador;
}
function buscaDepartamento($ID){
    require('../src/db_config.php');
    $departamento;
    $sqlDepartamento = "SELECT itilcategories_id FROM glpi_tickets WHERE id = {$ID}";
        $dep = mysqli_query($sqlcon, $sqlDepartamento);
        if($dep) {
            $row = $dep->fetch_assoc();

            $itilcategories_id = $row['itilcategories_id'];
        }
    $sqlITILCategories = "SELECT completename FROM glpi_itilcategories WHERE id = {$itilcategories_id}";
    $itilCategory = mysqli_query($sqlcon, $sqlITILCategories);
    if($itilCategory) {
        $row = $itilCategory->fetch_assoc();

        $completename = $row['completename'];
    }
    $arrayPartes = explode(">", $completename);

    // Remove espaços em branco adicionais antes e depois de cada parte
    $parte1 = trim($arrayPartes[0]);
    $parte2 = trim($arrayPartes[1]);

    return [$parte1, $parte2];
}