
<?php
require_once "src/Sys/Conexao.php";
use Sys\Conexao;
try {
	$conexao = new Conexao("localhost", "login", "root", "NCti@256");
	$conexao->executar("INSERT INTO usuarios (nome, email, senha, cadastro) VALUES (?, ?, ?, ?)", array('Administrador', 'admin@gmail.com', sha1('123'), date('Y-m-d')));
} catch (\PDOException $ex) {
	echo $ex->getMessage();
}