<link href="../assets/css/select2.min.css" rel="stylesheet" />
<script src="../assets/js/slimselect.min.js"></script>


<?php

require("../assets/php/ajax/buscaCategoriasItil.php");

$groupedCategories = array(); // Array para armazenar as categorias agrupadas

?>

<form action="../assets/php/categoryItil/salvaCategoria.php" method="POST">
    <div class="">
        <div class="row">
            <label>Categoria:</label>
            <div class="col">
                <select id="selectCategoria" class="js-example-basic-single" name="categorias" style="width:250px;">
                <option value=""></option>
                <?php
                    while($row = $itilCategories->fetch_assoc()){
                        echo "<option value='" . $row['id'] ."'>" . $row['name'] ."</option>";
                    }
                ?>
                </select>
            </div>
            <label>Grupos:</label>
            <div class="col">
                <select id="selectGrupos" class="js-example-basic-multiple" name="grupos[]" style="width:250px;" multiple >
                <option value=""></option>
                </select>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                    <button class="btn btn-success" type="submit">Salvar</button>
            </div>
        </div>
    </div>
</form>

<script>
     
    function limparSelect() {
        var select = document.getElementById("selectGrupos");
        while (select.firstChild) {
            select.removeChild(select.firstChild);
        }
        var select2Selection = document.querySelector('.select2-selection--multiple');
        if (select2Selection) {
            select2Selection.style.display = 'flow-root';
        }
    }
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('.js-example-basic-multiple').select2();

        $('#selectCategoria').change(function() {
        limparSelect();
        var selectedCategoria = $(this).val();
            $.ajax({
                url: '../assets/php/ajax/buscaGrupos.php', // Arquivo PHP para buscar os grupos atribuídos à categoria
                type: 'POST',
                data: {selectedCategoria: selectedCategoria},
                success: function(data) {
                    $('#selectGrupos').html(data);
                    data = "";
                }
            });
        });
    })
</script>