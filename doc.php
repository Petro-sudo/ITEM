<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="doc.css">
<nav ><label>Customer | Orders</label></nav>
</head>

<body>
 <h1 style="color: black;">Customer Order List </h1>
 <tr>
 <div  style = "text-align:right; margin-right: 5%;">
 <a href ="adddetails.php"><button  type="click" > + Add Personal Details </button></a>
 <br>
 <br>
 <a href ="order.php"><button type="click" > + Add New Order </button></a>
</div>
</tr>
<br>
<br>


<table class="table">
    <tr>
        <th>Order Number</th>
        <th>Date</th>
        <th>Description</th>
        <th>Total Amount</th>
        <th>Customer</th>
        
    </tr>
    
    <?php
    $conn = mysqli_connect("localhost", "root", "" , "int");
    if($conn->connect_error){
        die("Connection fail:". $conn->connect_error);
    }
    $sql="SELECT custorder.ordernum,custorder.dat,custorder.descr,
    custorder.amount,custinfo.title,custinfo.initials,custinfo.surname,custinfo.id
    FROM custorder,custinfo
    WHERE custinfo.id=orderid
    ORDER BY custinfo.id";
    $result = $conn->query($sql);

        while ($row= $result->fetch_assoc()) {
            # code...
            ?>
        
  <tr>
    <td><?php echo $row['ordernum']; ?></td>
    <td><?php echo $row['dat']; ?></td>
    <td><?php echo $row['descr']; ?></td>    
    <td><?php echo $row['amount']; ?></td> 
    <td><?php echo $row['title']; ?>  <?php echo $row['initials']; ?>  <?php echo $row['surname']; ?></td>
    <td><a href="details.php?id=<?php echo $row['id']; ?>">Details</a></td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> 
    <td><a href="editorder.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    
  </tr>	
  
<?php
}
    $conn->close();
    ?>
</table>
</body>
</html>