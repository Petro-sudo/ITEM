<?php
$initials = $_POST['initials'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$email = $_POST['email'];

if(!empty($initials)|| !empty($surname)|| !empty($gender)|| !empty($email)){
$host= "localhost";
$dbinitials= "root";
$dbPassword= "";
$dbname="int";

$conn = new mysqli($host, $dbinitials, $dbPassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else{
    $SELECT= " SELECT email from custinfo Where email = ? Limit 1 ";
    $INSERT = " INSERT Into custinfo (title,initials, surname, gender, email) value (?,?,?,?)";

    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum= $stmt->num_rows;
    
    if($rnum==0){
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssss",$title,$initials,$surname,$gender,$email);
        $stmt->execute();
        echo "New customer inserted successfully";
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