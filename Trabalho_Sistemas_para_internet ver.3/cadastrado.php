<?php
    $host = "localhost:3306"; //computador onde o servidor de banco de dados esta instalado
    $usuario = ""; //seu usuario para acessar o banco
    $senha = ""; //senha do usuario para acessar o banco
    $banco = "fgfstartup"; //banco que deseja acessar

    //$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
	$link = @mysql_connect($usuario, $senha, $banco);
	
	if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}

	echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
	echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;



    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel
    $email	= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
    $telefone	= $_POST ["telefone"];	//atribuição do campo "telefone" vindo do formulário para variavel
    $cidade	= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulário para variavel
    $assunto	= $_POST ["assunto"];	//atribuição do campo "assunto" vindo do formulário para variavel
    $mensagem= $_POST ["mensagem"];	//atribuição do campo "mensasgem" vindo do formulário para variavel
    //Gravando no banco de dados !

    //conectando com o localhost - mysql
    $conexao = mysqli_connect($host,$banco, $senha);
    if (!$conexao)
    die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
    //conectando com a tabela do banco de dados
    $banco = mysql_select_db($banco,$conexao);
    if (!$banco)
    die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



    $query = "INSERT INTO `clientes` ( `nome` , `email` , `telefone` , `cidade` , `assunto` , `mensagem` )
    VALUES ('$nome', '$email', '$telefone', '$cidade', '$assunto', '$mensagem' '')";

    mysql_query($query,$conexao);

    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
	
	mysqli_close($link);
    ?> 