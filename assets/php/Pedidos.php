<?php


function buscarPedidos(){
    require '../../../src/db_config.php';

    $SQL = "SELECT glpi_plugin_consumables_requests.id,
    consumables_id,
    glpi_consumableitems.name,
    glpi_plugin_consumables_requests.consumableitemtypes_id,
    glpi_consumableitemtypes.name,
    requesters_id,
    REQUERENTE.name as REQURENTE,
    give_items_id,
    DESTINO.name as DESTINO,
    status,
    number,
    glpi_plugin_consumables_requests.date_mod,
    ticket_id
    FROM glpi_plugin_consumables_requests
        LEFT JOIN
        glpi_consumableitems on glpi_consumableitems.id = glpi_plugin_consumables_requests.consumables_id
        JOIN
        glpi_consumableitemtypes on glpi_consumableitemtypes.id = glpi_plugin_consumables_requests.consumableitemtypes_id
        LEFT JOIN 
        glpi_users as REQUERENTE on REQUERENTE.id = glpi_plugin_consumables_requests.requesters_id
        LEFT JOIN 
        glpi_users as DESTINO on DESTINO.id = glpi_plugin_consumables_requests.give_items_id
    WHERE 
        status = 2";

    $buscaPedido = mysqli_query($sqlcon, $SQL);

    $arrPedidos = array();

    if($buscaPedido){
        while ($requ = mysqli_fetch_row($buscaPedido)) {
            array_push($arrPedidos, $requ);
        }
    }
    return $arrPedidos;
}

function buscarSolicitacoes(){
    require '../../../src/db_config.php';
    $arrSolicitacao = [];

    //BUSCA OS ID's DAS SOLICITAÇÕES, JUNTAMENTE COM COMENTARIO E NOME DO SOLICITANTE
    $sqlSolicitacao = "SELECT glpi_plugin_formcreator_formanswers.id AS ID, USUARIOS.name as SOLICITANTE, status as STATS, DATE_FORMAT(request_date,'%d/%m/%Y %H:%i') AS DATA_PEDIDO, glpi_plugin_formcreator_formanswers.endereco as ENDERECO, glpi_plugin_formcreator_formanswers.cep AS CEP, glpi_plugin_formcreator_formanswers.estado AS ESTADO, glpi_plugin_formcreator_formanswers.cidade AS CIDADE, glpi_plugin_formcreator_formanswers.entrega AS ENTREGA, glpi_plugin_formcreator_formanswers.comment as COMENTARIO FROM glpi_plugin_formcreator_formanswers LEFT JOIN glpi_users USUARIOS on USUARIOS.id = glpi_plugin_formcreator_formanswers.requester_id WHERE glpi_plugin_formcreator_formanswers.request_date between '{$data_inicial}' AND '{$data_final}' AND {$status}";
    $solicitacaoRetorno = mysqli_query($sqlcon, $sqlSolicitacao);
    
    if($solicitacaoRetorno){
        while($row = mysqli_fetch_assoc($solicitacaoRetorno)){
            array_push($arrSolicitacao, $row);
        }
    }
    
    //BUSCA O CONTEUDO DA SOLICITAÇÃO
    $qtdSolicitacao = count($arrSolicitacao);
    for($i = 1; $i < $qtdSolicitacao; $i++){
        $sqlPedido = "SELECT RESPOSTA.id as id, IF(name = 'Tamanho', 'BOTA DE SEGURANÇA', PERGUNTAS.name) AS PERGUNTA, RESPOSTA.answer as RESPOSTA FROM glpi_plugin_formcreator_answers RESPOSTA LEFT JOIN  glpi_plugin_formcreator_questions PERGUNTAS on PERGUNTAS.id = RESPOSTA.plugin_formcreator_questions_id WHERE plugin_formcreator_formanswers_id = {$arrSolicitacao[$i]['ID']} and RESPOSTA.answer IS NOT NULL AND RESPOSTA.answer <> '' AND PERGUNTAS.fieldtype <> 'checkboxes' AND PERGUNTAS.name != 'Tipo de Vestimenta'";
        $returnPedido = mysqli_query($sqlcon, $sqlPedido);
    
        if($returnPedido){
            while($row = mysqli_fetch_array($returnPedido)){
                array_push($arrSolicitacao[$i], "{$row['PERGUNTA']} : {$row['RESPOSTA']}");
                // array_push($arrSolicitacao[$i], $row['RESPOSTA']);
    
            }
        }
    }
    
        for ($j = 1; $j < $qtdSolicitacao; $j++){
            $oldV = $arrSolicitacao[$j][0];
            $newV = str_replace('Informe qual projeto você participa : ', '', $oldV);
            $arrSolicitacao[$j][0] = $newV;
        }
        $arrSoli = [];
    
        for($k=1; $k < $qtdSolicitacao; $k++){
            $qtdARR = count($arrSolicitacao[$k]);
            $idSOL = $arrSolicitacao[$k]['ID'];
            $sqlBuscaChamado = "SELECT glpi_tickets.id FROM glpi_items_tickets INNER JOIN glpi_tickets on (glpi_items_tickets.tickets_id = glpi_tickets.id) WHERE itemtype = 'PluginFormcreatorFormAnswer' AND items_id = '{$idSOL}'";
            $buscarChamado = mysqli_query($sqlcon, $sqlBuscaChamado);
            if($buscarChamado){
                $chamado = mysqli_num_rows($buscarChamado);
                if($chamado != 1){
                    $idChamado = "NÃO GERADO";
                    
                } else{
                    while($cha = mysqli_fetch_array($buscarChamado)){
                        $idChamado = $cha[0];
    
                    }
                }
            }
    
            $nomeSolicitante = $arrSolicitacao[$k]['SOLICITANTE'];
            $dataPedido = $arrSolicitacao[$k]['DATA_PEDIDO'];
            $comentario = $arrSolicitacao[$k]['COMENTARIO'];
            if(isset($arrSolicitacao[$k]['ENDERECO'])){
                $endereco = $arrSolicitacao[$k]['ENDERECO'];
            } else {
                $endereco = '';
            }
            if(isset($arrSolicitacao[$k]['CEP'])){
                $cep = $arrSolicitacao[$k]['CEP'];
            } else {
                $cep = '';
            }
            if(isset($arrSolicitacao[$k]['CIDADE'])){
                $cidade = $arrSolicitacao[$k]['CIDADE'];
            } else{
                $cidade = '';
            }
            if(isset($arrSolicitacao[$k]['ENTREGA'])){
                $tipoEntrega = $arrSolicitacao[$k]['ENTREGA'];
            } else {
                $tipoEntrega = '';
            }
            $stt = $arrSolicitacao[$k]['STATS'];
            switch ($stt) {
                case 1:
                    $stt = "Aprovado";
                    break;
                case 101:
                    $stt = "Em Aberto";
                    break;
                case 102:
                    $stt = "Recusado";
                    break;
                case 6:
                    $stt = "Excluído";
            }
            $projeto = $arrSolicitacao[$k][0];
            $qtdPedidos = $qtdARR - 10;
            for($a = 1; $a < $qtdPedidos; $a++){
                $pedido = $arrSolicitacao[$k][$a];
                if(!isset($idChamado)){
                    $idChamado = 'NÃO GERADO';
                }
                $item = explode(" : " , $pedido);
                array_push($arrSoli, [$idChamado, $nomeSolicitante, $dataPedido, $comentario, $projeto ,strtoupper($stt), strtoupper($item[0]), $item[1], $endereco, $cidade, $cep, $tipoEntrega]);
    
            }
        }
}
?>