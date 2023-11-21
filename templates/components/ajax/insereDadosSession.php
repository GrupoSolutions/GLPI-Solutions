<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["meuArray"])) {
    $arrayRecebido = $_POST["meuArray"];
    $_SESSION["arrBens"] = $arrayRecebido;
    echo "Array inserido na sessão com sucesso!";
} else {
    echo "Erro ao receber o array.";
}

?>