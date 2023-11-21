<?php require_once(__DIR__ . '\ticketcontroller.php');
 ?>
<head>
    <link rel="stylesheet" href="/assets/css/ticket/ticket.css">
</head>
<div class="container-fluid ticketFrm">
    <div class="frmChamado">
    <h2>Novo chamado</h2>
        <form action="./ticketcontroller.php" method="post">
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input class="form-control" type="text" id="descricao" placeholder="Informe brevemente seu problema">
            </div>
            <div class="mb-3">
                <label for="departamento" class="form-label">Departamento</label>
                <select class="form-select" id="departamento" onchange="executarScriptPHP()">
                    
                    <option disabled selected>Selecione o departamento</option>
                    <?php 
                        $arrDep = buscarDepartamento();
                        foreach($arrDep as $dep){
                            echo "<option value='$dep[0]'>$dep[1]</option>";
                        }
                     ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select class="form-select" id="categoria">
                    <option disabled selected>Selecione a categoria</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="detalhes" class="form-label">Detalhes</label>
                <div id="editor"></div>
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Escolha um arquivo</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <input type="hidden" name="funcao" value="enviaFRM">
            <div class="btnEnviar">
                <button type="submit" class="btn btn-primary">Abrir chamado</button>
            </div>
        </form>
    </div>
</div>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Descreva seu problema com mais detalhes...'
            });
    function executarScriptPHP() {
        var selectedOption = document.getElementById("departamento").value;
        $.ajax({
            url: '../assets/php/tickets/carregaCategoria.php',
            type: 'POST',
            data: { departamento: selectedOption },
            success: function(response) {
                // Lida com a resposta do script PHP aqui
                document.getElementById("categoria").innerHTML = response;
            },
            error: function(xhr, status, error) {
                // Lida com o erro de solicitação AJAX aqui
                console.log(error);
            }
        });
    }
</script>