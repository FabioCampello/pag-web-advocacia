<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=" utf-8" />
    <title>Acompanhamento</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <script type="text/javascript">

        function validaCampo() {
            if (document.cadastro.nome.value == "") {
                alert("O Campo nome é obrigatório!");
                return false;
            }
            if (document.cadastro.email.value == "") {
                alert("O Campo e-mail é obrigatório!");
                return false;
            }
            if (document.cadastro.telefone.value == "") {
                alert("O Campo telefone é obrigatório!");
                return false;
            }
            if (document.cadastro.cidade.value == "") {
                alert("O Campo cidade é obrigatório!");
                return false;
            }
            if (document.cadastro.assunto.value == "") {
                alert("O Campo assunto é obrigatório!");
                return false;
            }
            if (document.cadastro.mensagem.value == "") {
                alert("O Campo mensagem é obrigatório!");
                return false;
            }
        }

    </script>
</head>

<body>

    <section>

        <header>
            <!-- ******************************************************************************************** -->
            <!-- ************************************** ID TÍTULO ******************************************* -->
            <!-- ******************************************************************************************** -->
             <hgroup id="titulo">
                <h1>STARTUP THE LAWYERS</h1>
            </hgroup></header><br />
            <p align="center">STL&reg;</p>


            <!-- ******************************************************************************************** -->
            <!-- *************************************** DIV MENU ******************************************* -->
            <!-- ******************************************************************************************** -->
            <div>
                <nav id="menu">
                    <h1>Menu principal</h1>

                    <!-- ******************************************************************************************** -->
                    <!-- **************************** LISTA NÃO ORDENADA DE ITENS MENU ****************************** -->
                    <!-- ******************************************************************************************** -->
                    <ul>
                        <li><a href="pagina_principal.php">Inicial</a></li>
                        <li><a>O escritório</a></li>
                        <li><a>Localização</a></li>
                        <li><a>Áreas de atuação</a></li>

                    </ul>
                    <nav id="menu">
                        <h1>Menu Principal</h1>
                        <ul>
                            <li><a>links úteis</a></li>
                            <li><a>Notícias</a></li>
                            <li><a href="formulario.php">Contato</a></li>
                        </ul>
                    </nav>

                </nav>
            </div>

        </header>

        <!-- ******************************************************************************************** -->
        <!-- ************************************* ÁREA DE CONTATO ************************************** -->
        <!-- ******************************************************************************************** -->

        <section>
            <figure class="processo">
                <h1>Contato</h1>

                <form id="cadastro" name="cadastro" method="get" action="cadastrado.php" onsubmit="return validaCampo(); return false;">
                    <table id="formulario" width="625" border="0">
                        <tr>
                            <td width="69">Nome:</td>
                            <td width="546">
                                <input name="nome" type="text" id="nome" size="70" maxlength="60" />
                                <span class="style1">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <input name="email" type="text" id="email" size="70" maxlength="60" />
                                <span class="style1">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Telefone:</td>
                            <td>
                                <input name="ddd" type="text" id="ddd" size="4" maxlength="2" />

                                <input name="telefone" type="text" id="telefone" />
                                <span class="style3">Apenas n&uacute;meros</span>
                            </td>
                        </tr>

                        <tr>
                            <td>Cidade:</td>
                            <td>
                                <input name="cidade" type="text" id="cidade" maxlength="20" />
                                <span class="style1">*</span>
                            </td>
                        </tr>

                        <tr>
                            <td>Assunto:</td>
                            <td>
                                <input name="assunto" type="text" id="assunto" />
                                <span class="style1">*</span>
                            </td>
                        </tr>

                        <tr>
                            <td>Mensagem:</td>
                            <td>
                                <textarea class="form" name="mensagem" rows="10" cols="70"></textarea>
                                <span class="style1">*</span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input name="news" type="checkbox" id="news" value="ATIVO" checked="checked" />
                                Desejo receber novidades e informa&ccedil;&otilde;es sobre o conte&uacute;do deste site.
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" />
                                    <br />
                                    <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                                    <br />
                                    <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!</span>
                                </p>
                                <p>&nbsp; </p>
                            </td>
                        </tr>

                    </table>
                </form>
            </figure>

            <!-- ******************************************************************************************** -->
            <!-- ********************************** INFORMAÇÕES RODAPÉ ************************************** -->
            <!-- ******************************************************************************************** -->
            <section style="float: none;">

            <figure>
                <figcaption id="rodape">
                    <p><h3>
                            Startup The Lawyers (STL)<br />
                            Avenida Pres. Castelo Branco, XXXX - Centro - Fortaleza / CE<br />
                            (XX) XXXX-XXXX / (XX) XXXX-XXXX<br />
                            startup.ceara@org.com<br />
                        </h3></p>
                </figcaption>
            </figure>

            <footer>
                <h5 id="desenv">
                    Desenvolvido por:<br />
                    Fábio Campêllo<br />
                    Disciplina: &nbsp;&nbsp;Programação para Internet
                </h5>
            </footer>
        </section>
        </section>
    </section>
</body>

</html>