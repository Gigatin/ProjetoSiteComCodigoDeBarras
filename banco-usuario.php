<?php 
function buscaUsuario($conexao, $nome, $senha){
	 $nome=mysqli_real_escape_string($conexao,$nome);
	 $sql="select * from clientes where nome='$nome' and senha=MD5('$senha')";
	 
	 $resultado=mysqli_query($conexao,  $sql);
	 $usuarios= mysqli_fetch_assoc($resultado);
	 
	 return $usuarios;
	 
}

?>


