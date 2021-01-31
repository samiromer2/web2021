<?php

// echo $_POST;
print_r($_POST);

include('testconn.php');


$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
//2021-01-28
$exp_date = $year . "-" . $month . "-" . $day;


$itemname = $_POST['itemname'];
$quan = $_POST['quan'];

$barcode = $_POST['barcode'];




$bprice = $_POST['b-price'];
$sprice = $_POST['s-price'];


//we added the price 
$sqlprice = "INSERT INTO `itemprice`( `productname`, `s-price`, `b-pirce`, `active`, `pricedate`) VALUES ('$itemname' , '$sprice','$bprice',1,now() )";
$conn->query($sqlprice);



$sqlgetpriceid = "SELECT `tableid` FROM `itemprice` ORDER BY `itemprice`.`tableid` DESC ";
$resultsqlgetpriceid = $conn->query($sqlgetpriceid);

$rowsqlgetpriceid = $resultsqlgetpriceid->fetch_assoc();
//  print_r($row);
echo "<br>";
echo $priceid = $rowsqlgetpriceid['tableid'];
echo "<br>";

//select id price 


echo $sqlinsertintoitem = "INSERT INTO `item`( `name`, `price`, `quan`, `exp-date`, `barcode`) VALUES ('$itemname','$priceid','$quan','$exp_date','$barcode')";
$conn->query($sqlinsertintoitem);



header('Location: itemform.php');
