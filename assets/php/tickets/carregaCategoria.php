<?php
if(isset($_POST['departamento'])){
    $departamento = $_POST['departamento'];
    
    // Exemplo de retorno de opções do select
    require_once('../../../src/db_config.php');
    $sqlCategoria = "SELECT id, name FROM glpi_itilcategories
    WHERE itilcategories_id = $departamento";
    
    $buscaCategoria = mysqli_query($sqlcon, $sqlCategoria);
    $arrCategoria = array();
    if($buscaCategoria){
        while ($requ = mysqli_fetch_row($buscaCategoria)) {
            array_push($arrCategoria, $requ);
        }
    }

    foreach ($arrCategoria as $cat){
        echo "<option value='$cat[0]'>$cat[1]</option>";
    }
}
?>