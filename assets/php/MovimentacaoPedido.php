<?php

include('../../../inc/includes.php');
Session::checkLoginUser();

require('Pedidos.php');

$arrPedidos = buscarPedidos();
?>

<html>
  <head>
    
    <!-- Add custom stylesheet here -->
    <link rel="stylesheet" href="/glpi05/assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../../assets/css/Semantic/semantic.min.css">
    <style>
       
    </style>

  </head>
  <body>
<table id="example" class="table" style="width:100%">
    <thead>
        <th>N°Chamado</th>
        <th>Solicitado por</th>
        <th>Aprovado por</th>
        <th>Tipo de Insumo</th>
        <th>Insumo</th>
        <th>Quantidade</th>
        <th>Data da aprovação</th>
        <th>Ações</th>
    </thead>

    <tbody>
        <?php foreach($arrPedidos as $item) { ?>
            <tr>
                <td><a href="../../../front/ticket.form.php?id=<?php echo $item[12]?>"> <?php echo $item[12]?></td>
                <td><a href="../../../front/user.form.php?id=<?php echo $item[7]?>"> <?php echo $item[8]?></a></td>
                <td><a href="../../../front/user.form.php?id=<?php echo $item[5]?>"> <?php echo $item[6]?></a></td>
                <td><?php echo $item[4]; ?></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo mb_strtoupper($item[10])?></td>
                <td><?php echo date('d/m/Y', strtotime($item[11] ?? '')); ?></td>
                <td> 
                  <i class="red large ban icon "></i>
                  <i name="view" id="<?php echo $item[10] . '-' . $item[0] . '-' . $item[2] . '-' . $item[7];?>" class="green large check icon view_data" data-toggle="modal" data-target="#exampleModal">  </i>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<!-- Modal -->
<div id="dataModal" class="modal fade">  
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aprovação de Solicitação - Movimentação de Insumo</h5>
        <a data-dismiss="modal" aria-label="Close"><i class="close icon"></i></a>
        
      </div>
      <div class="modal-body">
      <form method="POST" action="../../../assets/php/AprovaInsumo.php" class="ui form" id="employee_detail" onsubmit="return true;">
            <h4 class="ui dividing header">Destino do Insumo</h4>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="usuarioSolicitante" value="<?php echo $item[7]?>">
        <input type="hidden" name="usuarioValidador" value="<?php echo $_SESSION['glpiID'] ?>">
        <button type="button" class="btn btn-danger" data-dismiss="dataModal">Cancelar</button>
        <button type="submit" class="btn btn-success" id="btnAprova">Aprovar Movimentação</button>
        <?php Html::closeForm()?>
      </div>
      </form>
    </div>
  </div>
 </div>  

<?php if (isset($_SESSION['moviAprovada']) && $_SESSION['moviAprovada']) {
    // Exibir o modal
    echo "<script>$(document).ready(function() { $('#seu-modal').modal('show');});
    $('.check-icon').hide();
  setTimeout(function () {
    $('.check-icon').show();
  }, 10);</script>";
    // Redefinir a variável de sessão para evitar que o modal seja exibido novamente em atualizações da página
    unset( $_SESSION['moviAprovada']);
} ?>
<div id="seu-modal" class="modal fade">  
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
      </div>
      <div class="modal-body">
        <div class="success-checkmark">
        <div class="check-icon">
          <span class="icon-line line-tip"></span>
          <span class="icon-line line-long"></span>
          <div class="icon-circle"></div>
          <div class="icon-fix"></div>
        </div>
        </div>
        <h3 align="center">Movimentação aprovada!</h3>
      </div>
  </div>
 </div>  

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="../../../assets/css/Semantic/semantic.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable({
              language: {
                  url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
              },
              pageLength: 25,
          });

      });
      $(document).ready(function(){  
      $('.view_data').click(function(){  
          var qtd = $(this).attr("placeholder");
          var employee_id = $(this).attr("id"); 
           
            $.ajax({  
                url:"../../../assets/php/select.php",  
                method:"post",  
                data:{employee_id:employee_id, qtd:qtd, },  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");
                     
                }
            }); 
          }); 
        });
        
    </script>
  </body>
</html>