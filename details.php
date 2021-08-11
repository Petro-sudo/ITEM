<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="doc.css">
<nav ><label>Customer's Details</label></nav>
</head>

<body>

</tr>
<br>
<br>

<h1 style="color: black;">My Details </h1>
<table class="table">
    <tr>
        <th>Title</th>
        <th>initial</th>
        <th>Surname</th>
        <th>Gender</th>
        <th>Email</th>
        
    </tr>
    
    <?php
     $id=$_GET['id'];
    $conn = mysqli_connect("localhost", "root", "" , "int");
    if($conn->connect_error){
        die("Connection fail:".$conn->connect_error);
    }

    
    
    $sql="SELECT title,initials, surname, gender, email FROM custinfo 
    WHERE id='$id'";
    $result = $conn->query($sql);

        while ($row= $result->fetch_assoc()) {
            # code...
            ?>
        
  <tr>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['initials']; ?></td>
    <td><?php echo $row['surname']; ?></td>
    <td><?php echo $row['gender']; ?></td>    
    <td><?php echo $row['email']; ?></td>  
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> 
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
  </tr>	
  
<?php
}
    $conn->close();
    ?>
</table>

 <tr>
 <div  style = "text-align:right; margin-right: 5%;">
 <br>
 <a href ="doc.php"><button type="click" > + Customer Order List </button></a>
</div>
</body>
</html>