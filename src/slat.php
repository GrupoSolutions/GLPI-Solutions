<script src="../assets/js/jQuery-Knob-1.2.13/dist/jquery.knob.min.js"></script>
<script src="../assets/css/fa6.js"></script>
<?php

require('db_config.php');
Session::checkLoginUser();

$arrPausa = array();
$arrTicket = array();
$status = 0;
$dataAtribuicao = 0;
$dataInicio = 0 ;
$dataFim = 0;
$intervaloInicio = 0;
$intervaloFim = 0;
$valorTotal = 0;
$dataAtribuida;
$avisoSLA;
$badge;
$dataSolucao;
$sqlTicket = "SELECT status, time_to_resolve, time_to_own, date_creation, takeintoaccountdate, solvedate FROM glpi_tickets where id = {$ID}";
$buscaTicket = mysqli_query($sqlcon, $sqlTicket);
if($buscaTicket) {
    while($ticket = mysqli_fetch_row($buscaTicket)){
        $status = $ticket[0];
        $dataFim = $ticket[1];
        $dataAtribuicao = $ticket[2];
        $dataInicio = $ticket[3];
        $dataAtribuida = $ticket[4];
        $dataSolucao = $ticket[5];
    }
}
switch($status){
    case "1":
        $stt = '<i class="itilstatus fa-solid fa-circle new me-1" title="" data-bs-toggle="tooltip" data-bs-original-title="Novo" aria-label="Novo"></i>';
        $sttDesc = "Novo";
        break;
    case "2":
        $stt = '<i class="itilstatus fa-regular fa-spinner fa-spin assigned me-1" title="" data-bs-toggle="tooltip" data-bs-original-title="Em atendimento" aria-label="Em atendimento (atribuído)"></i>';
        $sttDesc = "Em Atendimento";
        break;
    case "3":
        $stt = '<i class="itilstatus fa-light fa-hourglass-half planned me-1" title="" data-bs-toggle="tooltip" data-bs-original-title="3" aria-label="3"></i>';
        $sttDesc = "Planejado";
        break;
    case "4":
        $stt = '<i class="itilstatus fa-light fa-hourglass-half waiting me-1" title="" data-bs-toggle="tooltip" data-bs-original-title="Aguardando terceiros" aria-label="Aguardando terceiros"></i>';
        $sttDesc = "Aguardando Terceiros";
        break;
    case "5":
        $stt = '<i class="itilstatus fa-solid fa-circle-check solved me-1" title="" data-bs-toggle="tooltip" data-bs-original-title="Solucionado" aria-label="Solucionado"></i>';
        $sttDesc = "Solucionado";
        break;
    case "6":
        $stt = '<i class="itilstatus fa-circle-x closed me-1" title="" data-bs-toggle="tooltip" data-bs-original-title="Fechado" aria-label="Fechado"></i>';
        $sttDesc = "Fechado";
        break;
}
require ('../assets/php/tickets/sla.php');
$dataFinal = new DateTime();
if(!$dataFim){
    echo "<script>alert('Erro! Categoria sem SLA configurado corretamente');</script>";
}
if(isset($dataFim)){
    $dataMax = new DateTime($dataFim);
}
$dataMax = new DateTime();
$dataInicial = new DateTime($dataInicio);
if($dataSolucao) {
    $dataSolucionada = new DateTime($dataSolucao);
}

list($horas, $minutos, $slaMinutos) = calcularSLA($dataInicial, $dataFinal);
$tempoPausado = calculaPausa($ID);
$valorTotal = $slaMinutos - $tempoPausado;

list($h,$m,$totalSLA) = calcularSLA($dataInicial, $dataMax);

$horas = floor($valorTotal / 60);
$minutos = $valorTotal % 60;
$percentSLA = ($valorTotal / $totalSLA) * 100;
$percentBadge = $percentSLA;

$maxHorasSLA = buscaSLATotal($ID);
if($percentSLA > 100){ // Aqui é pra não estrapolar no input do jQuery
    $percentBadge = 100;
}
// Aqui seta as cores do card de SLA
if($percentSLA <= 30) {
    $avisoSLA = "#49bf4d";
    $badge = "badge-success";
} else if($percentSLA <= 50) {
    $avisoSLA = "#FD7E14";
    $badge = "badge-warning";
} else {
    $avisoSLA = "#DC3545";
    $badge = "badge-danger";
}

//Busca de atendentes e observadores e solicitantes
$atendentes = buscaAtendente($ID);
$observadores = buscaObservador($ID);
list($depart, $categ) = buscaDepartamento($ID);
?>
<style media="screen">
@import url(http://fonts.googleapis.com/css?family=Roboto:400,700,300);
.mt-100{
  margin-top: 200px;
}
.progres{
    width:100%;
    height:auto;
    margin-left: 50%;
    margin-bottom: 10%;
}
.badge-warning {
    background-color: #FD7E14;
}
.badge-success {
    background-color: #49bf4d;
}
.progress div {
    display:flex;
}
.hSLA {
    width: 300px;
}
.hSLA p{
    font-weight:bold;
    font-size:22px;
}
#sla {
    background: var(--tblr-body-bg);
}
.card-body  {
    background: var(--tblr-body-bg);
}
.knob {
    font-size:14px !important;
}
.knob {
    width: 39px !important;
    margin-left: -43px !important;
}
.slaSBadge {
    font-size: 12px;
}
</style>

  
<div class="row d-flex justify-content-center">
    <div class="card mb-3 " id="sla" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Status do SLA</h5>
            
            <div class="row">
                <div class="col">
                    <div class="hSLA">
                        <p><?php echo $horas.":". str_pad($minutos, 2, '0', STR_PAD_LEFT);?></p>
                        <span class="badge <?php echo $badge;?>"><?php echo round($percentSLA);?>%</span><span class="slaSBadge"> de <?php echo $maxHorasSLA;?>:00H definidos</span>
                    </div>  
                </div>
                <div class="col">
                    <div class="progres">
                        <input type="text" class="knob" value="<?php echo round($percentBadge); ?>" data-min="0" data-max="100" data-width="380" data-displayInput="true" data-format="%" data-readOnly="true" data-fgColor="<?php echo $avisoSLA ?>"> 
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <div class="card mb-3 mr-3" id="sla" style="width: 18rem; margin-left: 10px;">
        <div class="card-body" style="width:;">
            <h5 class="card-title">Status do Chamado </h5>
            
            <div class="row">
                <div class="col">
                    <div>
                        <span class="card-subtitle mb-2 text-body-secondary">N° Chamado:<span style="font-size: 15px;"> <strong><?php echo $ID;?></strong></span></span>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div>
                        <span class="card-subtitle mb-2 text-body-secondary">Status:<span style="font-size: 15px;"> <strong><?php echo $stt; echo $sttDesc?></strong></span></span>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div>
                        <span class="card-subtitle mb-2 text-body-secondary">Criado em:<span style="font-size: 15px;"> <strong><?php echo $dataInicial->format("d/m/Y H:i");?></strong></span></span>
                    </div>  
                </div>
            </div>
            <?php if($dataSolucao){ ?>
                <div class="row">
                    <div class="col">
                        <div>
                            <span class="card-subtitle mb-2 text-body-secondary">Solucionado em:<span style="font-size: 15px;"> <strong><?php echo $dataSolucionada->format("d/m/Y H:i");?></strong></span></span>
                        </div>  
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="card mb-3 mr-3" id="sla" style="width: 18rem; margin-left: 10px;">
        <div class="card-body" style="width:;">
            <h5 class="card-title">Informações do Chamado</h5>
            
            <div class="row">
                <div class="col">
                    <div>
                        <span class="card-subtitle mb-2 text-body-secondary">Departamento:</span>
                        <strong><?php echo $depart;?></strong>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div>
                        <span class="card-subtitle mb-2 text-body-secondary">Categoria:</span>
                        <strong><?php echo $categ;?></strong>
                    </div>  
                </div>
            </div>
            <?php if($observadores){ ?>
            <div class="row">
                <div class="col">
                    <div>
                        <span class="card-subtitle mb-2 text-body-secondary">Observadores:</span>
                        <strong><?php foreach($observadores as $obs){echo $obs . ', ';}?></strong>
                    </div>  
                </div>
            </div>
           <?php } ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".knob").knob({
            'width':50,
            'height':50,
            'dis':true,
            'stopper':false,
            'thickness': .052,
            'format' : function (value) {
                return value + '%';
            }
        });
    });
</script>

