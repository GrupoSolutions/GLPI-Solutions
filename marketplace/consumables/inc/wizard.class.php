<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 consumables plugin for GLPI
 Copyright (C) 2009-2022 by the consumables Development Team.

 https://github.com/InfotelGLPI/consumables
 -------------------------------------------------------------------------

 LICENSE

 This file is part of consumables.

 consumables is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 consumables is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with consumables. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

/**
 * Class PluginConsumablesMenu
 *
 * This class shows the plugin main page
 *
 * @package    Consumables
 * @author     Ludovic Dupont
 */
class PluginConsumablesWizard extends CommonDBTM {

   static $rightname = "plugin_consumables";

   /**
    * @param int $nb
    *
    * @return translated
    */
   static function getTypeName($nb = 0) {
      return __('Consumables wizard', 'consumables');
   }

   /**
    * Show config menu
    */
   function showMenu() {
      global $CFG_GLPI;

      $request = new PluginConsumablesRequest();

      if (!$this->canView()) {
         return false;
      }

      echo "<h3><div class='alert alert-secondary' role='alert'>";
      echo "<i class='ti ti-shopping-cart-plus'></i>&nbsp;";
      echo __("Consumable request", "consumables");
      echo "</div></h3>";

      echo "<div class='row consumables_wizard_row' style='margin: 0 auto;'>";
      // Consumable request
      if ($request->canRequest()) {
         echo "<div class='center col consumables_wizard_rank'>";
         echo "<a class='consumables_menu_a' href='" . PLUGIN_CONSUMABLES_WEBDIR . "/front/wizard.form.php?action=consumablerequest'>";
         echo "<i class='thumbnail ti ti-shopping-cart-plus' style='font-size: 4.5em;'></i>";
         echo "<br><br>" . __("Consumable request", "consumables") . "<br></a>";
         echo "</div>";
      }
      echo "<div style='width: 10px;'></div>";
      // Consumable validation
      echo "<div class='center col consumables_wizard_rank'>";
      echo "<a class='consumables_menu_a' href='" . PLUGIN_CONSUMABLES_WEBDIR . "/front/wizard.form.php?action=consumablevalidation'>";
      echo "<i class='thumbnail ti ti-clipboard-check' style='font-size: 4.5em;'></i>";
      echo "<br><br>" . __("Consumable validation", "consumables") . "</a>";
      echo "</div>";

      echo "<div style='width: 10px;'></div>";
      // Etiquetas Generate
      echo "<form method='post' id='frmEtq' action='../../useditemsexport/inc/aer.php'' class='center col consumables_wizard_rank'>";
      echo "<a class='consumables_menu_a' onclick='geraAR()' href='#'>";
      
      echo "<i class='thumbnail ti ti-package' style='font-size: 4.5em;'></i>";
      echo "<br><br>Gerar Etiqueta AR</a>";
      echo "<div id='itensContainer'><input type='hidden' id='user_id' name='user_id' value='' /><input type='hidden' name='acao' value='ar'/></div>";
      echo "</form>";

      echo "<div style='width: 10px;'></div>";

      echo "<form method='POST' id='frmRom'  action='../../useditemsexport/inc/rom.php' class='center col consumables_wizard_rank'>";
      echo "<a class='consumables_menu_a' onclick='geraRomaneio()' href='#'>";
      echo "<i class='thumbnail ti ti-receipt' style='font-size: 4.5em;'></i>";
      echo "<br><br>Gerar Romaneio</a>";
      echo "<input type='hidden' id='usa_id' name='user_id' value=''/></form>";

      echo "</div>";
      ?>
   <style>
         .ende {
            text-align:initial;
            font-size:18px;
            width:100%;
         }
         .ende label {
            
            font-weight:500;
         }
         .mr-2 {
            margin-right:10px;
      }
   </style>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link href="../../../assets/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script>
         
   var dadosArray = [];
         //Função que limpa o forumlário(retirada do site viacep)
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
    }

    //Função que preenche o retorno da api (retirada do site viacep)
    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    //Função que efetua a busca do conteudo na api (retirada do site viacep)
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    function hasEmptyFields(arr) {
        for (let i = 0; i < arr.length; i++) {
            if (arr[i] === '' || arr[i] === null || arr[i] === undefined) {
            return true;
            }
        }
        return false;
    }
    function enviaEndereco(dados){
        // Construa os dados que serão enviados ao PHP
        const formData = new FormData();
        formData.append('idf', dados[0]);
        formData.append('cep', dados[1]);
        formData.append('rua', dados[2]);
        formData.append('bairro', dados[3]);
        formData.append('cidade', dados[4]);
        formData.append('estado', dados[5]);
        formData.append('numero', dados[6]);
        formData.append('complemento', dados[7]);
        // Adicione mais campos, se necessário.

        // Use a função fetch para enviar a requisição POST para o arquivo PHP
        fetch('../../formcreator/ajax/enviaEndereco.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Manipule a resposta do servidor aqui, se necessário.
        })
        .catch(error => {
            Swal.fire(
                'Falha!',
                'Erro ao atualizar endereço ' + error,
                'error'
            )
        }); 
    }
      function corrigeEndereco(arrEndereco){
         Swal.fire({
            title: 'Editar endereço',
            html:
               '<label for="cep" class="ende">CEP</label><br><input id="cep" oninput="validarNumero(this);" onblur="pesquisacep(this.value);" required value="' + arrEndereco[1] + '" class="ende">' +
               '<label for="endereco" class="ende">Endereço</label><br><input id="endereco" class="ende" required value="' + arrEndereco[2] + '">' + 
               '<label for="bairro" class="ende">Bairro</label><br><input id="bairro" class="ende" required value="' + arrEndereco[3] + '">' +
               '<label for="cidade" class="ende">Cidade</label><br><input id="cidade" class="ende" required value="' + arrEndereco[4] + '">' +
               '<label for="estado" class="ende">Estado</label><br><input id="estado" class="ende" required value="' + arrEndereco[5] + '">' +
               '<label for="num" class="ende">Número</label><br><input id="num" class="ende" required value="' + arrEndereco[6] + '">' +
               '<label for="comp" class="ende">Complemento</label><br><input id="comp" class="ende" value="' + arrEndereco[7] + '">',
            focusConfirm: false,
            allowOutsideClick: false,
            showCloseButton: true,
            allowEscapeKey: false,
            preConfirm: () => {
               // Selecionar elementos que tenham o atributo title igual a "RMA", "TRIAGEM" ou "WHP"
               
               var cep = document.getElementById('cep').value;
               var endereco = document.getElementById('endereco').value;
               var bairro = document.getElementById('bairro').value;
               var cidade = document.getElementById('cidade').value;
               var estado = document.getElementById('estado').value;
               var num = document.getElementById('num').value;
               var comp = document.getElementById('comp').value;
               var usuario_id = arrEndereco[0];
               dados = [cep, endereco, bairro, cidade, estado, num];
               retorno = [usuario_id, cep, endereco, bairro, cidade, estado, num, comp];

               if(hasEmptyFields(dados)){
                  Swal.fire(
                        'Falha!',
                        'Informe corretamente os dados, tente novamente!',
                        'error'
                  );
                  //desfazerAlteracao();
               } else{
                  enviaEndereco(retorno);
                  buscaAR(usuario_id)
               }
            }
         });
      }
          
      function geraAR(){
        
         $.ajax({
         type: "POST",
         url: "../../../assets/php/ajax/buscaUsuarios.php",
         success: function(data){
            if (Array.isArray(data)) {
               // Se a resposta for um array, continue com o código
               const inputOptions  = {};
               const optionPairs = data.map(function (item) {
                  return [item.id, item.name,];
               });
               // Ordene a matriz com base no nome
               optionPairs.sort(function (a, b) {
                  return a[1].localeCompare(b[1]);
               });
               // Crie o objeto inputOptions com base na matriz ordenada
               optionPairs.forEach(function (pair) {
                  inputOptions[pair[0]] = pair[1];
               });
               $(document).ready(function() {
                  $('.js-example-basic-single').select2();
               });
              
               const { value: selectedOptionId } = Swal.fire({
                  title: 'Informe o Usuário',
                  html: `
                     <span style="font-size:9px; color:red;">*O USUÁRIO DEVE TER A LOCALIZAÇÃO CADASTRADA PREVIAMENTE.</span>
                     <select id="usuario" class="js-example-basic-single" name="usuario" style="z-index:3000 !important;">
                     ${Object.keys(inputOptions)
                        .map((id) => `<option value="${id}">${inputOptions[id]}</option>`)
                        .join('')}
                     </select>
                  `,
                  focusConfirm: false,
                  preConfirm: () => {
                    
                  },
               }).then((s) => {
                     if (s.isConfirmed) {
                        const idUsu = document.getElementById('usuario').value;
                        buscaAR(idUsu);
                     };
                  });
            } else {
               console.error('Resposta inválida do servidor:', data);
            }
         }
         });
      }
      function formatarValor(input) {
         const valorEntrada = input.value.replace(/\D/g, ''); // Remove tudo que não é dígito
         const valorNumerico = parseInt(valorEntrada) / 100; // Converte para número e divide por 100 para trazer os centavos

         input.value = valorNumerico.toLocaleString('pt-BR', {
               style: 'currency',
               currency: 'BRL',
               minimumFractionDigits: 2,
               maximumFractionDigits: 2
         });
      }
      function somenteNumeros(e) {
         var charCode = e.charCode ? e.charCode : e.keyCode;
         // charCode 8 = backspace   
         // charCode 9 = tab
         if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                  return false;
            }
         }
      }
      function inserirNovoItem() {
      
      if(!conteudo.value || !quantidade.value || !valor.value){
         console.warn("Erro, Campos nulos ou vazios");
        
         return "erro";
      }
      
      else {
        
         var novoItem = {
            conteudo: conteudo.value,
            quantidade: quantidade.value,
            valor: valor.value,
         };
         dadosArray.push(novoItem);

         // Limpar os inputs após adicionar ao array
         document.getElementById('conteudo').value = '';
         document.getElementById('quantidade').value = '';
         document.getElementById('valor').value = '';
      
         var itensContainer = document.getElementById("itensContainer");
         console.log(itensContainer);
         // Preencha os campos de entrada ocultos com os valores dos arrays
         dadosArray.forEach(function(itemc, index) {
            var inputNome = document.createElement("input");
            inputNome.type = "hidden";
            inputNome.name = "itens[" + index + "][conteudo]";
            inputNome.value = itemc.conteudo;
            
            var inputQuantidade = document.createElement("input");
            inputQuantidade.type = "hidden";
            inputQuantidade.name = "itens[" + index + "][quantidade]";
            inputQuantidade.value = itemc.quantidade;
            
            var inputValor = document.createElement("input");
            inputValor.type = "hidden";
            inputValor.name = "itens[" + index + "][valor]";
            inputValor.value = itemc.valor;

           
            itensContainer.appendChild(inputNome);
            itensContainer.appendChild(inputQuantidade);
            itensContainer.appendChild(inputValor);
         });

      }
      
   }
   function imprimirAR(peso){
      var inputHidden = document.createElement("input");
      inputHidden.type = "hidden";
      inputHidden.name = "peso";
      inputHidden.value = peso;

      let frmEtq = document.getElementById("frmEtq");
      frmEtq.appendChild(inputHidden);

      frmEtq.submit();
   }
   function verificaPeso(){
      const { value: formValues } = Swal.fire({
      title: 'Informe o peso do produto',
      html:
         '<label for="peso" class="ende">Peso total da embalagem (KG):</label>' +
         '<input type="number" class="ende" id="peso" name="peso" step="0.01" placeholder="Informe o peso em KG" required>',
      focusConfirm: false,
      }).then((result) => {
         var peso = document.getElementById('peso').value;

         if(result.isConfirmed){
         //Aqui deve mandar os unicos dados para busca do ativo, sem o array.
            imprimirAR(peso);
         }
      });
   }
   function buscaAR(usuario_id){
      //aqui tem que vir uma requisição ajax, buscando a localização do usuario, e em seguida exibindo no sweet alert,
      //A operação informada, vai ficar armazenada na session, após requerir a página em php para impressão, irá ser esvaziada
     
      $.ajax({
         type: "POST",
         data: {
            usuario_id: usuario_id,
         },
         url: "../../../templates/components/ajax/buscaLocalizacao.php",
         success: function(response){
            var arrayRecebido = response;
            
            var idUsuario = usuario_id;
            var rua = arrayRecebido[0];
            var bairro = arrayRecebido[1];
            var cep = arrayRecebido[2];
            var cidade = arrayRecebido[3];
            var estado = arrayRecebido[4];
            var numero = arrayRecebido[5];
            var complemento = arrayRecebido[6];
            var nome = arrayRecebido[7];
            var arrEndereco = [idUsuario, cep, rua, bairro, cidade, estado, numero, complemento];
            var usu = document.getElementById("user_id");
            usu.value = idUsuario;
            const { value: fruit } = Swal.fire({      
            title: 'Confirme os dados de entrega',
            html: '<p>Rua: ' + rua + '<br>Bairro: ' + bairro + '<br>CEP: ' + cep + '<br>Cidade: ' + cidade + '<br>Estado: ' + estado + '<br>Numero: ' + numero + '<br>Complemento: ' + complemento,
            input: 'select',
            inputOptions: {
               'whp': 'WHP',
               'rma': 'RMA',
               'triagem': 'TRIAGEM',
               'trirma': 'TRIAGEM/RMA'
            },
            inputPlaceholder: 'Informe a Operação',
            showDenyButton: true,
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            denyButtonText: 'Corrigir',
            
         }).then((result) => {
            console.log(result.value);
            if(result.isDenied){
               corrigeEndereco(arrEndereco);
            } else {
                  if (result.value == '') {
                        Swal.fire({title: "ERRO", text:"Informe uma operação", icon: "error"});
                        setTimeout(function() {
                           buscaAR(usuario_id);
                        }, 3000);
                  }
                  else {
                     var operacao = result.value ;
                     var inputOP = document.createElement("input");
                     inputOP.type = "hidden";
                     inputOP.name = "operacao";
                     inputOP.value = operacao;

                     let frmetq = document.getElementById("frmEtq");
                     frmetq.appendChild(inputOP);
                     
                           Swal.fire({
                              title: 'Identificação dos Bens',
                              html:
                                 '<label for="conteudo" class="ende">Conteúdo:</label>' +
                                 '<input id="conteudo" class="ende" required>' +
                                 '<label for="quantidade" class="ende">Quantidade:</label>' +
                                 '<input id="quantidade"  class="ende" onkeypress="return somenteNumeros(event)" required>' +
                                 '<label for="valor" class="ende">Valor Total(R$):</label>' +
                                 '<input type="text" id="valor" oninput="formatarValor(this)" class="ende" required>' +
                                 '<button type="button" class="btn btn-success mt-2" onclick="inserirNovoItem()">Adicionar mais um item</button>',
                              focusConfirm: false,
                              showConfirmButton: true,
                              confirmButtonText: 'Finalizar',
                              preConfirm: () => {
                                 var conteudo = document.getElementById('conteudo').value;
                                 var quantidade = document.getElementById('quantidade').value;
                                 var vlr = document.getElementById('valor').value;
                                 var valor = vlr.toLocaleString('pt-BR', {
                                    style: 'currency',
                                    currency: 'BRL',
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                 });
                                 return [
                                   conteudo, quantidade, valor
                                 ]
                              }
                           }).then((result) => {
                              //Aqui ele deve verificar se há algum item preenchido antes de efetuar o envio para a página de impressão
                              if(result.isConfirmed){
                               if(!conteudo.value || !quantidade.value || !valor.value){
                                    verificaPeso();
                                    //imprimirAR();
                                 } else {
                                       inserirNovoItem();
                                       verificaPeso();
                                       //imprimirAR();
                                 }
                              }
                           });
                  }
            }
         })
         },
         error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
         }  

      });
   }
   function geraRomaneio(){
      var elementosH6 = document.getElementsByClassName('dropdown-header');
      // Verifica se algum elemento foi encontrado e pega o texto do primeiro elemento encontrado
      if (elementosH6.length > 0) {
         var valorH6 = elementosH6[0].textContent;
      } else {
         console.log('Elemento não encontrado');
      }
      var usuario_romaneio = document.getElementById('usa_id');
      usuario_romaneio.value = valorH6;
      Swal.fire({
         icon: 'question', 
         title: 'Informe o tipo de envio',
         input: 'select',
         inputOptions: {
            sedex: 'Sedex',
            pac: 'PAC'
         },
         inputPlaceholder: 'Selecione um tipo de envio',
         showCloseButton: true,
         allowOutsideClick: false,
         allowEscapeKey: false,
         showCancelButton: false,
         inputValidator: (value) => {
            return new Promise((resolve) => {
               console.log(value);
               if (value == '') {
                  resolve('Você deve informar um tipo de envio.')
               } else {
                  resolve();
                  Swal.fire({
         title: '<strong>Gerar Romaneio</strong>',
         html:
            '<form method="POST" id="gerarRomaneio" action="../../../templates/components/ajax/geraRomaneio.php"><div id="campos"><div><label for="data_inicial" class="lblRelatorios mr-2">Data Inicial:</label><input type="date" id="data_inicial" name="data_inicial" required></div>'+
            '<div><label class="lblRelatorios" for="data_final" style="margin-right:20px;" >Data Final:</label><input type="date" id="data_final" name="data_final" required> <br><label class="lblRelatorios" style="margin-right:24px" for="status">Operação: </label><select style="width:180px;" name="operacao" id="operacao">'+
            '<option value="todas">Todas</option><option value="rma">RMA</option><option value="triagem">Triagem</option><option value="trirma">Triagem/RMA</option><option value="whp">WHP</option></select>'+
            '<br><span onclick="buscaRomaneio()" class="btn btn-success" style="margin-top:15px;"><i class="fa-solid fa-magnifying-glass" style="margin-right:5px;"></i> Buscar</span></div></div>'+
            '<table class="table table-stripped"><tbody id="resultadoSelect"></tbody></table><input type="hidden" name="tipoEnvio" id="tipoEnvio"/><input type="hidden" name="usuLogado" id="usuLogado"/></form>',
         showCloseButton: true,
         showCancelButton: true,
         focusConfirm: false,
         confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Gerar',
         confirmButtonAriaLabel: 'Thumbs up, great!',
         cancelButtonText:
            '<i class="fa fa-thumbs-down"></i> Cancelar',
         cancelButtonAriaLabel: 'Thumbs down'
      }).then((result) => {
         console.log(buscaRomaneio());
            if (result.isConfirmed) {
               const data_inicio = document.getElementById('data_inicial').value;
               const data_final = document.getElementById('data_final').value;
               const tipoEnvio = document.getElementById('tipoEnvio').value = value;
               const usuarioLogado = document.getElementById('usa_id').value;
               const usuLogado = document.getElementById('usuLogado').value = usuarioLogado;

               if(data_inicio && data_final){
                  // Crie um array para armazenar os valores dos inputs marcados 
                  var valoresMarcados = [];
                  // Use o seletor jQuery para encontrar os inputs marcados dentro das células da tabela
                  $("#resultadoSelect td input:checked").each(function() {
                     // Obtenha o valor do input marcado e adicione-o ao array
                     var valor = $(this).val();
                     valoresMarcados.push(valor);
                  });

                  if(valoresMarcados.length > 0){
                     var form = document.getElementById("gerarRomaneio");
                     form.submit();
                  } else {
                     Swal.fire('Oops...', 'Você precisa selecionar no minimo uma opção.', 'warning');
                     return false;
                  }
               } else {
                  Swal.fire('Oops...', 'Você precisa informar um periodo entre datas.', 'warning');
                  return false;;
               }
            } 
      });
               }
            })
         }

      });
}


function buscaRomaneio(){
   const data_inicio = document.getElementById('data_inicial').value;
   const data_final = document.getElementById('data_final').value;
   const operacao = document.getElementById('operacao').value;
   if(data_inicio && data_final) {
         
      if(data_inicio > data_final){
         Swal.fire(
            'Erro!',
            'Informe um período de datas válido.',
            'error'
         )
         return false;
      } else{

            var dados = {
               data_inicio: data_inicio,
               data_fim: data_final,
               operacao: operacao
            }
            console.log(dados);
            //Aqui entra uma chamada ajax que vai buscar os usuários que entram no periodo do romaneio
            $(document).ready(function () {
               $.ajax({
                  url: '../../../templates/components/ajax/buscaRomanieos.php',
                  type: 'POST',
                  data: dados,
                  dataType: 'json',
                  success: function (data) {
                     var campos = document.getElementById("campos");
                     campos.style.display = "none";
                     // Limpe o select atual
                     $('#resultadoSelect').empty();   
                     var checkboxesDiv = document.getElementById("resultadoSelect");
                     data.forEach(function (checkbox) {
                        var tr = document.createElement("tr");
                        var td = document.createElement("td");
                        var td1 = document.createElement("td");
                        
                        var label = document.createElement("label");
                        label.innerHTML = checkbox[1].toUpperCase() + ' - ' + checkbox[3];

                        var input = document.createElement("input");
                        input.type = "checkbox";
                        input.name = "id[]";
                        input.value = checkbox;
                        //label.appendChild(input);
                        td1.appendChild(input);
                        td.appendChild(label);
                        tr.appendChild(td1);
                        tr.appendChild(td);
                        checkboxesDiv.appendChild(tr);
                     });
                     return data;
                  },
                  error: function(err){
                    Swal.fire(
                     'Erro!',
                     'Não foram encontrados registros para o período especificado.',
                     'error',
                    );
                    return false;
                  },
               });
            });
    }
   }
}
      </script>
      <?php
      
   }
   /**
    * Show wizard form of the current step
    *
    * @param $step
    */
   function showWizard($step) {

      echo "<div class='consumables_wizard'>";
      switch ($step) {
         case 'consumablerequest':
            $consumablerequest = new PluginConsumablesRequest();
            $consumablerequest->showConsumableRequest();
            break;
         case 'consumablevalidation':
            $consumablevalidation = new PluginConsumablesValidation();
            $consumablevalidation->showConsumableValidation();
            break;
      }
      echo "</div>";
   }

}
