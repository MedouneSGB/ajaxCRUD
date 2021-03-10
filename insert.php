<?php

$servername="185.98.131.93";
$username="sende1259763";
$dbpassword="sendev19";
$dbname="sende1259763";

$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);
if(!$conn){
    die("CouldNot Connect:".mysqli_connect_error());
}
else{
    $name=test_input($_POST['name']);
    $email=test_input($_POST['email']);
    $phone=test_input($_POST['phone']);

    $sql="INSERT INTO ajax_insert(name,email,phone)VALUES('$name','$email','$phone')";
    if(mysqli_query($conn,$sql)){
        echo "Enregistrement réussi !";
    }
    else{
        echo "Erreur d'enregistrement";
    }
    mysqli_close($conn);
}

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>