<?php
require_once 'conecta.php'; 
require_once 'banco-usuario.php'; 
require_once "logica-usuario.php"; 



$usuarios=buscaUsuario($conexao,$_POST["nome"],$_POST["senha"]);


if ($usuarios == null) {
  header ("Location:index.php?nome=0");
 }else{
  logaUsuario($usuarios["nome"]);
  header ("Location: index.php?nome=1");
}

die();


