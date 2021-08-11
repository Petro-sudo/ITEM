<?php
$itemnum = $_POST['itemnum'];
$productname = $_POST['productname'];
$qty = $_POST['qty'];
$cost = $_POST['cost'];

if(!empty($itemnum)|| !empty($productname)|| !empty($qty)|| !empty($cost)){
$host= "localhost";
$dbitemnum= "root";
$dbPassword= "";
$dbname="int";

$conn = new mysqli($host, $dbitemnum, $dbPassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else{
    $INSERT = " INSERT INTO product (itemnum, productname , qty, cost) value (?,?,?,?)";


    
    if($rnum==0){

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssss", $itemnum, $productname , $qty, $cost);
        $stmt->execute();
        header('Location: product.php');
    }
  
    
    else{
        echo "wrong input";
        

    }
    $stmt->close();
    $conn->close();
    
}

} else{
    echo "All field are required";
    die();
}  
?> 