<?php
	class Validar{ /*classe(inicial maiúscula) */
		public $login;
		public $senha;
		
		function validacao($login, $senha){ /*método(inicial minúscula)*/
			if(($login == "adm")&&($senha=="123")){
			header("Location:cadastrarP.php");	
				
				
			}
			else{
			header("Location:adm.php");
				
				
			}
		}
	}
	/* espaço para chamar o objeto */

	$obj=new Validar;
	$obj->validacao($_POST["login"],$_POST["senha"]);
	
	?>