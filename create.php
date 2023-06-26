<?php
$firstName = $_POST['firstName'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$reenter = $_POST['reenter'];
 
//database connection
$conn = new mysqli('localhost','nihal','nihalkhan11','create');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname, address, mobile, password, reenter)values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss",$firstname, $address, $mobile, $password, $reenter);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
}

?>
