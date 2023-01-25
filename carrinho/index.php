<?php

    $conexao = new PDO('mysql:host=localhost;dbname=vendas',"root","");
    
    $select = $conexao->prepare("SELECT * FROM estoque join clientes ");
    $select->execute();
    $fetch = $select->fetchALL();

    foreach($fetch as $produtos){
        echo 'Nome do produto:' .$produtos['nome'].' &nbsp;
        Quantidade: '.$produtos['quantidade'].' &nbsp;
        Preço: R$'.number_format($produtos['preco'],2,",",".").'
            <a href="carrinho.php?add=carrinho&id='.$produtos['id'].'">Adicionar ao carrinho</a>
            <br/>';


    }
