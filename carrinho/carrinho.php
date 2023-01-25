<?php
    session_start();
    if(!isset($_SESSION['itens']))
    {
        $_SESSION['itens'] = array();
    }

    if(isset($_GET['add']) && $_GET['add'] == "carrinho")
    {
        $idProduto = $_GET['id'];
        if(!isset($_SESSION['itens'][$idProduto]))  {
                $_SESSION['itens'][$idProduto] = 1;
        }else{
                $_SESSION['itens'][$idProduto] += 1;
        }
    }



    if(count($_SESSION['itens']) == 0){
        echo 'Carrinho Vazio<br><a href="index.php">Adicionar Itens</a>';
     } else{

        $_SESSION['dados']=array();
        foreach($_SESSION['itens'] as $idProduto=> $quantidade)
        {
        $conexao= new PDO('mysql:host=localhost;dbname=vendas',"root","");
        $select= $conexao->prepare("SELECT * FROM estoque where id=?");
        $select->bindParam(1,$idProduto);
        $select->execute();
        $produtos= $select->fetchAll();
        $total = $quantidade * $produtos[0]['preco'];
        
        echo $produtos[0]['nome'].'<br>'. 
        'Preço:'.number_format($produtos[0]['preco'],2,",",".").'<br/>'. 
        'quantidade: '.$quantidade.'<br>
        Total:'.number_format($total,2,",",".").'<br>
        <a href="remover.php?remover=carrinho&id='.$idProduto.'">Remover</a><br/><br/><br/><br/>
        ';
      
        
            array_push($_SESSION['dados'], array(
			'id_cliente'=> $_SESSION['id_cliente'],
            'id_produto'=> $idProduto,
            'quantidade'=> $quantidade,
            'preco'=> $produtos[0]['preco'],
            'total'=>$total   
            ));

        

    }


    

        echo'<a href="finaliza.php">Finalizar Pedido</a>';

}




