<html>
	<body>
		<center>
			<table>
				<tr>
					<td>
						<img src="imagem/gatinho.png" width="100" height="100" style="border:2px solid Tomato">
					</td>
				</tr>
				<tr>
					<form method="POST" action="salvaProdutos.php">
					<td align="center">
						<label> Nome do Produto: </label>
						<input type="text" name="produto"><br>

						<label> Quantidade: </label>
						<input type="text" name="quantidade"><br>
						
						<label> Preço: </label>
						<input type="text" name="preco"><br>
						
						<input type="submit" name="cadastrar" value="Cadastrar">
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>