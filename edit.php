
<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="doc.css">
<nav ><label>Update Customer</label></nav>
</head>

<body>


 <a href ="doc.php" style="text-style:bold"> >> back</a>

<?php
	// $conn = mysqli_connect("localhost", "root", "" , "int");
     //if($conn->connect_error){
    //     die("Connection fail:". $conn->connect_error);
	// }
	
	$conn = mysqli_connect("localhost","root","","int");

     if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
        }
	

$id = $_GET['id']; 

$qry = mysqli_query($conn,"select * from custinfo where id='$id'");

$data = mysqli_fetch_array($qry);

if(isset($_POST['update']))
{   
    $title = $_POST['title'];
    $initials = $_POST['initials'];
	$surname = $_POST['surname'];
	$gender  = $_POST['gender'];
	$email = $_POST['email'];
	
    $edit = mysqli_query($conn,"update custinfo set title='$title', initials='$initials', surname='$surname', gender='$gender', email='$email' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn);
        header('location:doc.php');
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
	
		

?>
<br>

 
<form method="POST">
 <input type="text" name="title" value="<?php echo $data['title'] ?>" placeholder="Change Titl" Required>
  <input type="text" name="initials" value="<?php echo $data['initials'] ?>" placeholder="Enter Name" Required>
  <input type="text" name="surname" value="<?php echo $data['surname'] ?>" placeholder="Enter Surname" Required>
  <input type="text" name="gender" value="<?php echo $data['gender'] ?>" placeholder="Enter Gender" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter Email" Required>
  <input type="submit" name="update" value="Update">
</form>

</body>
</html>