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
	<link type="text/css" rel="stylesheet" href="/css/ant/main.css">
	<title>Antenas - Intranet</title>
</head>
<body>
<div id="logout">
	<a href="/login/logout.php">LOGOUT</a>
</div><!-- #logout -->
	<div id="wrap">
		<div id="cabecalho">
			<h1 id="titulo">Antenas - Intranet</h1>
		</div><!-- #cabecalho -->
		<div id="conteudo">	
			<div id="frame">
					<div id="subtitulo"><a href="http://177.220.136.106:9200">Rocket</a></div>
					<iframe src="http://177.220.136.106:9200/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9201">Posto de Saúde</a></div>
					<iframe src="http://177.220.136.106:9201/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9202">UAPSF</a></div>
					<iframe src="http://177.220.136.106:9202/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9203">Hospital</a></div>
					<iframe src="http://177.220.136.106:9203/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9204">Associações</a></div>
					<iframe src="http://177.220.136.106:9204/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9205">Sec. Educação</a></div>
					<iframe src="http://177.220.136.106:9205/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9206">CRAS</a></div>
					<iframe src="http://177.220.136.106:9206/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9207">Patio</a></div>
					<iframe src="http://177.220.136.106:9207/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9208">Pré Escola</a></div>
					<iframe src="http://177.220.136.106:9208/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9209">Praça</a></div>
					<iframe src="http://177.220.136.106:9209/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9210">Castro Alves</a></div>
					<iframe src="http://177.220.136.106:9210/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9211">Creche Lindolfo</a></div>
					<iframe src="http://177.220.136.106:9211/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9212">Creche N.S. Fátima</a></div>
					<iframe src="http://177.220.136.106:9212/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9213">Anderson</a></div>
					<iframe src="http://177.220.136.106:9213/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9214">Suporte</a></div>
					<iframe src="http://177.220.136.106:9214/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9215">Bruno</a></div>
					<iframe src="http://177.220.136.106:9215/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9216">Thaís</a></div>
					<iframe src="http://177.220.136.106:9216/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9217">Luiz</a></div>
					<iframe src="http://177.220.136.106:9217/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9223">Cida</a></div>
					<iframe src="http://177.220.136.106:9223/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9218">Elsa</a></div>
					<iframe src="http://177.220.136.106:9218/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9219">Airton</a></div>
					<iframe src="http://177.220.136.106:9219/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9220">Sueli</a></div>
					<iframe src="http://177.220.136.106:9220/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9221">Natanael</a></div>
					<iframe src="http://177.220.136.106:9221/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://177.220.136.106:9222">Eleani</a></div>
					<iframe src="http://177.220.136.106:9222/throughput.cgi"></iframe>
					<h1 id="espacador"></h1>
			</div><!-- #frame -->	
		</div><!-- #conteudo -->	
	</div><!-- #wrap -->
	<div id="rodape">
		Prefeitura Municipal de Nova Cantu -  2016 © Todos os direitos reservados
	</div><!-- #rodape -->
</body>
</html>