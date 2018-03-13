<?php

//include dbconnect

include('dbconnect.php');

$id = $_GET['book_id'];

$title = $_GET['btitle'];

$price = $_GET['bprice'];

//create query database

$query = "UPDATE books SET book_title='$title' , book_price='$price' WHERE book_id='$id'";

if (mysqli_query($conn, $query)) {
	
	//redirect your page from edit.php to index.php

	header("Location:index.php");
}

else{

	echo "Erro na Query!" . mysqli_error($conn);
}

mysqli_close($conn);



?>