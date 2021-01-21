<?php
echo "hello";
//any variable php $

// echo $_POST;
print_r($_POST);
//function name -> print_r
//array name $_POST
echo "<br>";
?>
<h2>hello</h2>
<?php
//variable 
//$ variable name = 

// = assign 
// == equal
// === null

//$gender = $_POST['Gender'] = 'M';

//selection 
//if (cond)
//true 
//else 
//stat
/*
if ($gender  == 'M')
    echo "Male";
echo "hello";

switch ($gender) {
    case 'M':
        echo "Male";
        break;
    case 'F':
        echo "Female";
        break;
}
*/

$staffname = $_POST['staffname'];
$phone = $_POST['phone'];
$Gender = $_POST['Gender'];
$address = $_POST['address'];

if ($Gender == 'F')
    $Gender = 1;
if ($Gender == 'M')
    $Gender = 0;
echo "<br>";
//echo ;
?>

<?php
//this is a code from the internet 
$servername = "localhost";
$username = "root";
$password = "oracle";
$dbname = "supermarket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


echo $sql = "INSERT INTO `stuff`( `stuffname`, `stuffphone`, `stuffgender`, `stuffaddress`) VALUES ('$staffname' , '$phone' , '$Gender' , '$address')";

$conn->query($sql);


?>