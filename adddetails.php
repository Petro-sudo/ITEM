
<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="doc.css">
<nav ><label>Fill in your Personal information</label></nav>
</head>

<body>
    
    <br>
 <h1 style="color: black;">Add the Following </h1> 
 <form action="add.php" method="POST">
 <table>
 <tr>
         <td> Title </td>
         <td><input type="text" name="title" required></td>
     </tr>
     <tr>
         <td> Intials </td>
         <td><input type="text" name="initials" required></td>
     </tr>
     <tr>
        <td> Surname </td>
        <td><input type="text" name="surname" required></td>
    </tr>
    <tr>
        <td> Gender </td>
        <td><input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female
        </td>
    </tr>
    <tr>
        <td>Email </td>
        <td><input type="text" name="email" required></td>
    </tr>
     
    <tr>
    <td><input type="submit" value="Submit"></td>
    </tr> 
 </table>
</form>

<br>


</body>
</html>