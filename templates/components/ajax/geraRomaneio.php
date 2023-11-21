<?php
$arrCol = $_POST['id'];
$tipoEnvio = $_POST['tipoEnvio'];
$now = date("d/m/Y");
if(isset($_POST['usuLogado'])){
    $usuarioLogado = $_POST['usuLogado'];
} else {
    $usuarioLogado = "___________________________";
}
?>
<style>
        <?php include 'styles.css'; ?>
        <?php include 'ar.css'; ?>
            /* Define o tamanho do papel como A4 e a orientação como retrato */
            @page {
                orientation: landscape;
            }
    </style>
<div class="romaneio mt-5 bordaBaixo">
    <div class="row" class="">
        <div class="col" style="text-align:center;">
        <?php if($tipoEnvio == "sedex"){ ?>
            <img src="sedex.png" class="mt-2" width="150"/>
        <?php } else { ?>
            <img src="pac.png" class="mt-2" width="150"/>
        <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class="col bordCimaBaixo">
            <span><strong>EMPRESA: SERVICE SOLUTIONS SOLUCOES EM CONTACT CENTER LTDA - ME</span><span style="margin-left:15px;">CONTRATO: 9912361195</strong></span></span>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">
            <table class="romane">
                <tr class="bordaT">
                    <td class="">DATA</td>
                    <td class="BordaEsq">DE</td>
                    <td class="BordaEsq">PARA</td>
                    <td class="BordaEsq">CEP</td>
                    <td class="BordaEsq">CC</td>
                    <td class="BordaEsq">QUANT</td>
                    <td class="BordaEsq">SERVICOS ADICIONAIS</td>
                </tr>
                <?php 
                $totalQtd = 0;
                foreach($arrCol as $colaborador){ 
                    $col = explode(",", $colaborador);    
                ?>
                <tr>
                    <td class="bordCimaBaixo font-weight-normal"><strong><?php echo $now; ?></strong></td>
                    <td class="BordaEsq bordCimaBaixo font-weight-normal">Service</td>
                    <td class="BordaEsq bordCimaBaixo font-weight-normal"><?php echo $col[1]?></td>
                    <td class="BordaEsq bordCimaBaixo font-weight-normal"><?php echo $col[2]?></td>
                    <td class="BordaEsq bordCimaBaixo font-weight-normal"><?php echo $col[3]?></td>
                    <td class="BordaEsq bordCimaBaixo font-weight-normal"><?php echo $col[4]?></td>
                    <td class="BordaEsq bordCimaBaixo font-weight-normal">AR</td>
                </tr>
                <?php 
                $totalQtd += $col[4];
                } ?>
                <tr>
                    <td colspan="9" class="mr-3 bordCimaBaixo" style="text-align:right">TOTAL EMBALAGENS: <?php echo $totalQtd;?></td>
                </tr>   
            </table>
            <table class="romane" style="border-bottom: 3px solid #000">
                <tr>
                    <td></td>
                    <td></td>
                    <td>NOME LEGÍVEL: <?php echo strtoupper($usuarioLogado); ?></td>
                    <td></td>
                    <td></td>
                    <td>ASSINATURA: _________________________________</td>
                </tr>
            </table>
        </div>
    </div>
    
    </div>
<script>window.print();</script>