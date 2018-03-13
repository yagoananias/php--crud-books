<?php

$bid = $_GET['id'];

//include dbconnect

include('dbconnect.php');

//create query database

$query = "DELETE FROM books WHERE book_id='$bid'";

if(mysqli_query($conn, $query)){

	header("Location:index.php");
}

else{

	echo "Erro na query" . mysqli_error($conn);
}

mysqli_close($conn);

?>