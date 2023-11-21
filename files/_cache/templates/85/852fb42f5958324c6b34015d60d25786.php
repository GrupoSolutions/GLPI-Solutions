<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/form/header.html.twig */
class __TwigTemplate_c1e41e1b7ab23ecd58f52bb98cda381e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 34)));
        // line 35
        $context["canedit"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["canedit"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["canedit"] ?? null) : null)) : (true));
        // line 36
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["withtemplate"] ?? null) : null)) : (""));
        // line 37
        $context["rand"] = twig_random($this->env);
        // line 38
        $context["nametype"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["formtitle"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["formtitle"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 38)));
        // line 39
        $context["friendlyname"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["friendlyname"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["friendlyname"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 39)));
        // line 40
        $context["no_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noid", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["noid"] ?? null) : null)))) ? ((($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["noid"] ?? null) : null)) : (false));
        // line 41
        $context["id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41), "id", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null)))) ? ((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null)) : ( -1));
        // line 42
        $context["formoptions"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 42) &&  !(null === (($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["formoptions"] ?? null) : null)))) ? ((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["formoptions"] ?? null) : null)) : (""));
        // line 43
        $context["currentPath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", ["_route_params"], "method", false, false, false, 43);
        // line 44
        $context["entity_id"] = 0;
        // line 45
        $context["entity_name"] = "";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 46)) {
            // line 47
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 47) == "Entity") && ((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null) == 0))) {
                // line 48
                echo "      ";
                $context["entity_id"] = null;
                // line 49
                echo "   ";
            } else {
                // line 50
                echo "      ";
                $context["entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 50) &&  !(null === (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null)))) ? ((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)))) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 51
                echo "   ";
            }
            // line 52
            echo "
   ";
            // line 53
            if (Session::isMultiEntitiesMode()) {
                // line 54
                echo "      ";
                $context["entity_name"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 54));
                // line 55
                echo "   ";
            }
        }
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null)], "method", false, false, false, 57)) {
            // line 58
            echo "<form name=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" id=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" method=\"post\"
      action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            echo "\" data-submit-once>
   <div id=\"massive_container_";
            // line 60
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
</form>

";
            // line 64
            if (((((((($context["nametype"] ?? null) == "Computador") || (($context["nametype"] ?? null) == "Monitor")) || (($context["nametype"] ?? null) == "Impressora")) || (($context["nametype"] ?? null) == "Telefone")) || (($context["nametype"] ?? null) == "Dispositivo")) || (($context["nametype"] ?? null) == "Dispositivo de rede"))) {
                // line 65
                echo "   ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "   ";
                    echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ...[($context["params"] ?? null)]), "html", null, true);
                    echo "
   <script src=\"/assets/css/fa6.js\"></script>
   <form method='post' name='useditemsexport_form\$rand' style=\"float:left;\" id='useditemsexport_form\$rand' action=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/marketplace/useditemsexport/inc/termounit.php"), "html", null, true);
                    echo "\">
      <table class='row '>
      <tr class='row'>
         <td class=\"col\" >
            <button type='submit' name='generate' class=\"btn btn-primary\" style=\"display:inline-grid;\">
               <i class=\"fa-sharp fa-solid fa-file-pdf fa-xl mt-3\"></i>
               <span class=\"mt-3\">Termo de Devolução</span>
            </button>
            <input type=\"hidden\" name=\"entities_id\" value=\"";
                    // line 76
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" />
            <input type=\"hidden\" name=\"tipo\" value=\"";
                    // line 77
                    echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                    echo "\"/>
         </td>
         <td class=\"col\" >
            <button type='submit' name='generate' class=\"btn btn-primary\" style=\"display:inline-grid;\">
               <i class=\"fa-sharp fa-solid fa-file-circle-info fa-xl mt-3\"></i>
               <span class=\"mt-3\">Termo de Manutenção</span>
            </button>
            <input type=\"hidden\" name=\"entities_id\" value=\"";
                    // line 84
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" />
            <input type=\"hidden\" name=\"acao\" value=\"manutencao\"/>
         </td>
      </tr>
   </table>
   </form>
    ";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["item"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                        // line 91
                        echo "            <li>";
                        echo twig_escape_filter($this->env, $context["items"], "html", null, true);
                        echo "</li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 93
                    echo "   ";
                    // line 118
                    echo "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
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
   <script>
   var dadosArray = [];

   function inserirNovoItem() {
      
      if(!conteudo.value || !quantidade.value || !valor.value){
         console.warn(\"Erro, Campos nulos ou vazios\");
        
         return \"erro\";
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
      
         var itensContainer = document.getElementById(\"itensContainer\");
         console.log(itensContainer);
         // Preencha os campos de entrada ocultos com os valores dos arrays
         dadosArray.forEach(function(itemc, index) {
            var inputNome = document.createElement(\"input\");
            inputNome.type = \"hidden\";
            inputNome.name = \"itens[\" + index + \"][conteudo]\";
            inputNome.value = itemc.conteudo;
            
            var inputQuantidade = document.createElement(\"input\");
            inputQuantidade.type = \"hidden\";
            inputQuantidade.name = \"itens[\" + index + \"][quantidade]\";
            inputQuantidade.value = itemc.quantidade;
            
            var inputValor = document.createElement(\"input\");
            inputValor.type = \"hidden\";
            inputValor.name = \"itens[\" + index + \"][valor]\";
            inputValor.value = itemc.valor;

           
            itensContainer.appendChild(inputNome);
            itensContainer.appendChild(inputQuantidade);
            itensContainer.appendChild(inputValor);
         });

      }
      
   }

   function geraAr(){
      //aqui tem que vir uma requisição ajax, buscando a localização do usuario, e em seguida exibindo no sweet alert,
      //A operação informada, vai ficar armazenada na session, após requerir a página em php para impressão, irá ser esvaziada
      const usuario_id = document.getElementById(\"user_id\").value;
      const nametype = document.getElementById(\"nametype\").value;
      \$.ajax({
         type: \"POST\",
         data: {
            usuario_id: usuario_id,
            nametype: nametype,
         },
         url: \"/templates/components/ajax/buscaLocalizacao.php\",
         success: function(response){
            var arrayRecebido = response;
            var rua = arrayRecebido[0];
            var bairro = arrayRecebido[1];
            var cep = arrayRecebido[2];
            var cidade = arrayRecebido[3];
            var estado = arrayRecebido[4];
            var numero = arrayRecebido[5];
            var complemento = arrayRecebido[6];
            var nome = arrayRecebido[7];
            var tipo = arrayRecebido[8];

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
            showCancelButton: true,
            inputValidator: (value) => {
               return new Promise((resolve) => {
                  if (!value) {
                  resolve('Informe uma operação.')
                  } else {
                     var operacao = value;
                     var inputOP = document.createElement(\"input\");
                     inputOP.type = \"hidden\";
                     inputOP.name = \"operacao\";
                     inputOP.value = operacao;

                     let frmetq = document.getElementById(\"frmEtq\");
                     frmetq.appendChild(inputOP);
                     Swal.fire({
                        title: 'Será enviado outros itens na mesma embalagem?',
                        text: \"Dados importantes para a declaração de conteúdo!\",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim',
                        cancelButtonText: 'Não',
                        }).then((result) => {
                        if (result.isConfirmed) {
                           const { value: formValues } = Swal.fire({
                              title: 'Identificação dos Bens',
                              html:
                                 '<label for=\"conteudo\" class=\"ende\">Conteúdo:</label>' +
                                 '<input id=\"conteudo\" class=\"ende\" required>' +
                                 '<label for=\"quantidade\" class=\"ende\">Quantidade:</label>' +
                                 '<input id=\"quantidade\"  class=\"ende\" onkeypress=\"return somenteNumeros(event)\" required>' +
                                 '<label for=\"valor\" class=\"ende\">Valor Total(R\$):</label>' +
                                 '<input type=\"text\" id=\"valor\" oninput=\"formatarValor(this)\" class=\"ende\" required>' +
                                 '<button type=\"button\" class=\"btn btn-success mt-2\" onclick=\"inserirNovoItem()\">Adicionar mais um item</button>',
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
                        } else {
                           verificaPeso();

                        }
                     })
                  }
               })
            }
         })
         }

      });

   }

   // parâmetros da função moeda (pelo que entendi)
// a = objeto do input // e = separador milésimo
// r = separador decimal // t = evento
function imprimirAR(peso){
   var inputHidden = document.createElement(\"input\");
   inputHidden.type = \"hidden\";
   inputHidden.name = \"peso\";
   inputHidden.value = peso;

   let frmEtq = document.getElementById(\"frmEtq\");
   frmEtq.appendChild(inputHidden);

   frmEtq.submit();
}
function verificaPeso(){
   const { value: formValues } = Swal.fire({
   title: 'Informe o peso do produto',
   html:
      '<label for=\"peso\" class=\"ende\">Peso total da embalagem (KG):</label>' +
      '<input type=\"number\" class=\"ende\" id=\"peso\" name=\"peso\" step=\"0.01\" placeholder=\"Informe o peso em KG\" required>',
   focusConfirm: false,
   }).then((result) => {
      var peso = document.getElementById('peso').value;

      if(result.isConfirmed){
      //Aqui deve mandar os unicos dados para busca do ativo, sem o array.
         imprimirAR(peso);
      }
   });
}
function formatarValor(input) {
   const valorEntrada = input.value.replace(/\\D/g, ''); // Remove tudo que não é dígito
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
function geraRomaneio(){
   
   Swal.fire({
      icon: 'question', 
      title: 'Informe o tipo de envio',
      input: 'select',
      inputOptions: {
         sedex: 'Sedex',
         pac: 'PAC'
      },
      inputPlaceholder: 'Selecione um tipo de envio',
      showCancelButton: false,
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
         '<form method=\"POST\" id=\"gerarRomaneio\" action=\"/templates/components/ajax/geraRomaneio.php\"><div id=\"campos\"><div><label for=\"data_inicial\" class=\"lblRelatorios mr-2\">Data Inicial:</label><input type=\"date\" id=\"data_inicial\" name=\"data_inicial\" required></div>'+
         '<div><label class=\"lblRelatorios\" for=\"data_final\" style=\"margin-right:20px;\" >Data Final:</label><input type=\"date\" id=\"data_final\" name=\"data_final\" required> <br><label class=\"lblRelatorios\" style=\"margin-right:24px\" for=\"status\">Operação: </label><select style=\"width:180px;\" name=\"operacao\" id=\"operacao\">'+
         '<option value=\"todas\">Todas</option><option value=\"rma\">RMA</option><option value=\"triagem\">Triagem</option><option value=\"trirma\">Triagem/RMA</option><option value=\"whp\">WHP</option></select>'+
         '<br><span onclick=\"buscaRomaneio()\" class=\"btn btn-success\" style=\"margin-top:15px;\"><i class=\"fa-solid fa-magnifying-glass\" style=\"margin-right:5px;\"></i> Buscar</span></div></div>'+
         '<table class=\"table table-stripped\"><tbody id=\"resultadoSelect\"></tbody></table><input type=\"hidden\" name=\"tipoEnvio\" id=\"tipoEnvio\"/><input type=\"hidden\" name=\"usuLogado\" id=\"usuLogado\"/></form>',
      showCloseButton: true,
      showCancelButton: true,
      focusConfirm: false,
      confirmButtonText:
         '<i class=\"fa fa-thumbs-up\"></i> Gerar',
      confirmButtonAriaLabel: 'Thumbs up, great!',
      cancelButtonText:
         '<i class=\"fa fa-thumbs-down\"></i> Cancelar',
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
               \$(\"#resultadoSelect td input:checked\").each(function() {
                  // Obtenha o valor do input marcado e adicione-o ao array
                  var valor = \$(this).val();
                  valoresMarcados.push(valor);
               });

               if(valoresMarcados.length > 0){
                  var form = document.getElementById(\"gerarRomaneio\");
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
            \$(document).ready(function () {
               \$.ajax({
                  url: '/templates/components/ajax/buscaRomanieos.php',
                  type: 'POST',
                  data: dados,
                  dataType: 'json',
                  success: function (data) {
                     var campos = document.getElementById(\"campos\");
                     campos.style.display = \"none\";
                     // Limpe o select atual
                     \$('#resultadoSelect').empty();
                     console.log(\"Dados:\");
                     console.log(data);
                     console.log(\"Fim\");

   
                     var checkboxesDiv = document.getElementById(\"resultadoSelect\");
                     data.forEach(function (checkbox) {
                        var tr = document.createElement(\"tr\");
                        var td = document.createElement(\"td\");
                        var td1 = document.createElement(\"td\");
                        
                        var label = document.createElement(\"label\");
                        label.innerHTML = checkbox[1].toUpperCase() + ' - ' + checkbox[3];

                        var input = document.createElement(\"input\");
                        input.type = \"checkbox\";
                        input.name = \"id[]\";
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
   </form>
   ";
                }
                // line 512
                echo "   
";
            }
            // line 514
            echo "

<form name=\"asset_form\" method=\"post\" action=\"";
            // line 516
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" ";
            echo ($context["formoptions"] ?? null);
            echo " enctype=\"multipart/form-data\" style=\"display:inline-grid;\" data-submit-once>
   <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 517
            echo twig_escape_filter($this->env, ($context["entity_id"] ?? null), "html", null, true);
            echo "\" />

";
        }
        // line 520
        echo "      \t<div id=\"mainformtable\" style=\"display:inline-grid;\">      
";
        // line 521
        $context["template_name"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 521)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["template_name"] ?? null) : null));
        // line 522
        echo "      ";
        if (((($context["withtemplate"] ?? null) == 2) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 522))) {
            // line 523
            echo "         <input type=\"hidden\" name=\"template_name\" value=\"";
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "\" />
         ";
            // line 524
            $context["nametype"] = twig_sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
            // line 525
            echo "      ";
        } elseif ((($context["withtemplate"] ?? null) == 1)) {
            // line 526
            echo "         <input type=\"hidden\" name=\"is_template\" value=\"1\" />
      ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 527
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 527)) {
            // line 528
            echo "         ";
            $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
            // line 529
            echo "      ";
        } else {
            // line 530
            echo "         ";
            if (((($context["noid"] ?? null) == false) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiis_ids_visible") || (twig_length_filter($this->env, ($context["nametype"] ?? null)) == 0)))) {
                // line 531
                echo "            ";
                $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), ($context["nametype"] ?? null), (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 531)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null));
                // line 532
                echo "         ";
            }
            // line 533
            echo "      ";
        }
        // line 534
        echo "
      ";
        // line 535
        if (( !array_key_exists("no_header", $context) || (($context["no_header"] ?? null) == false))) {
            // line 536
            echo "         <div class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2 align-items-stretch\">
            ";
            // line 537
            if ((($context["withtemplate"] ?? null) == 1)) {
                // line 538
                echo "               <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
                echo twig_escape_filter($this->env, __("Template name"), "html", null, true);
                echo "\"
                  name=\"template_name\" id=\"textfield_template_name";
                // line 539
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                  value=\"";
                // line 540
                echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
                echo "\" />
            ";
            }
            // line 542
            echo "            <h3 class=\"card-title d-flex align-items-center ps-4\">
               ";
            // line 543
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 543);
            // line 544
            echo "               ";
            if ((twig_length_filter($this->env, ($context["icon"] ?? null)) > 0)) {
                // line 545
                echo "                  <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                     <i class=\"";
                // line 546
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-2x\"></i>
                  </div>
               ";
            }
            // line 549
            echo "               <span>
               ";
            // line 550
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 550) > 0)) {
                // line 551
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, ($context["friendlyname"] ?? null), "html", null, true);
                echo " 
               ";
            } else {
                // line 553
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo "
               ";
            }
            // line 555
            echo "               
               </span>
               
               ";
            // line 558
            if (($context["header_toolbar"] ?? null)) {
                // line 559
                echo "                  <div class=\"d-inline-block toolbar ms-2\">
                     ";
                // line 560
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header_toolbar"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                    // line 561
                    echo "                        ";
                    echo $context["raw_element"];
                    echo "
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raw_element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 563
                echo "                  </div>
               ";
            }
            // line 565
            echo "            </h3>
            
            ";
            // line 567
            $context["single_actions_ms_auto"] = true;
            // line 568
            echo "            
           
            ";
            // line 570
            echo twig_include($this->env, $context, "components/form/single-action.html.twig");
            echo "
         </div>
      ";
        }
        // line 573
        echo "
      ";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

      ";
        // line 577
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 577), "request", ["in_modal"], "method", false, false, false, 577) == true)) {
            // line 578
            echo "      
      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      ";
        }
    }

    public function getTemplateName()
    {
        return "components/form/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 578,  744 => 577,  739 => 574,  736 => 573,  730 => 570,  726 => 568,  724 => 567,  720 => 565,  716 => 563,  707 => 561,  703 => 560,  700 => 559,  698 => 558,  693 => 555,  687 => 553,  679 => 551,  677 => 550,  674 => 549,  668 => 546,  665 => 545,  662 => 544,  660 => 543,  657 => 542,  652 => 540,  648 => 539,  643 => 538,  641 => 537,  638 => 536,  636 => 535,  633 => 534,  630 => 533,  627 => 532,  624 => 531,  621 => 530,  618 => 529,  615 => 528,  613 => 527,  610 => 526,  607 => 525,  605 => 524,  600 => 523,  597 => 522,  595 => 521,  592 => 520,  586 => 517,  580 => 516,  576 => 514,  572 => 512,  176 => 118,  174 => 93,  165 => 91,  161 => 90,  152 => 84,  142 => 77,  138 => 76,  127 => 68,  121 => 66,  118 => 65,  116 => 64,  110 => 61,  106 => 60,  102 => 59,  95 => 58,  93 => 57,  89 => 55,  86 => 54,  84 => 53,  81 => 52,  78 => 51,  75 => 50,  72 => 49,  69 => 48,  66 => 47,  64 => 46,  62 => 45,  60 => 44,  58 => 43,  56 => 42,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2022 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% set target       = params['target'] ?? item.getFormURL() %}
{% set canedit      = params['canedit'] ?? true %}
{% set withtemplate = params['withtemplate'] ?? '' %}
{% set rand         = random() %}
{% set nametype     = params['formtitle'] ?? item.getTypeName(1) %}
{% set friendlyname = params['friendlyname'] ?? item.getHeaderName() %}
{% set no_id        = params['noid'] ?? false %}
{% set id           = item.fields['id'] ?? -1 %}
{% set formoptions  = params['formoptions'] ?? '' %}
{% set currentPath = app.request.attributes.get('_route_params') %}
{% set entity_id = 0 %}
{% set entity_name = '' %}
{% if item.isEntityAssign() %}
   {% if item.getType() == 'Entity' and item.fields['id'] == 0 %}
      {% set entity_id = null %}
   {% else %}
      {% set entity_id = params['entities_id'] ?? item.getEntityID() ?? session('glpiactive_entity') %}
   {% endif %}

   {% if is_multi_entities_mode() %}
      {% set entity_name = get_item_name('Entity', item.getEntityID()) %}
   {% endif %}
{% endif %}
{% if item.canEdit(item.fields['id']) %}
<form name=\"massaction_{{ rand }}\" id=\"massaction_{{ rand }}\" method=\"post\"
      action=\"{{ path('/front/massiveaction.php') }}\" data-submit-once>
   <div id=\"massive_container_{{ rand }}\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
</form>

{% if (nametype == 'Computador') or (nametype == 'Monitor') or (nametype == 'Impressora') or (nametype == 'Telefone') or (nametype == 'Dispositivo') or (nametype == 'Dispositivo de rede')  %}
   {% if not item.isNewItem %}
   {{ dump(params) }}
   <script src=\"/assets/css/fa6.js\"></script>
   <form method='post' name='useditemsexport_form\$rand' style=\"float:left;\" id='useditemsexport_form\$rand' action=\"{{ path('/marketplace/useditemsexport/inc/termounit.php') }}\">
      <table class='row '>
      <tr class='row'>
         <td class=\"col\" >
            <button type='submit' name='generate' class=\"btn btn-primary\" style=\"display:inline-grid;\">
               <i class=\"fa-sharp fa-solid fa-file-pdf fa-xl mt-3\"></i>
               <span class=\"mt-3\">Termo de Devolução</span>
            </button>
            <input type=\"hidden\" name=\"entities_id\" value=\"{{ id }}\" />
            <input type=\"hidden\" name=\"tipo\" value=\"{{nametype}}\"/>
         </td>
         <td class=\"col\" >
            <button type='submit' name='generate' class=\"btn btn-primary\" style=\"display:inline-grid;\">
               <i class=\"fa-sharp fa-solid fa-file-circle-info fa-xl mt-3\"></i>
               <span class=\"mt-3\">Termo de Manutenção</span>
            </button>
            <input type=\"hidden\" name=\"entities_id\" value=\"{{ id }}\" />
            <input type=\"hidden\" name=\"acao\" value=\"manutencao\"/>
         </td>
      </tr>
   </table>
   </form>
    {% for items in item %}
            <li>{{ items }}</li>
        {% endfor %}
   {# <form method='post' id=\"frmEtq\" style=\"float:left;\" action=\"{{ path('/marketplace/useditemsexport/inc/aer.php') }}\">
      <td class=\"col\">
      
         <button type='button' onclick=\"geraAr()\" name='aer' style=\"width:180.94px;height:69px;display:inline-grid;margin-top:1px;margin-left:32px;\" value=\"Gerar\" class='btn btn-primary submit'>
            <i class=\"fa-solid fa-memo-circle-check fa-xl mt-3\"></i>
            <span class=\"mt-3\">Gerar AR</span>
         </button>
         <div id=\"itensContainer\">
            <input type=\"hidden\" name=\"entities_id\" value=\"{{ id }}\" />
            <input type=\"hidden\" id=\"user_id\" name=\"user_id\" value=\"{{ id }}\" />
            <input type=\"hidden\" id=\"nametype\" name=\"nametype\" value=\"{{ nametype }}\" />

            <input type=\"hidden\" name=\"acao\" value=\"ar\"/>
         </div>
      </td>
   </form>
   <form method=\"POST\" id=\"frmRom\"  action=\"{{ path('/marketplace/useditemsexport/inc/rom.php') }}\">
      <td class=\"col\">
         <button type='button' onclick=\"geraRomaneio()\" name='aer'  style=\"width:180.94px;height:69px;display:inline-grid;margin-top:1px;margin-left:32px;\" value=\"Gerar\" class='btn btn-primary submit'>
            <i class=\"fa-solid fa-sharp fa-file-lines fa-xl mt-3\"></i>
            <span class=\"mt-3\">Gerar Romaneio</span>
         </button>
            <input type=\"hidden\" id=\"usa_id\" name=\"user_id\" value=\"{{ session('glpiname') }}\" />
   </form>
#}
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
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
   <script>
   var dadosArray = [];

   function inserirNovoItem() {
      
      if(!conteudo.value || !quantidade.value || !valor.value){
         console.warn(\"Erro, Campos nulos ou vazios\");
        
         return \"erro\";
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
      
         var itensContainer = document.getElementById(\"itensContainer\");
         console.log(itensContainer);
         // Preencha os campos de entrada ocultos com os valores dos arrays
         dadosArray.forEach(function(itemc, index) {
            var inputNome = document.createElement(\"input\");
            inputNome.type = \"hidden\";
            inputNome.name = \"itens[\" + index + \"][conteudo]\";
            inputNome.value = itemc.conteudo;
            
            var inputQuantidade = document.createElement(\"input\");
            inputQuantidade.type = \"hidden\";
            inputQuantidade.name = \"itens[\" + index + \"][quantidade]\";
            inputQuantidade.value = itemc.quantidade;
            
            var inputValor = document.createElement(\"input\");
            inputValor.type = \"hidden\";
            inputValor.name = \"itens[\" + index + \"][valor]\";
            inputValor.value = itemc.valor;

           
            itensContainer.appendChild(inputNome);
            itensContainer.appendChild(inputQuantidade);
            itensContainer.appendChild(inputValor);
         });

      }
      
   }

   function geraAr(){
      //aqui tem que vir uma requisição ajax, buscando a localização do usuario, e em seguida exibindo no sweet alert,
      //A operação informada, vai ficar armazenada na session, após requerir a página em php para impressão, irá ser esvaziada
      const usuario_id = document.getElementById(\"user_id\").value;
      const nametype = document.getElementById(\"nametype\").value;
      \$.ajax({
         type: \"POST\",
         data: {
            usuario_id: usuario_id,
            nametype: nametype,
         },
         url: \"/templates/components/ajax/buscaLocalizacao.php\",
         success: function(response){
            var arrayRecebido = response;
            var rua = arrayRecebido[0];
            var bairro = arrayRecebido[1];
            var cep = arrayRecebido[2];
            var cidade = arrayRecebido[3];
            var estado = arrayRecebido[4];
            var numero = arrayRecebido[5];
            var complemento = arrayRecebido[6];
            var nome = arrayRecebido[7];
            var tipo = arrayRecebido[8];

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
            showCancelButton: true,
            inputValidator: (value) => {
               return new Promise((resolve) => {
                  if (!value) {
                  resolve('Informe uma operação.')
                  } else {
                     var operacao = value;
                     var inputOP = document.createElement(\"input\");
                     inputOP.type = \"hidden\";
                     inputOP.name = \"operacao\";
                     inputOP.value = operacao;

                     let frmetq = document.getElementById(\"frmEtq\");
                     frmetq.appendChild(inputOP);
                     Swal.fire({
                        title: 'Será enviado outros itens na mesma embalagem?',
                        text: \"Dados importantes para a declaração de conteúdo!\",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim',
                        cancelButtonText: 'Não',
                        }).then((result) => {
                        if (result.isConfirmed) {
                           const { value: formValues } = Swal.fire({
                              title: 'Identificação dos Bens',
                              html:
                                 '<label for=\"conteudo\" class=\"ende\">Conteúdo:</label>' +
                                 '<input id=\"conteudo\" class=\"ende\" required>' +
                                 '<label for=\"quantidade\" class=\"ende\">Quantidade:</label>' +
                                 '<input id=\"quantidade\"  class=\"ende\" onkeypress=\"return somenteNumeros(event)\" required>' +
                                 '<label for=\"valor\" class=\"ende\">Valor Total(R\$):</label>' +
                                 '<input type=\"text\" id=\"valor\" oninput=\"formatarValor(this)\" class=\"ende\" required>' +
                                 '<button type=\"button\" class=\"btn btn-success mt-2\" onclick=\"inserirNovoItem()\">Adicionar mais um item</button>',
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
                        } else {
                           verificaPeso();

                        }
                     })
                  }
               })
            }
         })
         }

      });

   }

   // parâmetros da função moeda (pelo que entendi)
// a = objeto do input // e = separador milésimo
// r = separador decimal // t = evento
function imprimirAR(peso){
   var inputHidden = document.createElement(\"input\");
   inputHidden.type = \"hidden\";
   inputHidden.name = \"peso\";
   inputHidden.value = peso;

   let frmEtq = document.getElementById(\"frmEtq\");
   frmEtq.appendChild(inputHidden);

   frmEtq.submit();
}
function verificaPeso(){
   const { value: formValues } = Swal.fire({
   title: 'Informe o peso do produto',
   html:
      '<label for=\"peso\" class=\"ende\">Peso total da embalagem (KG):</label>' +
      '<input type=\"number\" class=\"ende\" id=\"peso\" name=\"peso\" step=\"0.01\" placeholder=\"Informe o peso em KG\" required>',
   focusConfirm: false,
   }).then((result) => {
      var peso = document.getElementById('peso').value;

      if(result.isConfirmed){
      //Aqui deve mandar os unicos dados para busca do ativo, sem o array.
         imprimirAR(peso);
      }
   });
}
function formatarValor(input) {
   const valorEntrada = input.value.replace(/\\D/g, ''); // Remove tudo que não é dígito
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
function geraRomaneio(){
   
   Swal.fire({
      icon: 'question', 
      title: 'Informe o tipo de envio',
      input: 'select',
      inputOptions: {
         sedex: 'Sedex',
         pac: 'PAC'
      },
      inputPlaceholder: 'Selecione um tipo de envio',
      showCancelButton: false,
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
         '<form method=\"POST\" id=\"gerarRomaneio\" action=\"/templates/components/ajax/geraRomaneio.php\"><div id=\"campos\"><div><label for=\"data_inicial\" class=\"lblRelatorios mr-2\">Data Inicial:</label><input type=\"date\" id=\"data_inicial\" name=\"data_inicial\" required></div>'+
         '<div><label class=\"lblRelatorios\" for=\"data_final\" style=\"margin-right:20px;\" >Data Final:</label><input type=\"date\" id=\"data_final\" name=\"data_final\" required> <br><label class=\"lblRelatorios\" style=\"margin-right:24px\" for=\"status\">Operação: </label><select style=\"width:180px;\" name=\"operacao\" id=\"operacao\">'+
         '<option value=\"todas\">Todas</option><option value=\"rma\">RMA</option><option value=\"triagem\">Triagem</option><option value=\"trirma\">Triagem/RMA</option><option value=\"whp\">WHP</option></select>'+
         '<br><span onclick=\"buscaRomaneio()\" class=\"btn btn-success\" style=\"margin-top:15px;\"><i class=\"fa-solid fa-magnifying-glass\" style=\"margin-right:5px;\"></i> Buscar</span></div></div>'+
         '<table class=\"table table-stripped\"><tbody id=\"resultadoSelect\"></tbody></table><input type=\"hidden\" name=\"tipoEnvio\" id=\"tipoEnvio\"/><input type=\"hidden\" name=\"usuLogado\" id=\"usuLogado\"/></form>',
      showCloseButton: true,
      showCancelButton: true,
      focusConfirm: false,
      confirmButtonText:
         '<i class=\"fa fa-thumbs-up\"></i> Gerar',
      confirmButtonAriaLabel: 'Thumbs up, great!',
      cancelButtonText:
         '<i class=\"fa fa-thumbs-down\"></i> Cancelar',
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
               \$(\"#resultadoSelect td input:checked\").each(function() {
                  // Obtenha o valor do input marcado e adicione-o ao array
                  var valor = \$(this).val();
                  valoresMarcados.push(valor);
               });

               if(valoresMarcados.length > 0){
                  var form = document.getElementById(\"gerarRomaneio\");
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
            \$(document).ready(function () {
               \$.ajax({
                  url: '/templates/components/ajax/buscaRomanieos.php',
                  type: 'POST',
                  data: dados,
                  dataType: 'json',
                  success: function (data) {
                     var campos = document.getElementById(\"campos\");
                     campos.style.display = \"none\";
                     // Limpe o select atual
                     \$('#resultadoSelect').empty();
                     console.log(\"Dados:\");
                     console.log(data);
                     console.log(\"Fim\");

   
                     var checkboxesDiv = document.getElementById(\"resultadoSelect\");
                     data.forEach(function (checkbox) {
                        var tr = document.createElement(\"tr\");
                        var td = document.createElement(\"td\");
                        var td1 = document.createElement(\"td\");
                        
                        var label = document.createElement(\"label\");
                        label.innerHTML = checkbox[1].toUpperCase() + ' - ' + checkbox[3];

                        var input = document.createElement(\"input\");
                        input.type = \"checkbox\";
                        input.name = \"id[]\";
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
   </form>
   {% endif %}
   
{% endif %}


<form name=\"asset_form\" method=\"post\" action=\"{{ target }}\" {{ formoptions|raw }} enctype=\"multipart/form-data\" style=\"display:inline-grid;\" data-submit-once>
   <input type=\"hidden\" name=\"entities_id\" value=\"{{ entity_id }}\" />

{% endif %}
      \t<div id=\"mainformtable\" style=\"display:inline-grid;\">      
{% set template_name = item.fields['template_name']|verbatim_value %}
      {% if withtemplate == 2 and not item.isNewItem() %}
         <input type=\"hidden\" name=\"template_name\" value=\"{{ template_name }}\" />
         {% set nametype = __('Created from the template %s')|format(template_name) %}
      {% elseif withtemplate == 1 %}
         <input type=\"hidden\" name=\"is_template\" value=\"1\" />
      {% elseif item.isNewItem() %}
         {% set nametype = __('%1\$s - %2\$s')|format(__('New item'), nametype) %}
      {% else %}
         {% if noid == false and (session('glpiis_ids_visible') or nametype|length == 0) %}
            {% set nametype = __('%1\$s - %2\$s')|format(nametype, item.fields['id']) %}
         {% endif %}
      {% endif %}

      {% if no_header is not defined or no_header == false %}
         <div class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2 align-items-stretch\">
            {% if withtemplate == 1 %}
               <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"{{ __('Template name') }}\"
                  name=\"template_name\" id=\"textfield_template_name{{ rand }}\"
                  value=\"{{ template_name }}\" />
            {% endif %}
            <h3 class=\"card-title d-flex align-items-center ps-4\">
               {% set icon = item.getIcon() %}
               {% if icon|length > 0 %}
                  <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                     <i class=\"{{ icon }} fa-2x\"></i>
                  </div>
               {% endif %}
               <span>
               {% if item.id > 0 %}
                  {{ nametype }} - {{  friendlyname }} 
               {% else %}
                  {{ nametype }}
               {% endif %}
               
               </span>
               
               {% if header_toolbar %}
                  <div class=\"d-inline-block toolbar ms-2\">
                     {% for raw_element in header_toolbar %}
                        {{ raw_element|raw }}
                     {% endfor %}
                  </div>
               {% endif %}
            </h3>
            
            {% set single_actions_ms_auto = true %}
            
           
            {{ include('components/form/single-action.html.twig') }}
         </div>
      {% endif %}

      {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::PRE_ITEM_FORM'), {'item': item, 'options': params}) }}

      {# todo modal message #}
      {% if app.request.request('in_modal') == true %}
      
      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      {% endif %}
", "components/form/header.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\form\\header.html.twig");
    }
}
