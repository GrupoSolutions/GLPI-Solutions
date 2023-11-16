<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require('../../../src/db_config.php');

        $id = $_POST['idF'];
    $entrega = $_POST['entrega'];
    $validator = $_POST['validator'];
    $projeto = $_POST['operacao'];
    $localEntrega;
    $_SESSION = $entrega;
    switch($entrega) {
        case 0:
            $localEntrega = "Via Varejo";
            break;
        case 1:
            $localEntrega = "Matriz";
            break;
        case 2: 
            $localEntrega = "Correios";
            break;
        default:
        $localEntrega = "ERRO";
    }
    $sqlBuscaUsuario = "SELECT requester_id FROM glpi_plugin_formcreator_formanswers WHERE id = '{$id}'";
    $buscaUsu = mysqli_query($sqlcon, $sqlBuscaUsuario);
    $idUsu = 0;
    $idLoc = 0;
    if($buscaUsu) {
        while($usuario = mysqli_fetch_array($buscaUsu)){
            $idUsu = $usuario[0];
            $sqlBuscaLoc = "SELECT locations_id FROM glpi_users WHERE id = '$idUsu'";
            $locId = mysqli_query($sqlcon, $sqlBuscaLoc);
        
            if($locId){
                while($localizacao_id = mysqli_fetch_array($locId)){
                    $idLoc = $localizacao_id[0];
                }
            }

            $sqlBuscaEndereco = "SELECT address, bairro, postcode, town, state, building FROM glpi_locations where id = $idLoc";
            $buscaEndereco = mysqli_query($sqlcon, $sqlBuscaEndereco);
            if($buscaEndereco){
                while($endereco = mysqli_fetch_array($buscaEndereco)){
                    $address = $endereco[0];
                    $bairro = $endereco[1]; 
                    $cep = $endereco[2];   
                    $uf = $endereco[3];
                    $estado = $endereco[4];
                    $numero = $endereco[5];
                }
            }
        }
    }

    $sqlAlteraEntrega = "UPDATE glpi_plugin_formcreator_formanswers SET entrega = '{$localEntrega}', users_id_validator = '{$validator}', endereco = '{$address}', cep = '{$cep}', estado = '{$estado}', cidade = '{$uf}', projeto = '{$projeto}'  WHERE id = '{$id}'";

    $alteraEntrega = mysqli_query($sqlcon, $sqlAlteraEntrega);
    echo "Alterado!";
}
?>