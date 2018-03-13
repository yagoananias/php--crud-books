<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cadastro de Livros">
    <meta name="author" content="Yago Ananias">
    <link rel="stylesheet" href="https://getbootstrap.com/dist/css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Cadastro Biblioteca Pessoal</title>
  </head>

  <body>

  	<?php
  	//add dbconnection

  	include('dbconnect.php');

  	//crate query database

  	$query = "SELECT * FROM books";

  	$result = mysqli_query($conn, $query);
  	?>

  	<div class="container bg-primary text-white" style="padding-top: 20px; padding-bottom: 20px">
  		<h3>Acervo Minha Biblioteca </h3>
  		<hr>

		<div class="row">

			<div class="col-sm-4">

			<h3>Inserir Novo Livro</h3>

			<form role="form" action="insert.php" method="post">

				<div class="form-group">
				<label>Título do Livro</label>
				<input type="text" name="btitle" class="form-control">					
				</div>

				<div class="form-group">
				<label>Preço</label>
				<input type="text" name="bprice" class="form-control">					
				</div>

				<button type="submit" class="btn btn-info btn-block">
					Adicionar
				</button>
					
			</form>
				
			</div>

		<div class="=col-sm-8">

		<h3>Meu Acervo Completo Livros</h3> 

			<table class="table">
				<thead>
					<tr>
						<th>Título do Livro</th>
						<th>Preço</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>

				<?php

				while ($row = mysqli_fetch_assoc($result)) {					
				
				?>

					<tr>
						<td><?php echo $row['book_title']; ?> </td>
						<td><?php echo $row['book_price']; ?> </td>
						<td>
							<a href="editform.php?id=<?php echo $row['book_id']?>"; class="btn btn-success" role="button">Editar</a>
							<a href="delete.php?id=<?php echo $row['book_id']?>"; class="btn btn-danger" role="button">Deletar</a>
						</td>
					</tr>

					<?php
					}
					mysqli_close($conn);
					?>

				</tbody>
			</table>

		</div>

		</div>
  		
  	</div>

  </body>

  </html>