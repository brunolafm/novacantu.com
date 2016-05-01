<?php
	//starta a sess?
    session_start();
	ob_start();
	//resgata os valores das session em variaveis
	$id_users = isset($_SESSION['id_users']) ? $_SESSION['id_users']: "";	
	$nome_user = isset($_SESSION['nome']) ? $_SESSION['nome']: "";	
	$email_users = isset($_SESSION['email']) ? $_SESSION['email']: "";	
	$pass_users = isset($_SESSION['pass']) ? $_SESSION['pass']: "";	
	$logado = isset($_SESSION['logado']) ? $_SESSION['logado']: "N";	
	//varificamos e a var logado cont? o valos (S) OU (N), se conter N quer dizer que a pessoa n? fez o login corretamente
	//que no caso satisfar?nossa condi?o no if e a pessoa sera redirecionada para a tela de login novamente
	if ($logado == "N" && $id_users == ""){	    
		   echo  "<script type='text/javascript'>
					alert('YOU SHALL NOT PASS!');location.href='/login'
				  </script>";
		exit();
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-png" href="/img/favicon.png">
	<link type="text/css" rel="stylesheet" href="/css/monit/main.css">
	<title>Monitoramento - Intranet</title>
</head>
<body>
<div id="logout">
	<a href="/login/logout.php">LOGOUT</a>
</div><!-- #logout -->
	<div id="wrap">
		<div id="cabecalho">
			<h1 id="titulo">Monitoramento - Intranet</h1>
		</div><!-- #cabecalho -->
		<div id="conteudo">	
			<div id="frame">
					<div id="subtitulo"><a href="http://10.0.0.205/">Prefeitura</a></div>
					<iframe src="http://10.0.0.205/"></iframe>
					<h1 id="espacador"></h1>
			</div><!-- #frame -->	
		</div><!-- #conteudo -->	
	</div><!-- #wrap -->
	<div id="rodape">
		Prefeitura Municipal de Nova Cantu -  2016 © Todos os direitos reservados
	</div><!-- #rodape -->
</body>
</html>