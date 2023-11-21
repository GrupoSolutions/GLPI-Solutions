<?php  
 if(isset($_POST["employe_id"]))  
 {  
    $output = '';
    require('../../src/db_config.php');
    $qtd = $_POST["employe_id"];
    $qtd = explode("-", $qtd);
    
    $idSolicitacao = $qtd[1];

echo '<div class="ui form">
<input type="hidden" name="idSolicitacaoR" value="'. $idSolicitacao . '">
<div class="field">
  <textarea name="observacao" rows="3" placeholder="Informe o motivo da recusa" required></textarea>
</div>
</div>';
    

 }  
$_POST['qtd'] = '';
?>