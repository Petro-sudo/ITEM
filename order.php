<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="doc.css">
<nav ><label>Make an New Order</label></nav>
</head>

<body>
    
    <br>
 <h1 style="color: black;"> + Add Order </h1> 
 <form action="addorder.php" method="POST">
 <table>
     <tr>
         <td> Order Number </td>
         <td><input type="text" name="ordernum" required></td>
     </tr>
     <tr>
        <td> Date </td>
        <td><input type="text" name="dat" required></td>
    </tr>
    <tr>
        <td> Description </td>
        <td><input type="text" name="descr" required></td>
    </tr>
    <tr>
        <td> Total Amount</td>
        <td><input type="text" name="amount" required></td>
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