<?php 
require_once 'db_config.php';
$buscaOperacao = "SELECT NAME FROM glpi_plugin_fields_operaofielddropdowns";
$operacao = mysqli_query($sqlcon, $buscaOperacao);
$arrOperacao = array();
if($operacao){
    while ($requ = mysqli_fetch_row($operacao)) {
        array_push($arrOperacao, $requ);
    }
}

?>
<div style="display: flow-root;">
<div onclick="showDiv()" ><a class='btn button-primary'>Relatório de Solicitações</a></div>
<form id="relatorio_soli" method="post" action="/glpi/src/Relatorios.php">
    <div style="margin-top:15px;display:none;" id="relatorio_solicitacao">
        <div>
            <div style="float:left;">
                <div><label>Data Inicial:</label></div>
                <input type="date" id="data_inicial" name="data_inicial" required>
            </div>
            <div>
                <div><label>Data Final:</label></div>
                <input type="date" id="data_final" blur="" name="data_final" required>
            </div>
        </div>
        <div style="float:left;">
            <div><label>Status:</label></div>
            <select name="status" id="status">
                <option value="0">Todos</option>
                <option value="1">Aprovado</option>
                <option value="102">Recusado</option>
                <option value="101">Em Aberto</option>
            </select>
            <button type="submit" class="btn btn-primary" onclick="return checaDatas()" id="envio">Gerar Relatório</button><br>
        </div>
    </div>
</form>
</div>

<div style="display: flow-root;margin-top:5px;">
<div onclick="showBaixa()"><a class='btn button-primary'>Relatório de Baixa de Consumíveis</a></div>
<form id="baixa_relatorio" method="post" action="/glpi/src/RelatorioBaixa.php">
    <div style="margin-top:15px;display:none;" id="relatorio_baixa">
        <div>
            <div style="float:left;">
                <div><label>Data Inicial:</label></div>
                <input type="date" id="data_inicial" name="data_inicial" required>
            </div>
            <div>
                <div><label>Data Final:</label></div>
                <input type="date" id="data_final" blur="" name="data_final" required>
            </div>
        </div>
        <div style="float:left; margin-top:5px;">
            <button type="submit" class="btn btn-primary" onclick="return checaDatas()" id="envio">Gerar Relatório</button><br>
        </div>
    </div>
</form>

</div>
<div style="margin-top:5px;"><a href='/glpi/src/RelatorioPorStatus.php' class='btn button-primary'>Relatório de Ativos por Status</a></div>
<div style="margin-top:5px;"><a href='/glpi/src/RelatorioGlobal.php' class='btn button-primary'>Relatório de Ativos Global</a></div>

<div style="margin-top:5px;">
<div style="margin-top:5px;" onclick="showFinanceiro()"><a class='btn button-primary'>Relatório Financeiro de Ativos</a></div>
    <link rel="stylesheet" href="/glpi/assets/css/multi-select-tag.css">
    <form method="POST" id="frmFiltraBusca" action="./financeiro.php">
        <div style="width:350px;margin-top:15px;display:none;" id="relatorio_financeiro">
            <label for="tipoBusca">Tipo de ativo:</label>
            <select name="tipoBusca[]" id="tipoBusca" multiple>
                <option value="computers">Computadores</option>
                <option value="monitors">Monitores</option>
                <option value="printers">Impressoras</option>
                <option value="phones">Telefones</option>
                <option value="peripherals">Dispositivos</option>
                <option value="passivedcequipments">Dispositivos Passivos</option>
            </select>
            <label for="operacao">Operação:</label>
            <select name="operacao[]" id="operacao" multiple>
                <?php
                    foreach($arrOperacao as $operacao){
                        echo "<option value='". $operacao[0]."'>". $operacao[0] ."</option>";
                    }
                ?>
            </select>
            
        
            <?php
            echo Html::submit('Filtrar', ['name' => 'choice_date', 'class' => 'btn btn-primary']);
            echo "</div>";
   echo "</td></tr>";
   echo "</table>";
   Html::closeForm();
   ?>
                </div>
<script src="/glpi/assets/js/multi-select-tag.js"></script>

<script>
    new MultiSelectTag('tipoBusca')  // id
    new MultiSelectTag('operacao')
</script>



<script>
function checaDatas(){
    const data_inicial = document.getElementById('data_inicial').value;
    const data_final = document.getElementById('data_final').value;
    const status = document.getElementById('status').value;
    
    if(data_inicial > data_final){
        setTimeout(alert("Insira um intervalo de datas válido."), 4000);
        return false;
    } else{
        return true;
    }
}
function showDiv(){
    const divHide = document.getElementById('relatorio_solicitacao');
    divHide.style.display === "none" ? divHide.style.display = "block" : divHide.style.display = "none";
}
function showBaixa(){
    const divHide = document.getElementById('relatorio_baixa');
    divHide.style.display === "none" ? divHide.style.display = "block" : divHide.style.display = "none";
}
function showFinanceiro(){
    const divHide = document.getElementById('relatorio_financeiro');
    divHide.style.display === "none" ? divHide.style.display = "block" : divHide.style.display = "none";
}
</script> 