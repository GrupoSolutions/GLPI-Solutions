<?php

require('../../../src/db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["categorias"])) {
        $categoriaSelecionada = $_POST["categorias"];
        if (isset($_POST["grupos"])) {
            $gruposSelecionados = $_POST["grupos"];
            $arrayGrupos = implode(';', $gruposSelecionados);
            // Query SQL usando declarações preparadas
            $sql = "UPDATE glpi_itilcategories SET groups_id = ? WHERE id = ?";

            // Preparando a declaração
            if ($stmt = $sqlcon->prepare($sql)) {
                // Vinculando parâmetros
                $stmt->bind_param("si", $arrayGrupos, $categoriaSelecionada);

                // Executando a declaração
                if ($stmt->execute()) {
                   //
                } else {
                    echo "Erro ao executar a atualização: " . $stmt->error;
                }
                $sql = "UPDATE glpi_itilcategories SET groups_id = ? WHERE itilcategories_id = ?";

                // Preparando a declaração
                if ($stmt = $sqlcon->prepare($sql)) {
                    // Vinculando parâmetros
                    $stmt->bind_param("si", $arrayGrupos, $categoriaSelecionada);

                    // Executando a declaração
                    if (!$stmt->execute()) {
                        echo "Erro ao executar a atualização: " . $stmt->error;
                    }
                }
                // Fechando a declaração
                $stmt->close();
                header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
            } else {
                echo "Erro ao preparar a declaração: " . $conn->error;
            }
        } else {
            $sql = "UPDATE glpi_itilcategories SET groups_id = 0 WHERE id = ?";
            // Preparando a declaração
            if ($stmt = $sqlcon->prepare($sql)) {
                // Vinculando parâmetros
                $stmt->bind_param("i", $categoriaSelecionada);

                // Executando a declaração
                if (!$stmt->execute()) {
                    echo "Erro ao executar a atualização: " . $stmt->error;
                }
            }
            $sql = "UPDATE glpi_itilcategories SET groups_id = 0 WHERE itilcategories_id = ?";
            // Preparando a declaração
            if ($stmt = $sqlcon->prepare($sql)) {
                // Vinculando parâmetros
                $stmt->bind_param("i", $categoriaSelecionada);

                // Executando a declaração
                if ($stmt->execute()) {
                    echo "Erro ao executar a atualização: " . $stmt->error;
                }
            }
            $stmt->close();
            header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
            exit;
            // Se 'selectGrupos' não está presente ou não é um array, exiba uma mensagem de erro
        }
    } else {
        // Se 'selectCategoria' não está presente nos dados POST, exiba uma mensagem de erro
        echo "Erro: Nenhuma categoria selecionada.";
    }
} else {
    // Se a requisição não for do tipo POST, exiba uma mensagem de erro
    echo "Erro: Este script só pode ser acessado via método POST.";
}
