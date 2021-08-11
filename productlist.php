
<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="doc.css">
<nav ><label>Include a New Product on the List</label></nav>
</head>

<body>
    
    <br>
 <h1 style="color: black;">Add Product </h1> 
 <form action="addproduct.php" method="POST">
 <table>
     <tr>
         <td> Item Number </td>
         <td><input type="text" name="itemnum" required></td>
     </tr>
     <tr>
        <td> Product Name </td>
        <td><input type="text" name="productname" required></td>
    </tr>
    <tr>
        <td> Quantity </td>
        <td><input type="text" name="qty" required></td>
    </tr>
    <tr>
        <td>Cost </td>
        <td><input type="text" name="cost" required></td>
    </tr>
     
    <tr>
    <td><input type="submit" value="Submit"></td>
    </tr> 
 </table>
 <!-- <button type="submit"> + Add Customer</button>  -->
</form>

<br>


</body>
</html>