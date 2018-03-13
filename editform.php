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

  $id = $_GET['id'];



  // dbconnect.php

  include('dbconnect.php');

  //create query database

  $query = "SELECT * FROM books WHERE book_id='$id'";

  $result = mysqli_query($conn, $query);

  ?>

    <div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px">

    <h3>Edit Book Form</h3>
      
      <form role="form" action="edit.php" method="get">

      <?php

      while ($row = mysqli_fetch_assoc($result)) {
    
      
      
      ?>

      <input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>">

        <div class="form-group">
          <label>Book title</label>
          <input type="text" name="btitle" class="form-control" value="<?php echo $row['book_title']; ?>">          
        </div>

        <div class="form-group">
          <label>Book Price</label>
          <input type="text" name="bprice" class="form-control" value="<?php echo $row['book_price']; ?>">          
        </div>
        <button type="submit" class="btn bg-sucess btn-block">Edit Book </button>

        <?php
        }

        mysqli_close($conn);

        ?>
        
      </form>

    </div>



  </body>
  </html>


