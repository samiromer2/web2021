<?php

// echo $_POST;
print_r($_POST);

$staffname = $_POST['staffname'];
$phone = $_POST['phone'];
$Gender = $_POST['Gender'];
$address = $_POST['address'];

if ($Gender == 'F')
    $Gender = 1;
if ($Gender == 'M')
    $Gender = 0;

include('testconn.php');

echo $sql = "INSERT INTO `stuff`( `stuffname`, `stuffphone`, `stuffgender`, `stuffaddress`) VALUES ('$staffname' , '$phone' , '$Gender' , '$address')";

$conn->query($sql);

header('Location: stuffform.php');
