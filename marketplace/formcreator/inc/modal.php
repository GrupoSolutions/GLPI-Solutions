<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999999999; /* Sit on top */
  padding-top: 220px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #0176b6;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #0176b6;
  color: white;
}
#ende {
  width:90%;
  margin-top:10px;
}
#enviaFRM {
  float:left;
  border: 1px solid black;
}
#enviaFRM:hover{
  background:#0176b6 !important;
  color:white;
}
#estado{
  float:left;
  margin-left:18px;
}
#tipoEntrega{ 
  float:left;
  margin-left:15px;
}
#UFbox{
  float:left;
  margin-left:15px;
}
#cep{
  float:left;
  margin-left:15px
}
#cep input {
  width:100px;
}

#endereco{
  margin-left:10px;
}
#cidade{
  float:left  ;
  margin-left:15px

}

.btnconfirma {
  padding: 1.3em 3em;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}

.btnconfirma:hover {
  background-color: #23c483;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

.btnconfirma:active {
  transform: translateY(-1px);
}
</style>
</head>
<body>

<!-- The Modal -->
<div id="myModal" class="modal" data-backdrop="static" data-keyboard="false">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h3>Informe o tipo de envio</h3>
    </div>
    <div class="modal-body"><br><br>
      <b><h2 style="color:red;">Confirme o endereço de destino e a forma de entrega! </h2></b><br>
      
      <div id="tipoEntrega">
        <span>Tipo de entrega: </span>
        <select name="entrega" id="entrega">
          <option value=''>Selecione</option>
          <option value="Correios">Correios</option>
          <option value="Matriz">Matriz</option>
          <option value="B2W">B2W</option>
          <option value="Via Varejo">Via Varejo</option>
	  <option value="ASC">ASC</option>
        </select><br>
      </div>
      
      <br><br>
      <?php 
      $sqlcon = mysqli_connect('localhost', 'root', '', 'base_104', '3306');
      $GLOBALS['sqlcon'] = $sqlcon;

      $buscaIDRequerente = "SELECT requester_id as REQUERENTE FROM glpi_plugin_formcreator_formanswers WHERE id = '{$ID}'";
      $retornaIDRequerente = mysqli_query($sqlcon, $buscaIDRequerente);
      if($retornaIDRequerente){
          while($req = mysqli_fetch_row($retornaIDRequerente)){
            $idRequerente = $req['0'];
          }
      }
      $buscaEnd = "SELECT glpi_locations.id, address, postcode, state, town FROM glpi_users LEFT JOIN glpi_locations on glpi_locations.id = glpi_users.locations_id WHERE glpi_users.id = {$idRequerente}";
      $retornaEnd = mysqli_query($sqlcon, $buscaEnd);
      
      if($retornaEnd){
        $d = mysqli_fetch_array($retornaEnd);
        $id = $d['id'];
        $endereco = $d['address'];
        $cep = $d['postcode'];
        $estado = $d['state'];
        $cidade = $d['town'];
      }
      ?>
      <div id="endereco">
        <span for="ende">Endereço:</span>
        <input id="ende" type="text" name="endereco" value="<?php echo $endereco; ?>"/><br><br>
      </div>
      <div id="cidade">
        <span for="cidade">Cidade:</span>
        <input id="city" type="text" name="cidade" value="<?php echo $cidade; ?>"/><br><br>
      </div>
      <div id="estado">
        <span for="estado">Estado:</span>
        <input id="state" type="text" name="estado" value="<?php echo $estado; ?>"/><br><br>
      </div>
      
      <div id="cep">
        <span for="cep">CEP:</span>
        <input id="zipcode"  type="text" name="cep" value="<?php echo $cep; ?>" ><br><br>
      </div>
      <br><br><br>
      <div id="enviar">
        <input type="submit" id="envio" class="btnconfirma" name="accept_formanswer" onclick="return validaFRM()" value="Aprovar Pedido"><br><br>
      </div>    
	</div>
    <br>
    <div class="modal-footer">
       <br>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
function validaFRM(){
  var entrega = document.getElementById("entrega");
  var endereco = document.getElementById("ende");
  var estado = document.getElementById("state");
  var cep = document.getElementById("zipcode");
  var cidade = document.getElementById("city");

  if(entrega.value == "" || !entrega.value ){
    alert("<div style='width:200px;'><br><br><h3 style='color: red; witdh:200px'>Informe o tipo de entrega!<br><br></h3></div>");
    entrega.focus({focusVisibile: true});
    return false;
  }
  if(endereco.value == "" || !endereco.value || endereco.value.length === 0 || !endereco.value.trim()){
    alert("<div style='width:200px;'><br><br><h3 style='color: red; witdh:200px'>Informe o endereço!<br><br></h3></div>");
    endereco.focus({focusVisibile: true});
    return false;
  }
  if(estado.value == "" || !estado.value || estado.value.length === 0 || !estado.value.trim()){
    alert("<div style='width:200px;'><br><br><h3 style='color: red; witdh:200px'>Informe o estado!<br><br></h3></div>");
    estado.focus({focusVisibile: true});
    return false;
  }
  if(cep.value == "" || !cep.value || cep.value.length === 0 || !cep.value.trim()){
    alert("<div style='width:200px;'><br><br><h3 style='color: red; witdh:200px'>Informe o CEP!<br><br></h3></div>");
    cep.focus({focusVisibile: true});
    return false;
  }
  if(cidade.value == "" || !cidade.value || cidade.value.length === 0 || !cidade.value.trim()){
    alert("<div style='width:200px;'><br><br><h3 style='color: red; witdh:200px'>Informe a cidade!<br><br></h3></div>");
    cidade.focus({focusVisibile: true});
    return false;
  }
  return true;
}

</script>
</body>
</html>
