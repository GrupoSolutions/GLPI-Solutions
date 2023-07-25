<script src="../assets/js/jQuery-Knob-1.2.13/dist/jquery.knob.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

$sqlTicket = "SELECT status, time_to_resolve, time_to_own, date_creation FROM glpi_tickets where id = {$ID}";
$buscaTicket = mysqli_query($sqlcon, $sqlTicket);
if($buscaTicket) {
    while($ticket = mysqli_fetch_row($buscaTicket)){
        $status = $ticket[0];
        $dataFim = $ticket[1];
        $dataAtribuicao = $ticket[2];
        $dataInicio = $ticket[3];
    }
}
require ('../assets/php/tickets/sla.php');
$dataFinal = new DateTime();
$dataMax = new DateTime($dataFim);
$dataInicial = new DateTime($dataInicio);

list($horas, $minutos, $slaMinutos) = calcularSLA($dataInicial, $dataFinal);
$tempoPausado = calculaPausa($ID);
$valorTotal = $slaMinutos - $tempoPausado;

list($h,$m,$totalSLA) = calcularSLA($dataInicial, $dataMax);

$horas = floor($valorTotal / 60);
$minutos = $valorTotal % 60;
$percentSLA = ($slaMinutos / $totalSLA) * 100;
$percentBadge = $percentSLA;

$maxHorasSLA = buscaSLATotal($ID);
if($percentSLA > 100){
    $percentBadge = 100;
}
$avisoSLA;
$badge;
if($percentSLA <= 30) {
    $avisoSLA = "#198754";
    $badge = "badge-success";
} else if($percentSLA <= 50) {
    $avisoSLA = "#FD7E14";
    $badge = "badge-warning";
} else {
    $avisoSLA = "#DC3545";
    $badge = "badge-danger";
}
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
    background-color: #198754;
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
    background-color: #eaeaea
}
.knob {
    font-size:18px !important;
}
.slaSBadge {
    font-size: 12px;
}
</style>

  
<div class="row d-flex justify-content-center">
<div class="card mb-3" id="sla" style="width: 18rem;">
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
<div class="col-md-6">
<script>
    $(document).ready(function() {
        $(".knob").knob({
            'width':60,
            'height':60,
            'dis':true,
            'stopper':false,
            'thickness': .2
        });
    });
  </script>


    
</div>

</div>