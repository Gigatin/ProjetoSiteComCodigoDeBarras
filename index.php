       <?php require_once "cabecalho.php" ; ?>

 <body>

 

<?php 

       if( usuarioEstaLogado()){  
?>

<?php  }else{   ?>


 <center>
 <img src="imagem/gatinho.png" width="100" height="100" style="border:2px solid Tomato">
    <h1>  Bem Vindo    </h1>
     <form action="login.php" method="post">
  	
          <label> Login:</label>
 		  <input  type="text" name="nome"><br> 
	
          <label> Senha:</label>
 		  <input  type="password" name="senha"> <br> 
     
        <button type="submit"  class="btn btn-primary">Login </button> <br> 
		
		<a href = "cadastro.php">Cadastro </a><label> / </label> <a href="adm.php">ADM </a>
     </form>  
 
</center>

  <?php  } ?>
