<?php

//add dbconnect

include('dbconnect.php');

$title = $_POST['btitle'];

$price = $_POST['bprice'];

//create query databbase

$query = "INSERT INTO books(book_title, book_price) VALUES('$title' , '$price')";

	if (mysqli_query($conn ,$query)) {
		
		header("Location:index.php");
	}
	else{

		echo "Erro na query!" . mysqli_error($conn);
	}

mysqli_close($conn)

?>