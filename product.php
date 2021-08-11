<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="doc.css">
<nav ><label>Manager Product</label></nav>
</head>

<body>

 <h1 style="color: black;">Order # </h1> 
 <div  style = "text-align:right; margin-right: 5%;">
 <a href ="productlist.php"><button type="click" > + New Product </button></a>
</div>
<br>
<table class="table">
    <tr>
        <th>Item Id</th>
        <th>Name</th>
        <th>Qty</th>
        <th>Cost</th>
        <th>Total</th>
        
    </tr>
    
    <?php
    $conn = mysqli_connect("localhost", "root", "" , "int");
    //include('conn.php');
    if($conn->connect_error){
        die("Connection fail:". $conn->connect_error);
    }
    $sql="SELECT * from product";
    $result = $conn->query($sql);

        while ($row= $result->fetch_assoc()) {
            # code...
            ?>
        
  <tr>
    <td><?php echo $row['itemnum']; ?></td>
    <td><?php echo $row['productname']; ?></td>
    <td><?php echo $row['qty']; ?></td>    
    <td><?php echo $row['cost']; ?></td> 
    <td><?php echo $row['qty']* $row['cost']; ?></td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> 
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    
  </tr>	
  
<?php
}
    $conn->close();
    ?>
</table>
<br>
<div  style = "text-align:right; margin-right: 5%;">
 <a href ="doc.php"><button color="primary" type="click" > + Back to order list </button></a>
 </div>
</body>
</html>