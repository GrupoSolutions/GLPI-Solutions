<?php

Session::checkLoginUser();
$groupID = $_SESSION['glpiID'];
include_once('findTickets.php');

if (isset($_GET['status'])) {
    $status = $_GET['status'];
} else {
    $status = 0;
}
$arrDep = findTickets($groupID, $status);
function extrairIniciais($nomeCompleto) {
    $iniciais = '';
    $nomes = explode(' ', $nomeCompleto);

    foreach ($nomes as $nome) {
        $iniciais .= substr($nome, 0, 1);
    }

    return strtoupper($iniciais); // Convertendo para maiúsculas, caso deseje
}
require_once('../assets/php/tickets/sla.php');

?>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="../assets/css/fa6.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
<table id="tblTickets" class="table" style="width:100%; background:#FFF;">
    <thead>
        <th>ID</th>
        <th>Titulo</th>
        <th>Departamento</th>
        <th>Categoria</th>
        <th>Solicitante</th>
        <th>Atendente</th>
        <th>Ultima Interação</th>
        <th>Status</th>
        <th>SLA</th>    
    </thead>

    <tbody>
        <?php foreach($arrDep as $item) { 
            $badge = "badge-soft-danger";
            list($dep, $cat) = findDep($item[0]);
            if($item[9]){
                $dataCriado = new DateTime($item[3]);
                $dataResolve = new DateTime($item[9]);
                list($hora, $minuto, $slaPrevisto) = calcularSLA($dataCriado, $dataResolve);
                $tempoPausa = calculaPausa($item[0]);
                $valorTotal = $slaPrevisto - $tempoPausa;
                $horaSLA = floor($valorTotal / 60);
                $minutoSLA = $valorTotal % 60;
                if($item[4]){
                    $dataMax = new DateTime($item[4]);

                    list($h,$m,$totalSLA) = calcularSLA($dataCriado, $dataMax);
                    $horas = floor($valorTotal / 60);
                    $minutos = $valorTotal % 60;
                    $percentSLA = ($valorTotal / $totalSLA) * 100;
                    $percentBadge = $percentSLA;
                    
                    if($percentSLA <= 30) {
                        $avisoSLA = "#49bf4d";
                        $badge = "badge-soft-success";
                    } else if($percentSLA <= 50) {
                        $avisoSLA = "#FD7E14";
                        $badge = "badge-soft-warning";
                    } else {
                        $avisoSLA = "#DC3545";
                        $badge = "badge-soft-danger";
                    }
                }
            }else if($item[3]){
                $dataCriado = new DateTime($item[3]);
                $dataResolve = new DateTime();
                list($hora, $minuto, $slaPrevisto) = calcularSLA($dataCriado, $dataResolve);
                $tempoPausa = calculaPausa($item[0]);
                $valorTotal = $slaPrevisto - $tempoPausa;
                $horaSLA = floor($valorTotal / 60);
                $minutoSLA = $valorTotal % 60;
                if($item[4]){
                    $dataMax = new DateTime($item[4]);

                    list($h,$m,$totalSLA) = calcularSLA($dataCriado, $dataMax);
                    $horas = floor($valorTotal / 60);
                    $minutos = $valorTotal % 60;
                    $percentSLA = ($valorTotal / $totalSLA) * 100;
                    $percentBadge = $percentSLA;
                    if($percentSLA <= 30) {
                        $avisoSLA = "#49bf4d";
                        $badge = "badge-soft-success";
                    } else if($percentSLA <= 50) {
                        $avisoSLA = "#FD7E14";
                        $badge = "badge-soft-warning";
                    } else {
                        $avisoSLA = "#DC3545";
                        $badge = "badge-soft-danger";
                    }
                }
               
            }

            $atendentes = buscaAtendente($item[0]);
            if($item[2] == "Novo"){
                $badgeStatus = "badge-soft-success";
            } else if($item[2] == "Aguardando usuário"){
                $badgeStatus = "badge-soft-warning";
            } else if($item[2] == "Em Atendimento"){
                $badgeStatus = "badge-soft-primary";
            } else if($item[2] == "Solucionado"){
                $badgeStatus = "badge-soft-secondary";
            } else if($item[2] == "Aguardando terceiros") {
                $badgeStatus = "badge-soft-info";
            } else {
		$badgeStatus = "badge-soft-warning";
	    }

            
        ?>
            <tr>
                <td><a class="idTicket" href="../front/ticket.form.php?id=<?php echo $item[0]?>"> <?php echo $item[0]?></a></td>
                 <td><div class="tooltips-container"><a href="../front/ticket.form.php?id=<?php echo $item[0]?>"> 
                    <?php
                        $str = substr($item[1],0,30);
                        if(strlen($item[1]) > 30) {
                            $str .= '...';
                        } 
                        echo $str;
                        
                    ?>

                <span class='tooltips'> 
                <?php echo $item[1] ?>
                </span>
                </a></div></td>                
		<td><?php echo $dep?></td> 
                <td><?php echo $cat; ?></td>
                <td><?php echo "<div class='tooltips-container avatar-chamado'>". extrairIniciais($item[10]) . " <span class='tooltips'>" . $item[10] . "</span></div>"; ?></td>
                <td><?php foreach($atendentes as $atendente){
                    
                    echo "<div class='tooltips-container avatar-chamado'>". extrairIniciais($atendente) . " <span class='tooltips'>" . $atendente . "</span></div>";
                    
                    } 
                ?></td>
                <td><?php echo date('d/m/Y H:i', strtotime($item[8]))?></td>
                <td><span class="badgee <?php echo $badgeStatus;?>"><?php echo $item[2];?></span></td>
                <td><span class="badgee <?php echo $badge;?>"><?php echo $horaSLA.":". str_pad($minutoSLA, 2, '0', STR_PAD_LEFT);?>h  <i class="fa-regular fa-clock"></i></td>
                
            </tr>
        <?php } ?>
    </tbody>
</table>


    <script>
      $(document).ready(function() {
          $('#tblTickets').DataTable({
              language: {
                  url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
              },
              pageLength: 20,
              lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "Todos"]],
          });

      });
</script>