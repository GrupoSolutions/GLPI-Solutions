<?php

include('../../../inc/includes.php');
Session::checkLoginUser();

require('Pedidos.php');

$arrPedidos = buscarPedidos();
?>

<html>
  <head>
    
    <!-- Add custom stylesheet here -->
    <link rel="stylesheet" href="../../../assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../../assets/css/Semantic/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
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
                  <i  id="<?php echo $item[10] . '-' . $item[0] . '-' . $item[2] . '-' . $item[7];?>" class="red large ban icon data_view" data-toggle="modal" data-target="#exampleModal"></i>
                  <i name="view" id="<?php echo $item[10] . '-' . $item[0] . '-' . $item[2] . '-' . $item[7];?>" class="green large check icon view_data" data-toggle="modal" data-target="#exampleModal">  </i>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<!-- Modal -->
<div id="dataModal" class="modal fade" aria-hidden="true" a>  
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aprovação de Solicitação - Movimentação de Insumo</h5>
       
        <a data-dismiss="modal" aria-label="Close" onclick="fechaModal()"><i class="close icon"></i></a>
      </div>
      <div class="modal-body">
      <form method="POST" action="../../../assets/php/AprovaInsumo.php" class="ui form" id="employee_detail" onsubmit="return true;">
            <h4 class="ui dividing header">Destino do Insumo</h4> 
      </div>
      <div class="modal-footer">
        <input type="hidden" name="usuarioSolicitante" value="<?php echo $item[7]?>">
        <input type="hidden" name="usuarioValidador" value="<?php echo $_SESSION['glpiID'] ?>">
        <button type="button" class="btn btn-danger" data-dismiss="dataModal" onclick="fechaModalRecusa()">Cancelar</button>
        <button type="submit" class="btn btn-success" id="btnAprova">Aprovar Movimentação</button>
        <?php Html::closeForm()?>
      </div>
      </form>
    </div>
  </div>
 </div>  

<div id="dataModalRecusa" class="modal fade" data-toggle="recusa">  
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recusar solicitação - Informe o motivo</h5>
        <a data-dismiss="recusa" aria-label="close" onclick="fechaModalRecusa()"><i class="close icon"></i></a>
        
      </div>
      <div class="modal-body">
      <form method="POST" action="../../../assets/php/RecusaInsumo.php" class="ui form" id="insumo_detail" onsubmit="return true;">
      <div class="ui form">
      <div class="field">
        <textarea rows="3" required></textarea>
      </div>
      </div>
      </div>
      <div class="modal-footer">
     
        <input type="hidden" name="usuarioSolicitante" value="<?php echo $item[7]?>">
        <input type="hidden" name="usuarioValidador" value="<?php echo $_SESSION['glpiID'] ?>">
        <button type="button" class="btn btn-danger" data-dismiss="dataModalRecusa" onclick="fechaModalRecusa()">Cancelar</button>
        <button type="submit" class="btn btn-success"  id="btnAprova">Recusar Movimentação</button>
        <?php Html::closeForm()?>
      </div>
      </form>
    </div>
  </div>
 </div>  
<?php 
  if (isset($_SESSION['moviAprovada']) && $_SESSION['moviAprovada']) {
    // Exibir o modal
    echo "<script> Swal.fire({
      title: 'Movimentação aprovada',
      text: 'Insumos movimentados com sucesso!',
      icon: 'success',
      confirmButtonText: 'Fechar'
    })</script>";
    // Redefinir a variável de sessão para evitar que o modal seja exibido novamente em atualizações da página
    unset( $_SESSION['moviAprovada']); 
  
  }
  // Exibir o modal
  if (isset($_SESSION['moviReprovada']) && $_SESSION['moviReprovada']) {
    // Exibir o modal
    echo "<script> Swal.fire({
      title: 'Movimentação reprovada',
      text: '',
      icon: 'error',
      confirmButtonText: 'Fechar'
    })</script>";
    // Redefinir a variável de sessão para evitar que o modal seja exibido novamente em atualizações da página
    unset( $_SESSION['moviReprovada']); 
  
  }



?>





<script src="../../../assets/css/Semantic/semantic.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable({
              language: {
                  url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
              },
              pageLength: 10,
          });

      });
      $(document).ready(function(){  
      $('.view_data').click(function(){  
          var qtd = $(this).attr("placeholder");
          var employee_id = $(this).attr("id"); 
           
            $.ajax({  
                url:"../../../assets/php/Select.php",  
                method:"post",  
                data:{employee_id:employee_id, qtd:qtd, },  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");
                     
                }
            }); 
          }); 
        });
        $(document).ready(function(){  
      $('.data_view').click(function(){  
          var qtd = $(this).attr("placeholder");
          var employe_id = $(this).attr("id"); 
           
            $.ajax({  
                url:"../../../assets/php/Recusa.php",  
                method:"post",  
                data:{employe_id:employe_id, qtd:qtd, },  
                success:function(data){  
                     $('#insumo_detail').html(data);  
                     $('#dataModalRecusa').modal("show");
                     
                }
            }); 
          }); 
        });

      function fechaModalRecusa(){
        $('#dataModalRecusa').modal('hide');
      }
      function fechaModal(){
        $('#dataModal').modal('hide');
      }
    </script>
  </body>
</html>