<?php require_once("logica-usuario.php") ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Validação de Login</title>  
       <link  href="css/bootstrap.css" rel="stylesheet" />     
    </head>   
<body>
  <br><br><br>
  



<?php if (usuarioEstaLogado()){  ?> 



<table border="0" width="100%" height="100%" >

        <tr>
        <td align="center" colspan="5" > <img src="imagem/gatinho.png" width="100" height="100" style="border:2px solid Tomato"></td>
        </tr>
                <tr>
                <div class="navbar navbar-inverse navbar-fixed-top">
                 <div class="container">
                    <div  class="navbar-header">
                         <td align="center" colspan="1" rowspan="1" style="border:2px solid Tomato">      <p class="alert-success"> Você está logado como <strong><?=usuarioLogado(); ?> </strong>  </p></a></td>
                </div>
             
                <div>
                  <ul class="navbar navbar-expand-lg navbar-light bg-light" >
                         <td align="center" colspan="1" rowspan="1" style="border:2px solid Tomato">   <a href="sobre.php" > Sobre</a>   </td>
                         <td align="center" colspan="1" rowspan="1" style="border:2px solid Tomato">  <a href="logout.php"> Deslogar </a>   </td>
                 
                   </ul>
                </div>
              </div>
              </div>
              </tr>
        
        
              <tr align="center">
                  <td colspan="1" rowspan="1" sizeof="10"><img src="imagem/monitor.png"  width="170" height="170"><br/>Monitor LG 240Hz amoLED<br/>R$:501,00
				  
                  <td colspan="1" rowspan="1"><img src="imagem/teclado.png"  width="200" height="200"><br/>Teclado Fortrek LED Mecânico<br/>R$: 201,00
                  <td colspan="1" rowspan="1"><img src="imagem/mouse.png"  width="100" height="100"><br/>Mouse Gamer Logitec<br/>R$: 90,00
              </tr>
		<form action="carrinho/index.php" method="POST">
        <tr>
          <td align="center" colspan="5" ><input type="submit"value="COMPRAR"> </td>
            </tr>
		    </form>
        <tr>
        <td colspan="5" align="center" style="border:2px solid Tomato">Criadores: <br/> Gabriel Caetano <br/> Lucas Santos Abreu</td>
        </tr>

          

<?php  }   ?>


