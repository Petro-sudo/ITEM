<?php
$ordernum= $_POST['ordernum'];
$dat= $_POST['dat'];
$descr= $_POST['descr'];
$amount= $_POST['amount'];

if(!empty($ordernum)|| !empty($dat)|| !empty($descr)|| !empty($amount)){
$host= "localhost";
$dbordernum= "root";
$dbPassword= "";
$dbname="int";

$conn = new mysqli($host, $dbordernum, $dbPassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else{
    $INSERT = " INSERT INTO custorder (ordernum, dat , descr, amount) value (?,?,?,?)";


    
    if($rnum==0){

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssss", $ordernum, $dat , $descr, $amount);
        $stmt->execute();
        header('Location: doc.php');
    }
  
    
    else{
        echo "Someone already register using this email";
        

    }
    $stmt->close();
    $conn->close();
    
}

} else{
    echo "All field are required";
    die();
}




   
?> 