<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=430px, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="/css/login/main.css">
		<link rel="shortcut icon" type="image/x-png" href="/img/favicon.png">
		<title>
			Login
		</title>
	</head>
	<body>
		<div class="conteudo">
			<div class="no-select">
				<div id="cabecalho">
					<h1 id="titulo">
						PREFEITURA MUNICIPAL DE NOVA CANTU
					</h1>
					<h2 id="subtitulo">
					</h2>
				</div><!-- #cabecalho -->
				<form name="form_pesquisa" id="form_pesquisa" method="post" action="">
					<div id="login-box">
						<div id="login-box-interno">
							<div id="login-box-label">
								Página Administrativa - Login
							</div><!--login-box-label-->
							<div class="input-div" id="input-usuario">
								<input name="email" class="form-login" title="Username" value="" size="30" placeholder="E-mail" />
							</div><!--input-div-->
							<div class="input-div" id="input-senha">
								<input name="pass" type="password" class="form-login" title="Password" value="" size="30" placeholder="Senha" />
							</div><!--input-div-->
							<div id="botoes">
								<div id="botao-logar">
									<input type="submit" value="Login" class="bt-enviar" />
									<input type="hidden" name="acao" value="logar" />
								</div>
								<div id="lembrar-senha">
									<label>
										<input type="checkbox" name="remember" value="1">
										Lembrar senha
									</label>
								</div><!--lembrar-senha-->
							</div><!--botoes-->
						</div><!--login-box-interno-->
					</div><!--login-box-->
				</form><!--form-pesquisa-->
				<div id="rodape">
					Prefeitura Municipal de Nova Cantu - 2016 © Todos os direitos reservados
				</div><!-- #rodape -->
			</div><!--no-select-->
		</div><!--conteudo-->
	</body>
</html>

<?php
$action = isset($_POST['acao']) ? trim($_POST['acao']) : '';
	if(isset($action) && $action != ""){ 
		
		switch($action){
			case 'logar':
				//requer a classe de autenticação passando os valores dos inputs como parâmetros
				require_once('class/Autentica.class.php');
				//instancia a classse para usarmos o método nela contida
				$Autentica = new Autentica();
				//seta
				$Autentica->email	= $_POST['email'];
				$Autentica->pass	= $_POST['pass'];
				//chama o método						
				if($Autentica->Validar_Usuario()){
					echo  "<script type='text/javascript'>
							location.href='logado.php'
						</script>";
				}else{
					echo  "<script type='text/javascript'>
							alert('YOU SHALL NOT PASS!');location.href='/login'
						</script>";
				}
			break;
		}	
	}
?>