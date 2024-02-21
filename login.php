<?php
$db = mysqli_connect("127.0.0.1", "root", "", "omari_final");

if (!$db) {
    die("". mysqli_connect_error());
}

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "select * from users where name = '$user'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    // $row = mysqli_fetch_array($result);
    echo "succesfull";
}else{
    echo "invalid";
}
?>