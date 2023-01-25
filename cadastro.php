

<html>
    <head>
        <meta charset="utf-8">
        <title>Validação de Login</title>  
       <link  href="css/bootstrap.css" rel="stylesheet" />     
    </head>   
	
	<body>

  <center>
	<img src="imagem/gatinho.png" width="100" height="100" style="border:2px solid Tomato">
 <form action="validaCadastro.php" method="post">

  		<h3> Faça o seu cadastro: </h3>
          <table align="center">
		  <tr>
		  <td><img src="imagem/mistery.png" width="80px" height="80px" id="imagem"></td>
		
		  <td>
		  <label> Nome:</label>
 		  <input  type="text" name="nome"> <br>
		
          <label> Senha:</label>
 		  <input   type="password" name="senha">  <br>
		  
		  <label> Idade:</label>
		  <input type="text" name="idade"> <br>
		  
		  <label> CPF: </label>
		  <input type="text" name="cpf"> <br>
		  
		  <label> Sexo: M</label>
		  <input type="radio" onclick="alterarImagem('imagem', 'imagem/boy.png');" name="sexo" value="M"> 
		  
		  <label> F</label>
		  <input type="radio" onclick="alterarImagem('imagem', 'imagem/girl.png');" name="sexo" value="F"><br>
		  
		  <label> CEP: </label>
		  <input type="text"  name="cep"><br>
		  
		  <label> Endereço: </label>
		  <input type="text" name="endereco"> <br>
		  </tr>
		  </td>
		</table>
        <button type="submit"  class="btn btn-primary">Cadastrar </button> 

		
</form>
	<script type="text/javascript">
		function alterarImagem(objeto, caminhoNovaImagem) {document.getElementById(objeto).src = caminhoNovaImagem;}
	</script>
</center>
</body>
</html>