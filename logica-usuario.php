
<?php
session_start();

function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}

function logaUsuario($_nome){
	$_SESSION["usuario_logado"]=$_nome;
}

function logout(){
session_destroy();
}



?>
