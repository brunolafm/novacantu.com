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
					<div id="subtitulo"><a href="http://10.140.10.4:9133">Rocket</a></div>
					<iframe src="http://10.140.10.4:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.10:9133">Posto de Saúde</a></div>
					<iframe src="http://10.140.10.10:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.15:9133">UAPSF</a></div>
					<iframe src="http://10.140.10.15:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.20:9133">Hospital</a></div>
					<iframe src="http://10.140.10.20:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.25:9133">Associações</a></div>
					<iframe src="http://10.140.10.25:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.30:9133">Sec. Educação</a></div>
					<iframe src="http://10.140.10.30:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.35:9133">CRAS</a></div>
					<iframe src="http://10.140.10.35:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.40:9133">Patio</a></div>
					<iframe src="http://10.140.10.40:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.45:9133">Pré Escola</a></div>
					<iframe src="http://10.140.10.45:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.50:9133">Praça</a></div>
					<iframe src="http://10.140.10.50:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.55:9133">Castro Alves</a></div>
					<iframe src="http://10.140.10.55:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.60:9133">Creche Lindolfo</a></div>
					<iframe src="http://10.140.10.60:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.65:9133">Creche N.S. Fátima</a></div>
					<iframe src="http://10.140.10.65:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.70:9133">CES</a></div>
					<iframe src="http://10.140.10.70:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.210:9133">Anderson</a></div>
					<iframe src="http://10.140.10.210:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.215:9133">Bruno</a></div>
					<iframe src="http://10.140.10.215:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.220:9133">Luiz</a></div>
					<iframe src="http://10.140.10.220:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.221:9133">Cida</a></div>
					<iframe src="http://10.140.10.221:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.225:9133">Elsa</a></div>
					<iframe src="http://10.140.10.225:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.230:9133">Airton</a></div>
					<iframe src="http://10.140.10.230:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.235:9133">Sueli</a></div>
					<iframe src="http://10.140.10.235:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.240:9133">Natanael</a></div>
					<iframe src="http://10.140.10.240:9133/throughput.cgi"></iframe>
					<div id="subtitulo"><a href="http://10.140.10.245:9133">Eleani</a></div>
					<iframe src="http://10.140.10.245:9133/throughput.cgi"></iframe>
					<h1 id="espacador"></h1>
			</div><!-- #frame -->	
		</div><!-- #conteudo -->	
	</div><!-- #wrap -->
	<div id="rodape">
		Prefeitura Municipal de Nova Cantu -  2016 © Todos os direitos reservados
	</div><!-- #rodape -->
</body>
</html>