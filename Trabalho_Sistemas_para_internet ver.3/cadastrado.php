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



    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $nome	= $_POST ["nome"];	//atribui��o do campo "nome" vindo do formul�rio para variavel
    $email	= $_POST ["email"];	//atribui��o do campo "email" vindo do formul�rio para variavel
    $telefone	= $_POST ["telefone"];	//atribui��o do campo "telefone" vindo do formul�rio para variavel
    $cidade	= $_POST ["cidade"];	//atribui��o do campo "cidade" vindo do formul�rio para variavel
    $assunto	= $_POST ["assunto"];	//atribui��o do campo "assunto" vindo do formul�rio para variavel
    $mensagem= $_POST ["mensagem"];	//atribui��o do campo "mensasgem" vindo do formul�rio para variavel
    //Gravando no banco de dados !

    //conectando com o localhost - mysql
    $conexao = mysqli_connect($host,$banco, $senha);
    if (!$conexao)
    die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());
    //conectando com a tabela do banco de dados
    $banco = mysql_select_db($banco,$conexao);
    if (!$banco)
    die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



    $query = "INSERT INTO `clientes` ( `nome` , `email` , `telefone` , `cidade` , `assunto` , `mensagem` )
    VALUES ('$nome', '$email', '$telefone', '$cidade', '$assunto', '$mensagem' '')";

    mysql_query($query,$conexao);

    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a aten��o.";
	
	mysqli_close($link);
    ?> 