<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css"/>
    <link rel="stylesheet" href="styles.css"/>
    <title>Etiquetas - Correios</title>
    <style>
        <?php include 'styles.css'; ?>
        <?php include 'bootstrap.css'; ?>
        <?php include 'ar.css'; ?>
    </style>
    <?php 
        function format_string($mask, $str, $ch = '#') {
            $c = 0;
            $rs = '';
            for ($i = 0; $i < strlen($mask); $i++) {
                if ($mask[$i] == $ch) {
                    $rs .= $str[$c];
                    $c++;
                } else {
                    $rs .= $mask[$i];
                }
            }
            return $rs;
    }?>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="ml-4 col-6 AR">
            
        <div class="borda">
            <div class="textoA">
                <p>USO EXCLUSIVO DOS CORREIOS</p>
                <p>Cole aqui a etiqueta com o código identificador da encomenda</p>
            </div>  
        </div>
        <div class="dadosRecebedor">
            <p>Recebedor:</p>
            <span>_______________________</span>
            <p>Assinatura:</p>
            <span>_______________________</span><br>
            <p>Documento:</p>
            <span>_______________</span>
        </div>
    
        <div class="entregaVizinho">
            <p style="margin: inherit;">ENTREGA NO VIZINHO AUTORIZADA?</p>
            <span class="ml-2">Entrega no vizinho não autorizada</span>
        </div>

        <div class="destinatario pb-2 ">
            <h6>DESTINATÁRIO</h6>
            <div><img src="correios.png" width="50"/></div>
            <p class="ml-2"><?php echo $nome; ?><br><?php echo $rua;echo " N°$numero";  ?><br><?php echo $bairro; ?><br><?php echo $cep; ?>     <?php echo $estado; ?>-<?php echo $cidade; ?></p>
            <div class="pl-1">
            <?php
                    include "../vendor/autoload.php";
                    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                    echo $generator->getBarcode($cep,$generator::TYPE_CODE_128_A, 2, 50);
                ?>
            </div>
        </div>
            <p class="ml-2"><strong>Remetente:</strong> GRUPO SOLUTIONS<br>Rua Geraldo Flausino Gomes<br>N°78, 9 ANDAR CONJ 94<br>Cidade Monções<br><strong>04575-060</strong> São Paulo - SP</p> 
        </div>
       
    </div>
    <div class="row mt-5">
    <table border="0" cellspacing="0" class="BordaTodas" style="width:100%" >
            <tbody><tr>
                <td width="21" rowspan="12" class="BordaDirTracejada"><img src="ar2_r3_c2.gif"></td>
                <td width="7" height="30">&nbsp;</td>
                <td width="124" class="BordaInf mt-4"><img src="correios.png" width="119" height="25" style="margin-top:5px;" alt=""></td>
                <td width="86" class="style58 BordaInf"><span class="style59">AVISO DE <br>
                RECEBIMENTO</span></td>
                <td colspan="3" align="center" valign="middle" class="BordaInf style60">AR</td>
                <td align="center" valign="middle" class="BordaInf style62">&nbsp;</td>
                <td width="126" class="BordaInfEsq">DATA DE POSTAGEM </td>
            </tr>
            <tr>
                <td height="32">&nbsp;</td>
                <td colspan="6" rowspan="2" class="BordaInfEsq">
                
                        <table border="0" width="370px" height="176px">
                            <tbody><tr>
                            <td valign="top" class="style24">
                                <span class="style34">DESTINATÁRIO</span><span class="style33"><br>
                                <?php echo $nome;?>
                                <br> <?php echo $rua;echo " N°$numero";?> <br>
                                    <?php echo $bairro ?>						
                                <br>
                                04575-060 - SÃO PAULO - SP
                            </span> </td>
                            </tr>
                            <p></p><p></p>
                            <tr>
                                    <td align="center" valign="middle"><div id="divCodBarras" style="border: 1px dotted black; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">(CÓDIGO DE BARRAS OU Nº DE REGISTRO DO OBJETO)</div></td>
                            </tr>
                            <p></p><p></p>

                            <tr>
                            <td align="left" valign="bottom">
                                    <span class="style37">ENDEREÇO PARA DEVOLUÇÃO DO AR </span><br>
                                    <span class="style39">GRUPO SOLUTIONS<br>
                                        RUA GERALDO FLAUSINO GOMES, N°78, 9°ANDAR, CONJ.94 <br>
                                        CIDADE MONÇÕES
                                        <br>
                                    04814-090 - SÃO PAULO - SP
                            </span> </td>
                            </tr>
            </tbody></table>	
                
                
                </td>
                <td class="BordaInfEsq">UNIDADE DE POSTAGEM </td>
            </tr>
            <tr>
                <td height="148">&nbsp;</td>
                <td align="center" class="BordaInfEsq">CARIMBO<br>
                UNIDADE DE ENTREGA </td>
            </tr>
            <tr>
                <td height="32">&nbsp;</td>
                <td colspan="2" align="center" class="BordaEsq"><strong>TENTATIVAS DE ENTREGA </strong></td>
                <td colspan="5" class="BordaInfEsq">OBSERVAÇÃO
                <br><span class="style57"></span></td>
            </tr>
            <tr>
                <td height="71" rowspan="6">&nbsp;</td>
                <td rowspan="5" class="BordaEsq">1ª ________/________/________<br>
                <br>
                2ª ________/________/________<br>
                <br>
                3ª ________/________/________ </td>
                <td rowspan="5" align="center">______ : ______h<br>
                <br>
                ______ : ______h<br>
                <br>
                ______ : ______ h </td>
                <td height="9" colspan="4" align="center" valign="top" class="style57 BordaEsq"><strong>MOTIVO DE DEVOLUÇÃO </strong></td>
                <td rowspan="6" class="BordaInfEsq">RUBRICA E MATRÍCULA DO<br>
                CARTEIRO </td>
            </tr>
            <tr>
                <td width="21" height="58" rowspan="5" class="BordaInfEsq"><img src="ar2_r6_c10.gif" style="height: 80px;" alt=""></td>
                <td width="71" height="13"><span class="style57">Mudou-se</span></td>
                <td width="15" rowspan="5" class="BordaInf"><img src="ar2_r5_c5.gif" style="height: 80px;" alt=""></td>
                <td width="49"><span class="style57">Recusado</span></td>
            </tr>
            <tr>
                <td height="12"><span class="style57">Endereço insuficiente </span></td>
                <td width="49"><span class="style57">Não procurado </span></td>
            </tr>
            <tr>
                <td height="11"><span class="style57">Não existe o número </span></td>
                <td width="49"><span class="style57">Ausente</span></td>
            </tr>
            <tr>
                <td height="9" valign="middle"><span class="style57">Desconhecido</span></td>
                <td width="49" valign="middle"><span class="style57">Falecido</span></td>
            </tr>
            <tr>
                <td colspan="2" class="BordaInfEsq"><br>
                <span class="style57"></span></td>
                <td height="11" class="BordaInf style57">Outros</td>
                <td width="49" align="right" valign="bottom" class="BordaInf style58">.</td>
            </tr>
            <tr>
                <td height="24">&nbsp;</td>
                <td colspan="6" class="BordaInfEsq">ASSINATURA DO RECEBEDOR<p></p></td>
                <td class="BordaInfEsq">DATA DE ENTREGA </td>
            </tr>
            <tr style="margin-bottom:5px">
                <td>&nbsp;</td>
                <td colspan="6" class="BordaEsq">NOME LEGÍVEL DO RECEBEDOR<p></p></td>
                <td class="BordaEsq" >Nº DOC. DE IDENTIDADE </td>
            </tr>
            </tbody>
        </table>
    </div>

<div style="page-break-after: always"></div>

<div class="decConteudo mt-5">
<div class="declaracao">
    <div class="row"><div class="col linha bloco tabela">DECLARAÇÃO DE CONTEÚDO</div></div>
          <div class="row linha mt-2">
            <div class="col-6">
              <div class="bloco tabela">
                REMETENTE
                <div class="celula">
                  NOME: 
                  <span class="texto">
                  Grupo Solutions
                  </span>
                </div>
                <div class="celula">
                  ENDEREÇO:
                  <span class="texto">
                  Rua Geraldo Flausino Gomes N°78
                  </span>
                </div>
                <div class="celula texto">
                  9 Andar, Conj. 94
                </div>
                <div class="row">
                  <div class="col-9">
                    <div class="celula">
                      CIDADE:
                      <span class="texto">
                        São Paulo
                      </span>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="celula">
                      UF:
                      <span class="texto">
                        SP
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-5">
                    <div class="celula">
                      CEP:
                      <span class="texto">
                        04575-060
                      </span>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="celula">
                      CPF/CNPJ:
                      <span class="texto">
                        
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="bloco tabela">
                DESTINATÁRIO
                <div class="celula">
                  NOME:
                  <span class="texto">
                    <?php echo $nome; ?>
                  </span>
                </div>
                <div class="celula">
                  ENDEREÇO:
                  <span class="texto">
                    <?php echo $rua;echo " N°$numero";?>
                  </span>
                </div>
                <div class="celula texto">
                  <?php if($complemento){ echo $complemento;} else { echo "&nbsp";} ?>
                </div>
                <div class="row">
                  <div class="col-9">
                    <div class="celula">
                      CIDADE:
                      <span class="texto">
                        <?php echo $estado; ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="celula">
                      UF:
                      <span class="texto">
                        <?php echo $cidade; ?>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-5">
                    <div class="celula">
                      CEP:
                      <span class="texto">
                        <?php echo $cep; ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="celula">
                      CPF/CNPJ:
                      <span class="texto">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row linha">
            <div class="col-12">
              <div class="bloco tabela">
                IDENTIFICAÇÃO&nbsp;&nbsp;DOS&nbsp;&nbsp;BENS
                <div class="row texto-centro">
                  <div class="col-1">
                    <div class="celula">
                      ITEM
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="celula">
                      CONTEÚDO
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="celula">
                      QUANT.
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="celula">
                      VALOR
                    </div>
                  </div>
                </div>
                    <?php 
                    if(isset($items)){
                      foreach($items as $id => $item){
                        $numeros = preg_replace("/[^0-9,\\.]/", "", $item['valor']);
                        echo ' <div class="row">
                        <div class="col-1">
                          <div class="celula texto">
                            '. $id + 1 .'
                          </div>
                        </div>
                        <div class="col-7">
                          <div class="celula texto">
                            '. mb_strtoupper($item['conteudo']) .'
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="celula texto qtd">
                          '. $item['quantidade'] .'
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="celula texto">R$ <span class="vlr">'. $numeros .'</span>
                          </div>
                        </div>
                      </div>';
                      }
                    }  
                ?>
                <div class="row texto-direita">
                  <div class="col-8">
                    <div class="celula cinza">
                      TOTAIS
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="celula">
                      <span id="qtdTotal"></span>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="celula" id="vlrTotal">
                      R$
                    </div>
                  </div>
                </div>
                <div class="row texto-direita">
                  <div class="col-8">
                    <div class="celula cinza">
                      PESO TOTAL (kg)
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="celula">
                      <?php echo $peso; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row linha">
            <div class="col-md-12">
              <div class="bloco">
                DECLARAÇÃO
                <div class="celula celula-unica">
                  <div class="texto" style="padding: 18px 6px; font-size: 15px">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Declaro que não me enquadro no conceito de contribuinte previsto no
                    art. 4º da Lei Complementar nº 87/1996, uma vez que não realizo,
                    com habitualidade ou em volume que caracterize intuito comercial,
                    operações de circulação de mercadoria, ainda que se iniciem no exterior,
                    ou estou dispensado da emissão da nota fiscal por força da legislação tributária vigente,
                    responsabilizando-me, nos termos da lei e a quem de direito, por informações inverídicas.
                  </div>
                </div>
                <div style="padding: 30px 10px 5px 10px">
                  <div class="row">
                    <div class="col-3 ass">
                      <span>,</span>
                    </div>
                    <div class="col-1 ass">
                      <span>de</span>
                    </div>
                    <div class="col-2 ass">
                      <span>de</span>
                    </div>
                    <div class="col-2 ass">
                      <span> </span>
                    </div>
                    <div class="col-4 ass">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4 texto">Assinatura do Declarante/Remetente</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row linha">
            <div class="col-md-12">
              <div class="bloco" style="text-align: left; padding: 10px">
                OBSERVAÇÃO:
                <div class="texto" style="font-size: 15px">
                  Constitui crime contra a ordem tributária suprimir ou reduzir tributo,
                  ou contribuição social e qualquer acessório (Lei 8.137/90 Art. 1º, V).
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div style="page-break-after: always"></div>
</div>

</body>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      //Esta parte efetuará a soma dos valores dos produtos declarados
      const elementosVlr = document.querySelectorAll('.vlr');
      // Inicializa a variável para armazenar o total
      let vlrTotal = 0;

      // Itera sobre os elementos e pega os valores das classes "vlr"
      elementosVlr.forEach(elemento => {
          const valorComVirgula = elemento.innerText; // Valor com vírgula, ex: "1.540,00"
          const valorSemPontos = valorComVirgula.replace(/\./g, ''); // Removendo pontos
          const valorNumero = parseFloat(valorSemPontos.replace(',', '.')); // Convertendo para número

          vlrTotal += valorNumero;
      });

      const elementoVlrTotal = document.getElementById('vlrTotal');

      const vlrTotalFormatado = vlrTotal.toLocaleString('pt-BR', {
        style: 'currency',
        currency: 'BRL',
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
      });
      elementoVlrTotal.innerHTML = vlrTotalFormatado;

      // Já esta parte, efetuará um processo semelhante do processo acima, porém com a quantidade.
      const elementosQtd = document.querySelectorAll('.qtd');
      let qtdTotal = 0;
      elementosQtd.forEach(eleQtd => {
        const qtd = parseInt(eleQtd.innerText);
        qtdTotal += qtd;
      });
      const elementoQtdTotal = document.getElementById('qtdTotal');
      elementoQtdTotal.innerHTML = qtdTotal;
    });
    </script>
</html>
