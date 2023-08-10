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

/* @formcreator/pages/userform.html.twig */
class __TwigTemplate_789a061b7a6d5698cd35ad148a9f80fa extends Template
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
        // line 30
        echo "
";
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/userform.html.twig", 31)->unwrap();
        // line 32
        echo "<script src='/glpi108/assets/css/fa6.js' crossorigin='anonymous'></script>;
<style>
\t";
        // line 34
        $context["widthPercent"] = (100 / twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, false, 34));
        // line 35
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, false, 35)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "\t\t";
            $context["width"] = ($context["i"] * ($context["widthPercent"] ?? null));
            // line 37
            echo "            #plugin_formcreator_form.plugin_formcreator_form [data-itemtype = \"PluginFormcreatorQuestion\"][gs-w=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"],
            #plugin_formcreator_form.plugin_formcreator_form .plugin_formcreator_gap[gs-w=\"";
            // line 38
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"] {
                min-width: ";
            // line 39
            echo twig_escape_filter($this->env, ($context["widthPercent"] ?? null), "html", null, true);
            echo "%;
                width: ";
            // line 40
            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
            echo "%;
                margin-left: -0.25em;
            }
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    
    .texto{
        width:100%;
        font-size:18px;
        font-weight:500;
    }
    .texto span{
        font-weight:300;
    }
    .ende {
        text-align:initial;
        font-size:18px;
        width:100%;
    }
    .ende label {
        
        font-weight:500;
    }
</style>

<div class=\"asset\">
    ";
        // line 65
        $context["formName"] = "plugin_formcreator_form";
        // line 66
        echo "\t<form name=\"";
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\" role=\"form\" enctype=\"multipart/form-data\" class=\"plugin_formcreator_form\" action=\"#\" onkeypress=\"return plugin_formcreator.submitUserFormByKeyPress(event);\" id=\"plugin_formcreator_form\" data-itemtype=\"PluginFormcreatorForm\" data-id=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\" data-submit-once=\"true\">
\t\t<h1 class='form-title'>
\t\t        ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Toolbox\\Sanitizer::unsanitize", [0 => __((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "domain", [], "any", false, false, false, 68))]), "html", null, true);
        echo "
\t\t\t<i class=\"fas fa-print\" style=\"cursor: pointer;\" onclick=\"window.print();\"></i>
\t\t</h1>
        ";
        // line 71
        if ((((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null) != "") || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtraHeader", [], "method", false, false, false, 71) != ""))) {
            // line 72
            echo "            <div class=\"form_header\">
            ";
            // line 73
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(__((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 73)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["content"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "domain", [], "any", false, false, false, 73)));
            echo "
            ";
            // line 74
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtraHeader", [], "method", false, false, false, 74));
            echo "
            </div>
        ";
        }
        // line 77
        echo "        <ol>
        ";
        // line 78
        $context["sections"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorSection::getSectionsFromForm", [0 => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null)]);
        // line 81
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 82
            echo "            ";
            $context["sectionId"] = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null);
            // line 83
            echo "            <li class=\"card plugin_formcreator_section\" data-itemtype=\"PluginFormcreatorSection\" data-id=";
            echo twig_escape_filter($this->env, ($context["sectionId"] ?? null), "html", null, true);
            echo ">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">
                        ";
            // line 86
            if (((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null) == "")) {
                // line 87
                echo "                            (";
                echo twig_escape_filter($this->env, ($context["sectionId"] ?? null), "html", null, true);
                echo ")
                        ";
            } else {
                // line 89
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Toolbox\\Sanitizer::unsanitize", [0 => __((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "domain", [], "any", false, false, false, 89))]), "html", null, true);
                echo "
                        ";
            }
            // line 91
            echo "                    </h2>
                </div>
                <div class=\"card-body\">
                    ";
            // line 94
            $context["lastQuestion"] = null;
            // line 95
            echo "                    ";
            $context["questions"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorQuestion::getQuestionsFromSection", [0 =>             // line 96
($context["sectionId"] ?? null)]);
            // line 98
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 99
                echo "                        ";
                if ( !(null === ($context["lastQuestion"] ?? null))) {
                    // line 100
                    echo "                            ";
                    if (((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["lastQuestion"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["row"] ?? null) : null) < (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["row"] ?? null) : null))) {
                        // line 101
                        echo "                                <div class=\"plugin_formcreator_newRow\"></div>
                                ";
                        // line 102
                        if (((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["col"] ?? null) : null) > 0)) {
                            // line 103
                            echo "                                    ";
                            // line 104
                            echo "                                    ";
                            $context["x"] = 0;
                            // line 105
                            echo "                                    ";
                            $context["width"] = (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 105)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["col"] ?? null) : null);
                            // line 106
                            echo "                                    <div class=\"plugin_formcreator_gap\" gs-x=\"";
                            echo twig_escape_filter($this->env, ($context["x"] ?? null), "html", null, true);
                            echo "\" gs-w=\"";
                            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
                            echo "\"></div>
                                ";
                        }
                        // line 108
                        echo "                            ";
                    } else {
                        // line 109
                        echo "                                ";
                        $context["x"] = ((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["lastQuestion"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["col"] ?? null) : null) + (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["lastQuestion"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["width"] ?? null) : null));
                        // line 110
                        echo "                                ";
                        $context["width"] = ((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["col"] ?? null) : null) - ($context["x"] ?? null));
                        // line 111
                        echo "                                ";
                        if ((($context["x"] ?? null) < (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["col"] ?? null) : null))) {
                            // line 112
                            echo "                                    ";
                            // line 113
                            echo "                                    <div class=\"plugin_formcreator_gap\" gs-x=\"";
                            echo twig_escape_filter($this->env, ($context["x"] ?? null), "html", null, true);
                            echo "\" gs-w=\"";
                            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
                            echo "\"></div>
                                ";
                        }
                        // line 115
                        echo "                            ";
                    }
                    // line 116
                    echo "                        ";
                }
                // line 117
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "public", [], "any", false, false, false, 117) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getSubField", [], "method", false, false, false, 117), "isPublicFormCompatible", [], "method", false, false, false, 117))) {
                    // line 118
                    echo "                            ";
                    $context["sessionData"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("formcreator");
                    // line 119
                    echo "                            ";
                    echo twig_get_attribute($this->env, $this->source, $context["question"], "getRenderedHtml", [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "domain", [], "any", false, false, false, 119), 1 => true, 2 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "formanswer", [], "any", false, false, false, 119)], "method", false, false, false, 119);
                    echo "
                        ";
                }
                // line 121
                echo "                        ";
                $context["lastQuestion"] = $context["question"];
                // line 122
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "use_captcha", [], "any", false, false, false, 126)) {
            // line 127
            echo "            ";
            $context["captchaTime"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("time");
            // line 128
            echo "            ";
            $context["catchaId"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("md5", [0 => (($context["captchaTime"] ?? null) . (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null))]);
            // line 129
            echo "            ";
            $context["captcha"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCommon::getCaptcha", [0 => ($context["captchaId"] ?? null)]);
            // line 130
            echo "            <li class=\"plugin_formcreator_section\" id=\"plugin_formcreator_captcha_section\">
                <div class=\"card-header\">";
            // line 131
            echo twig_escape_filter($this->env, __("Are you a robot ?", "formcreator"), "html", null, true);
            echo "</div>
                <div class=\"card-body\"><label for=\"plugin_formcreator_captcha\">";
            // line 132
            echo twig_escape_filter($this->env, __("Are you a robot ?", "formcreator"), "html", null, true);
            echo "</label>
                    <div><i onclick=\"plugin_formcreator_refreshCaptcha()\" class=\"fas fa-sync-alt\"></i>&nbsp;<img src=\"";
            // line 133
            echo (($__internal_compile_17 = ($context["captcha"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["img"] ?? null) : null);
            echo "\">
                        <div style=\"width: 50%; float: right\" class=\"form_field\"><span class=\"no-wrap\">
                        ";
            // line 135
            echo twig_call_macro($macros["fields"], "macro_textField", ["plugin_formcreator_captcha", "", "", ["no_label" => true]], 135, $context, $this->getSourceContext());
            echo "
                        ";
            // line 136
            echo twig_call_macro($macros["fields"], "macro_hiddenField", ["plugin_formcreator_captcha_id", ($context["captchaId"] ?? null)], 136, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                </div>
            </li>
        ";
        }
        // line 142
        echo "        </ol>
        <script>
           \$(
              function() {
                 plugin_formcreator.showFields(\$(\"form[name='";
        // line 146
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "']\"));
              }
           )
        </script>

        ";
        // line 151
        echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorForm_Validator::dropdownValidator", [0 =>         // line 152
($context["item"] ?? null)]);
        // line 153
        echo "

        <div class=\"center\">
          ";
        // line 160
        echo "          <button type='button' id=\"btnEnvia\" onclick=\"atualizaEnd()\" value='Enviar' name=\"submit_formcreator\" class=\"btn\"> <span>Enviar</span> </button>&nbsp;
        </div>
        
         <i class=\"fa-duotone fa-spinner-third fa-spin\"></i>
        ";
        // line 164
        echo twig_call_macro($macros["fields"], "macro_hiddenField", ["plugin_formcreator_forms_id", (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 164)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null)], 164, $context, $this->getSourceContext());
        echo "
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
\t</form>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script> 
    <script>

    //Função que limpa o forumlário(retirada do site viacep)
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=(\"\");
            document.getElementById('bairro').value=(\"\");
            document.getElementById('cidade').value=(\"\");
            document.getElementById('estado').value=(\"\");
    }

    //Função que preenche o retorno da api (retirada do site viacep)
    function meu_callback(conteudo) {
        if (!(\"erro\" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert(\"CEP não encontrado.\");
        }
    }

    //Função que efetua a busca do conteudo na api (retirada do site viacep)
    function pesquisacep(valor) {

        //Nova variável \"cep\" somente com dígitos.
        var cep = valor.replace(/\\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != \"\") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}\$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com \"...\" enquanto consulta webservice.
                document.getElementById('endereco').value=\"...\";
                document.getElementById('bairro').value=\"...\";
                document.getElementById('cidade').value=\"...\";
                document.getElementById('estado').value=\"...\";

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
                alert(\"Formato de CEP inválido.\");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    
    //Esta função tem como objetivo remover o texto do botão e inserir o icone do fontawesome (carregando)...
    function substituirPorItalico() {
        const botao = document.getElementById('btnEnvia');
        const span = botao.querySelector('span');

        // Verifica se existe um elemento <span> dentro do botão
        if (span) {
            // Cria um novo elemento <i> com as classes especificadas
            const novoItalico = document.createElement('i');
            novoItalico.classList.add('fa-duotone', 'fa-spinner-third', 'fa-spin');

            // Substitui o texto do botão pelo novo elemento <i>
            botao.innerHTML = '';
            botao.appendChild(novoItalico);

            // Desabilita o botão para que não possa ser clicado novamente
            botao.disabled = true;
        }
    }

    function desfazerAlteracao() {
        const botao = document.getElementById('btnEnvia');

        // Remove o elemento <i>
        botao.removeChild(botao.querySelector('i'));

        // Cria um novo elemento <span> com o texto original \"Enviar\"
        const span = document.createElement('span');
        span.textContent = 'Enviar';

        // Adiciona o novo elemento <span> ao botão
        botao.appendChild(span);

        // Habilita novamente o botão para que possa ser clicado
        botao.disabled = false;
    }
    //Esta função tem como objetivo não permitir o input de caracteres não numéricos no input
    function validarNumero(input) {
        // Remove caracteres não numéricos do valor do input
        input.value = input.value.replace(/\\D/g, '');
    }

    //Esta função verifica se o array contem campos nulos, indefinidos ou vazios
    function hasEmptyFields(arr) {
        for (let i = 0; i < arr.length; i++) {
            if (arr[i] === '' || arr[i] === null || arr[i] === undefined) {
            return true;
            }
        }
        return false;
    }

    //Esta função efetua o envio dos dados obtidos no sweetAlert de correção de endereço
    function enviaEndereco(dados){
        console.log(dados);
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
        fetch('/glpi108/marketplace/formcreator/ajax/enviaEndereco.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Manipule a resposta do servidor aqui, se necessário.
            Swal.fire(
                'Sucesso',
                'Endereço atualizado!',
                'success'
            )
        })
        .catch(error => {
            Swal.fire(
                'Falha!',
                'Erro ao atualizar endereço ' + error,
                'error'
            )
        }); 
    }

    const btnEnvia = document.getElementById(\"enviaSolicitacao\");
    //Esta função deverá fazer uma requisição ajax, enviando o id do usuario que está fazendo a solicitação,
    //Buscar na tabela de usuarios o id da localização e em seguida os campos de endereço do usuário, e printará no sweetalert para confirmação ou correção.
    function atualizaEnd(){
        substituirPorItalico();
        fetch('/glpi108/marketplace/formcreator/ajax/buscaEndereco.php?id=' + ";
        // line 333
        echo twig_escape_filter($this->env, ($context["idSolicitante"] ?? null), "html", null, true);
        echo ")
            .then(response => response.json())
            .then(data => {
                console.log(data);
                Swal.fire({
                    title: '<strong>Verifique seu endereço</strong>',
                    icon: 'question',
                    html:
                        '<label class=\"texto\">CEP: <span>' + data[3] + '</span></label><br>' +
                        '<label class=\"texto\">Endereço: <span>' + data[1] + '</span></label><br>' +
                        '<label class=\"texto\">Bairro: <span>' + data[2] + '</span></label><br>' +
                        '<label class=\"texto\">Cidade: <span>' + data[4] + '</span></label><br>' +
                        '<label class=\"texto\">Estado: <span>' + data[5] + '</span></label><br>' +
                        '<label class=\"texto\">Número: <span>' + data[6] + '</span></label><br>' +
                        '<label class=\"texto\">Complemento: <span>' + data[7] + '</span></label><br>',
                    allowOutsideClick: false,
                    showCloseButton: false,
                    allowEscapeKey: false,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText:
                        '<i class=\"fa fa-thumbs-up\"></i> Está Correto!',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                    cancelButtonText:
                        '<i class=\"fa fa-thumbs-down\"></i> Corrigir',
                    cancelButtonAriaLabel: 'Thumbs down'
                }).then((result) => {
                        if(result.isDismissed){
                            const { value: formValues } = Swal.fire({
                            title: 'Editar endereço',
                            html:
                                '<label for=\"cep\" class=\"ende\">CEP</label><br><input id=\"cep\" oninput=\"validarNumero(this);\" onblur=\"pesquisacep(this.value);\" required value=\"' + data[3] + '\" class=\"ende\">' +
                                '<label for=\"endereco\" class=\"ende\">Endereço</label><br><input id=\"endereco\" class=\"ende\" required value=\"' + data[1] + '\">' + 
                                '<label for=\"bairro\" class=\"ende\">Bairro</label><br><input id=\"bairro\" class=\"ende\" required value=\"' + data[2] + '\">' +
                                '<label for=\"cidade\" class=\"ende\">Cidade</label><br><input id=\"cidade\" class=\"ende\" required value=\"' + data[4] + '\">' +
                                '<label for=\"estado\" class=\"ende\">Estado</label><br><input id=\"estado\" class=\"ende\" required value=\"' + data[5] + '\">' +
                                '<label for=\"num\" class=\"ende\">Número</label><br><input id=\"num\" class=\"ende\" required value=\"' + data[6] + '\">' +
                                '<label for=\"comp\" class=\"ende\">Complemento</label><br><input id=\"comp\" class=\"ende\" value=\"' + data[7] + '\">',
                            focusConfirm: false,
                            allowOutsideClick: false,
                            showCloseButton: true,
                            allowEscapeKey: false,
                            preConfirm: () => {
                                var idUsu = ";
        // line 376
        echo twig_escape_filter($this->env, ($context["idSolicitante"] ?? null), "html", null, true);
        echo ";
                                var cep = document.getElementById('cep').value;
                                var endereco = document.getElementById('endereco').value;
                                var bairro = document.getElementById('bairro').value;
                                var cidade = document.getElementById('cidade').value;
                                var estado = document.getElementById('estado').value;
                                var num = document.getElementById('num').value;
                                var comp = document.getElementById('comp').value;
                                
                                dados = [cep, endereco, bairro, cidade, estado, num];
                                retorno = [idUsu, cep, endereco, bairro, cidade, estado, num, comp];

                                if(hasEmptyFields(dados)){
                                    Swal.fire(
                                        'Falha!',
                                        'Informe corretamente os dados, tente novamente!',
                                        'error'
                                    );
                                    desfazerAlteracao();
                                } else{
                                    enviaEndereco(retorno);
                                    plugin_formcreator.submitUserForm();
                                    Swal.fire(
                                        'Sucesso',
                                        'Solicitação enviada',
                                        'success'
                                    );
                                    window.location.href = \"/glpi108/\";
                                }
                            }
                            })
                        } else {
                            plugin_formcreator.submitUserForm();
                            Swal.fire(
                                'Sucesso',
                                'Solicitação enviada',
                                'success'
                            );
                            window.location.href = \"/glpi108/\";
                        }
                })
            })
            .catch(error => {
                Swal.fire(
                    'Falha!',
                    'Erro na requisição AJAX: ' + error,
                    'error'
                );
                desfazerAlteracao()
            });
    }
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/userform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 376,  512 => 333,  341 => 165,  337 => 164,  331 => 160,  326 => 153,  324 => 152,  323 => 151,  315 => 146,  309 => 142,  300 => 136,  296 => 135,  291 => 133,  287 => 132,  283 => 131,  280 => 130,  277 => 129,  274 => 128,  271 => 127,  268 => 126,  260 => 123,  254 => 122,  251 => 121,  245 => 119,  242 => 118,  239 => 117,  236 => 116,  233 => 115,  225 => 113,  223 => 112,  220 => 111,  217 => 110,  214 => 109,  211 => 108,  203 => 106,  200 => 105,  197 => 104,  195 => 103,  193 => 102,  190 => 101,  187 => 100,  184 => 99,  179 => 98,  177 => 96,  175 => 95,  173 => 94,  168 => 91,  162 => 89,  156 => 87,  154 => 86,  147 => 83,  144 => 82,  139 => 81,  137 => 79,  136 => 78,  133 => 77,  127 => 74,  123 => 73,  120 => 72,  118 => 71,  112 => 68,  104 => 66,  102 => 65,  79 => 44,  69 => 40,  65 => 39,  61 => 38,  56 => 37,  53 => 36,  48 => 35,  46 => 34,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/pages/userform.html.twig", "C:\\wamp64\\www\\glpi108\\marketplace\\formcreator\\templates\\pages\\userform.html.twig");
    }
}
