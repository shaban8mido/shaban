<?php
$db = mysqli_connect("127.0.0.1", "root", "", "omari_final");

if (!$db) {
    die("". mysqli_connect_error());
}

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "insert into users values ('$name','$email','$password')";
$result = mysqli_query($db, $sql);

if (!$result){
    echo "failed";
}else{
    echo "succesfully";
}

?>