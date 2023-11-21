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
<div onclick="showDiv()" class="btnRelatorio"><a class='btn button-primary button-relatorio'>Relatório de Solicitações</a></div>
<form id="relatorio_soli" method="post" action="/src/Relatorios.php">
    <div style="margin-top:15px;display:none;" id="relatorio_solicitacao">
        <div>
            <div style="float:left;">
                <div><label class="lblRelatorios" >Data Inicial:</label></div>
                <input type="date" id="data_inicial" name="data_inicial" required>
            </div>
            <div>
                <div style="margin-left:5px;"><label class="lblRelatorios" style="margin-left:5px;">Data Final:</label></div>
                <input type="date" id="data_final" blur="" style="margin-left:5px;" name="data_final" required>
            </div>
        </div>
        <div style="float:left;">
            <div><label class="lblRelatorios" >Status:</label></div>
            <select name="status" id="status">
                <option value="0">Todos</option>
                <option value="1">Aprovado</option>
                <option value="102">Recusado</option>
                <option value="101">Em Aberto</option>
            </select>
            <div style="margin-top:5px;width:2px;"></div>

            <button type="submit" class="btn btn-primary " onclick="return checaDatas()" id="envio"><i class="fa fa-search" aria-hidden="true"></i> <span class="btnFiltra" style="margin-left:5px;">Gerar Relatório</span></button><br>
            
        </div>
    </div>
</form>
</div>


<div style="margin-top:5px;" class="btnRelatorio"><a href='/src/RelatorioPorStatus.php' class='btn button-primary button-relatorio'>Relatório de Ativos por Status</a></div>
<div style="margin-top:5px;" class="btnRelatorio"><a href='/src/RelatorioGlobal.php' class='btn button-primary button-relatorio'>Relatório de Ativos Global</a></div>
<div style="margin-top:5px;" class="btnRelatorio"><a href='/src/RelatorioFinanceiroInsumo.php' class='btn button-primary button-relatorio'>Relatório Financeiro de Insumos</a></div>

<div style="margin-top:5px;">
<div style="margin-top:5px;" onclick="showFinanceiro()" class="btnRelatorio"><a class='btn button-primary button-relatorio'>Relatório Financeiro de Ativos</a></div>
    

    <form method="POST" id="frmFiltraBusca" action="./financeiro.php">
        <div style="width:350px;margin:15px 5px;display:none;" id="relatorio_financeiro">
            <script src="https://unpkg.com/slim-select@latest/dist/slimselect.min.js"></script>
            <link href="https://unpkg.com/slim-select@latest/dist/slimselect.css" rel="stylesheet"></link>
            <label class="lblRelatorios" for="tipoBusca">Tipo de ativo:</label>
            <select class="mt-2 mb-2" id="tipoBusca" multiple>
                <option value="computers">Computadores</option>X
                <option value="monitors">Monitores</option>
                <option value="printers">Impressoras</option>
                <option value="phones">Telefones</option>
                <option value="peripherals">Dispositivos</option>
                <option value="passivedcequipments">Dispositivos Passivos</option>
            </select>
            
            <label class="lblRelatorios" for="operacao">Operação:</label>
            <select class="mt-2 mb-2" name="operacao[]" id="operacao" multiple>
                <?php
                    foreach($arrOperacao as $operacao){
                        echo "<option value='". $operacao[0]."'>". $operacao[0] ."</option>";
                    }
                ?>
            </select>
                <button type="submit" value="Filtrar" name="choice_date" class="btn btn-primary"><i class="fa fa-search btnFiltra" aria-hidden="true"></i> <span class="btnFiltra" style="margin-left:5px;">Filtrar</span></button>
                <?php html::closeForm(); ?>
        </div>
            </td></tr>
            </table>
    </form>
   
   
    <script>
        new SlimSelect({
            select: '#tipoBusca',
            settings: {
                placeholderText: 'Informe o tipo de ativo',
                searchPlaceholder: 'Pesquisar...',
                hideSelected: true,
            }
        })
        new SlimSelect({
            select: '#operacao',
            settings: {
                placeholderText: 'Informe a operação',
                searchPlaceholder: 'Pesquisar...',
                hideSelected: true,
            }
        })
    </script>


<div style="display: flow-root;margin-top:5px;">
<div onclick="showBaixa()" class="btnRelatorio"><a class='btn button-primary button-relatorio'>Relatório de Baixa de Consumíveis</a></div>
<form id="baixa_relatorio" method="post" action="/src/RelatorioBaixa.php">
    <div style="margin-top:15px;display:none;" id="relatorio_baixa">
        <div>
            <div style="float:left;">
                <div><label class="lblRelatorios">Data Inicial:</label></div>
                <input type="date" id="data_inicial" name="data_inicial" required>
            </div>
            <div>
                <div style="margin-left:5px;"><label class="lblRelatorios" style="margin-left:5px;">Data Final:</label></div>
                <input type="date" id="data_final" blur style="margin-left:5px;"  name="data_final" required>
            </div>
            <div style="float:left;">
                <div><label class="lblRelatorios">Status:</label></div>
                <select name="status" id="status">
                    <option value="0">Todos</option>
                    <option value="3">Aprovado</option>
                    <option value="4">Reprovado</option>
                    <option value="2">Aguardando aprovação</option>
                </select>
                <div style="margin-top:5px;width:2px;"></div>
                <button type="submit" class="btn btn-primary btnRelatorios " onclick="return checaDatas()" id="envio"><i class="fa fa-search btnFiltra" aria-hidden="true"></i> <span class="btnFiltra" style="margin-left:5px;">Gerar Relatório</span></button><br>
                <?php html::closeForm(); ?>
            </div>

            <div>
            </div>
        </div>
        
    </div>
</form>
</div>

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
    var div = document.getElementById("relatorio_baixa");
    div.style.opacity = "1";
}
function showFinanceiro(){
    const divHide = document.getElementById('relatorio_financeiro');
    divHide.style.display === "none" ? divHide.style.display = "block" : divHide.style.display = "none";
}
</script> 