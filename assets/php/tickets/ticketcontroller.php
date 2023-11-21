<?php

function buscarDepartamento() {
    require_once('../src/db_config.php');
    $sqlDepartamento = "SELECT id, name FROM glpi_itilcategories
    WHERE level = 1 AND is_helpdeskvisible = 1";
    
    $buscaDepartamento = mysqli_query($sqlcon, $sqlDepartamento);
    $arrDepartamento = array();

    if($buscaDepartamento){
        while ($requ = mysqli_fetch_row($buscaDepartamento)) {
            array_push($arrDepartamento, $requ);
        }
    }
    return $arrDepartamento;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o campo "funcao" foi enviado no formulário
    if (isset($_POST['funcao'])) {
        $funcao = $_POST['funcao'];

        // Verifica se a função existe
        if (function_exists($funcao)) {
            // Chama a função com os dados do formulário
            call_user_func($funcao, $_POST);
        } else {
            echo "Função PHP não encontrada.";
        }
    }
}

function enviaFRM($dados){
    $titulo = $dados['descricao'];
    $departamento = $dados['departamento'];
    $categoria = $dados['categoria'];
}


?>