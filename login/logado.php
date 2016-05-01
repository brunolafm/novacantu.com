<?php
	//starta a sessão
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

<!DOCTYPE HTML>
<html lang="pt-BR">
	<link type="text/css" rel="stylesheet" href="/css/login/main.css">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=430px, user-scalable=no">
		<meta http-equiv="refresh" content=3;url="/login/menu.php">
		<link rel="shortcut icon" type="image/x-png" href="/img/favicon.png">
		<title>
			Sistema Login
		</title>
	</head>
	<body>
		<div class="no-select">
			<div id="cabecalho">
				<h1 id="titulo">
					PREFEITURA MUNICIPAL DE NOVA CANTU
				</h1>
				<h2 id="subtitulo">
				</h2>
			</div><!-- #cabecalho -->
			<center>
				<article>
					<div id="txt-logado">
						Olá <?php echo $nome_user;?>, voc&ecirc; est&aacute; logado e será redirecionado em instantes...
					</div><!--txt-logado-->
					<div id="botao-deslogar">
						<a href="logout.php"><input type="button" value="Sair"/></a>
					</div><!--botao-deslogar-->
				</article>
			</center>
			<div id="rodape">
				Prefeitura Municipal de Nova Cantu - 2016 © Todos os direitos reservados
			</div><!--rodape-->
		</div><!--no-select-->
	</body>
</html>