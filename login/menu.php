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
		<meta name="viewport" content="width=430px, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="/css/menu/main.css">
		<link rel="shortcut icon" type="image/x-png" href="/img/favicon.png">
		<title>
			Menu - ADM
		</title>
	</head>
	<body>
		<div class="conteudo">
			<div class="no-select">
				<div id="cabecalho">
					<h1 id="titulo">
						PREFEITURA MUNICIPAL DE NOVA CANTU
					</h1>
					<h1 id=espacador> </h1>
					<h2 id="subtitulo">
						MENU
					</h2>
				</div>	<!-- cabecalho -->
				<div id=selecionar>
					<h1 id=espacador> </h1>
					<h1 id=espacador> </h1>
					<h1 id=opcoes>
						<a href="/login/pages/ant-lan/" target="_blank">Antenas - LAN</a>
					</h1>
					<h1 id=espacador> </h1>
					<h1 id=opcoes>
						<a href="/login/pages/ant-wan/" target="_blank">Antenas - WAN</a>
					</h1>
					<h1 id=espacador> </h1>
					<h1 id=espacador> </h1>
					<h1 id=opcoes>
						<a href="/login/pages/monit-lan/" target="_blank">Monitoramento - LAN</a>
					</h1>
					<h1 id=espacador> </h1>
					<h1 id=opcoes>
						<a href="/login/pages/monit-wan/" target="_blank">Monitoramento - WAN</a>
					</h1>
					<h1 id=espacador> </h1>
					<h1 id=espacador> </h1>
					<h1 id=opcoes>
						<a href="http://novacantu.com:10000" target="_blank">Webmin</a>
					</h1>
					<h1 id=espacador> </h1>
					<h1 id=espacador> </h1>
					<div id="botao-deslogar">
						<a href="/login/logout.php"><input type="button" value="Sair"/></a>
					</div><!--botao-deslogar-->
				</div><!-- selecionar -->
				<div id="rodape">
					Prefeitura Municipal de Nova Cantu - 2016 © Todos os direitos reservados
				</div><!-- rodape -->
			</div><!--no-select-->
		</div><!--conteudo-->
	</body>
</html>