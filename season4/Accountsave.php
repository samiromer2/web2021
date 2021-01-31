<?php
//i am including my connect file
include("testconn.php");

print_r($_POST);

$accountname = $_POST['accountname'];
$amount = $_POST['amount'];
$cashflow = $_POST['cashflow'];
$accountdate = $_POST['accountdate'];

echo $sql = "INSERT INTO `account`( `accountname`, `amount`, `cashflow`, `accountdate`) VALUES ('$accountname','$amount','$cashflow','$accountdate')";

$conn->query($sql);

header('Location: accountform.php');
