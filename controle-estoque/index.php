<?php
 include "banco.php";
 include "pages.php";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C.E</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="folha.css">
  </head>
  <body>
  <section class="section">
     <h1 class="title">
       	<h3>@28/08/2023 <br> Controle de Estoque ! <br> <br> </h3>
      </h1>
	  
		<?php include"menu.php"; ?>
			<div class='  columns'>
				<div class='column'>
				<?php 
				
					include $page;
				
				?>
				</div>
				<div class='column'>
					<?php 
					if($page == "entrada.php"){
						include "tabela_entrada.php";
					}
					if($page=='saida.php'){
						include "tabela_saida.php";
					}
					echo "<div >
					<br>";
						include "pagination.php";
					echo"</div>";
					?>
					
					
				</div>
			
			</div>
			
		
		
		

  </section>
  </body>
</html>
