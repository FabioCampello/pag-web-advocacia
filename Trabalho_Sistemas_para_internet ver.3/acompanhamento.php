<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Acompanhamento</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>

<body>
    <div>

        <header>
            <!-- ******************************************************************************************** -->
            <!-- ************************************** ID TÍTULO ******************************************* -->
            <!-- ******************************************************************************************** -->
            <hgroup id="titulo">
                <h1>STARTUP THE LAWYERS</h1>
            </hgroup>
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
        <!-- **************************** ÁREA DE ACOMPANHAMENTO PROCESSUAL ***************************** -->
        <!-- ******************************************************************************************** -->

        <div id="acompanh">
            <figure class="processo">
                <h1>Acompanhamento Processual</h1>

                Utilize os campos abaixo para fazer a sua identificação.
                
                <form id="campos" name="acesso" method="post">
                    <input type=hidden name="destino">
                    <input type=hidden name="enviado">
                    <p>
                        <b>Usuário:</b><br>
                        <input class="form" type=text name="usuario" size="50">
                    </p><br>
                    <p>
                        <b>Senha:</b><br>
                        <input class="form" type=text name="senha" size="25">
                    </p><br>

                    <p><input type="submit" value="Confirmar"> <input type="reset" value="Limpar">
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
        </div>
</body>

</html>