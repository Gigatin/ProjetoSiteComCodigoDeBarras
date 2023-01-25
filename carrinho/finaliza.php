<?php
session_start();
 
    foreach($_SESSION['dados'] as $produtos){
    $conexao = new PDO('mysql:host=localhost;dbname=vendas',"root","");
    $insert = $conexao -> prepare("
    INSERT INTO pedido(id_cliente,id_produto,quantidade, preco, total) VALUES (?,?,?,?,?)");
	$insert->bindParam(1,$_SESSION['id_cliente']);
    $insert->bindParam(2,$produtos['id_produto']);
    $insert->bindParam(3,$produtos['quantidade']);
    $insert->bindParam(4,$produtos['preco']);
    $insert->bindParam(5,$produtos['total']);
	echo "<p>" . var_dump($produtos);
    $insert->execute();

       

 }