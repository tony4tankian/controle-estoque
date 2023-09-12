Fornecedor
 <div class="container">  
	<table class='table is-striped'>
		<tr>
			<td>Produto</td>
			<td>Quantidade</td>
			<td>Valor-Total</td>
			<td>Fornecedor</td>
			<td>Data</td>
		<tr>
		<?php 
			$sql = 'SELECT * FROM entrada ;';
			$sql = mysql_query($sql);
			if(!$sql){
				echo"Error na conexao!";
			}else{
				
				while($linha = mysql_fetch_array($sql) ){
					echo"<tr>";
					echo"<td>".$linha['nome_produto']."</td>";
					echo"<td>".$linha['quantidade']."</td>";
					echo"<td>R$ ".$linha['valor_total']."</td>";
					echo"<td>".$linha['fornecedor']."</td>";
					echo"<td>".$linha['data']."</td>";
					echo"</tr>";
				}
				
			}
		?>
	</table>
 
</div>