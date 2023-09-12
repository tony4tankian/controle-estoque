Vendas
 <div class="container">  
	<table class='table is-striped'>
		<tr>
			<td>Cliente</td>
			<td>Telefone</td>
			<td>Quantidade</td>
			<td>Valor Total</td>
			<td>Status</td>
			<td>Data</td>
		<tr>
		<?php 
				$sql = 'SELECT * FROM saida ;';
				$sql = mysql_query($sql);
				if(!$sql){
					echo"Error na conexao!";
				}else{
					
						while($linha = mysql_fetch_array($sql) ){
							echo"<tr>";
								echo"<td>".$linha['nome_cliente']."</td>";
								echo"<td>".$linha['telefone']."</td>";
								echo"<td>".$linha['quantidade']."</td>";
								echo"<td>R$ ".$linha['valor_total']."</td>";
								
								echo $linha['status']=='Pago'?
								"<td  class='button is-success'>".$linha['status']."</td>"
								: "<td  class='button is-danger'>".$linha['status']."</td>";
								
								
								echo"<td>".$linha['data']."</td>";
							echo"</tr>";
						}
					
				}
			?>
	</table>
 
</div>