<?php require_once "conecta.php";?>
<?php	
	$nome=$_POST['nome'];
	$senha=md5($_POST['senha']);
	$cpf=$_POST['cpf'];
	$idade=$_POST['idade'];
	$sexo=$_POST['sexo'];
	$cep=$_POST['cep'];
	$endereco=$_POST['endereco'];
	
			inserir($conexao,$nome, $cpf, $idade, $sexo, $cep, $endereco,$senha);//chama a função
			                       

 function inserir ($conexao,$nome, $cpf, $idade, $sexo, $cep, $endereco,$senha){
	 $sql="insert into clientes(nome, cpf, idade, sexo, cep, endereco, senha) values ('$nome','$cpf', '$idade', '$sexo', '$cep', '$endereco','$senha')";
	 if(mysqli_query( $conexao, $sql)){
		 header("Location:index.php");
	 }
	 else{
		 $erro=mysqli_error($conexao);
		 echo 'não adiciona';
		 echo $erro;
	  }
  
 }

?>
