<?php
	$id = $_GET['id'];
	$conn = mysqli_connect("localhost","root","","int");

    if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
    }

	// $id=$_GET['id'];
	// mysqli_query($conn,"delete from custinfo where id='$id'");
	// header('location:doc.php');


	

$del = mysqli_query($conn,"delete from custorder,custinfo WHERE id = '$id'");

if($del)
{
    mysqli_close($conn);	
	header('Location: doc.php');
	exit;
}
else
{
    echo "Error deleting data"; 
}

?>
