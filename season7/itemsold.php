<?php
include("testconn.php");
$currentpage = "itemsold.php";
setlocale(LC_MONETARY, 'en_US');

if (isset($_POST['delbut'])) {
    //echo "hello";

    //print_r($_POST);
    $theid = $_POST['theid'];
    $conn->query("DELETE FROM `itemsellstemp` WHERE `tableid` = $theid");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Product example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">



    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
</head>

<body>

    <?php
    include('anyname.php');
    ?>

    <main>


        <html>


        <body>



            <h2>Sells</h2>
            <form method="POST" action="<?php echo $currentpage; ?>">
                <div class="col-md-3">
                    <label for="barcode" class="form-label"> bar code</label>
                    <?php

                    $tree = 0;

                    $sql = "SELECT `tableid`, `name`, `price`, `quan`, `exp-date`, `barcode` FROM `item` ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $tree = 1;

                        echo "<select name = 'barcodesold' class='form-control'>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value = '" . $row['barcode'] . "'>";
                            echo $row['barcode'] . ' -> ' . $row['name'];
                            echo "</option>";
                            //****/
                        }
                    } else {
                        echo "No items are set , check with admin";
                    }
                    if ($tree == 1) {
                        echo "</select>";
                    }

                    ?>

                </div>


                <div class="col-md-3">
                    <label for="quan" class="form-label"> quan</label>
                    <input type="text" class="form-control" id="quan" name="quan" placeholder="quan" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>





                <br>
                <div class="col-md-3">
                    <input type="submit" name="savesells" class="form-control" value="Save">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

            </form>
            <?php
            if (isset($_POST['savesells'])) {
                //print_r($_POST);
                $barcodesold = $_POST['barcodesold'];
                $quansold    = $_POST['quan'];

                $sqlgetname = "SELECT `name` , `quan` FROM `item` WHERE  `barcode` ='$barcodesold'";
                $resultgetname = $conn->query($sqlgetname);
                $rowgetname = $resultgetname->fetch_assoc();

                $itemname = $rowgetname['name'];
                $itemquan = $rowgetname['quan'];

                if ($quansold <= $itemquan) {
                    $sqlgetprice = "SELECT  `tableid`  FROM `itemprice` WHERE `productname` = '$itemname' and `active` = 1";
                    $resultgetprice = $conn->query($sqlgetprice);
                    $rowgetprice = $resultgetprice->fetch_assoc();

                    $priceid = $rowgetprice['tableid'];


                    $sqlgetorderno = "SELECT `orderno` FROM `itemsells`";
                    $resultgetorderno = $conn->query($sqlgetorderno);
                    if ($resultgetorderno->num_rows > 0) {
                        $rowgetorderno = $resultgetorderno->fetch_assoc();
                        $orderno = $rowgetorderno['orderno'];
                        $orderno++;
                    } else {
                        $orderno = 1;
                    }



                    $sqlintemp =  "INSERT INTO `itemsellstemp`( `barcode`, `quan`, `priceid`, `datasold`, `orderno`) VALUES ('$barcodesold','$quansold','$priceid',now(),'$orderno')";
                    $conn->query($sqlintemp);
                } else {
                    echo "sorry we dont have in the store!";
                }
            }

            ?>
            <br>
            <?php
            if (isset($_POST['Conformorder'])) {
                $sqlgetitem = "SELECT  `barcode`, `quan`, `priceid`, `datasold`, `orderno` FROM `itemsellstemp`";
                $resultgetitem = $conn->query($sqlgetitem);

                while ($rowgetitem = $resultgetitem->fetch_assoc()) {
                    $var1 = $rowgetitem['barcode'];
                    $var2 = $rowgetitem['quan'];
                    $var3 = $rowgetitem['priceid'];
                    $var4 = $rowgetitem['datasold'];
                    $var5 = $rowgetitem['orderno'];



                    $sqlgetitem = " INSERT INTO `itemsells`( `barcode`, `quan`, `priceid`, `datasold`, `orderno`) VALUES ('$var1','$var2','$var3','$var4','$var5')";
                    $conn->query($sqlgetitem);
                }
                $conn->query("DELETE FROM `itemsellstemp`");
            }
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">barcode</th>
                        <th scope="col">Name</th>
                        <th scope="col">price</th>
                        <th scope="col">quan</th>
                        <th scope="col">total</th>
                        <th scope="col">Date</th>
                        <th scope="col">order no</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <?php


                    $sqlgetitem = "SELECT `tableid`, `barcode`, `quan`, `priceid`, `datasold`, `orderno` FROM `itemsellstemp`";
                    $resultgetitem = $conn->query($sqlgetitem);
                    $count = 1;
                    $sum = 0;
                    while ($rowgetitem = $resultgetitem->fetch_assoc()) {
                        echo "<tr>";
                        echo "<form action = '" . $currentpage . "' method = 'POST'>";
                        echo "<input type = 'hidden' name = 'theid' value = '" . $rowgetitem['tableid'] . "'>";
                        echo "<td>" . $count . "</td>";
                        $count++;
                        echo "<td>" . $rowgetitem['barcode'] . "</td>";
                        $barcodesold = $rowgetitem['barcode'];
                        $sqlgetname = "SELECT `name`FROM `item` WHERE  `barcode` ='$barcodesold'";
                        $resultgetname = $conn->query($sqlgetname);
                        $rowgetname = $resultgetname->fetch_assoc();

                        $itemname = $rowgetname['name'];

                        echo "<td>" . $itemname . "</td>";

                        $priceid = $rowgetitem['priceid'];

                        $sqlgetname = "SELECT  `s-price`  FROM `itemprice` WHERE `tableid` = '$priceid'";
                        $resultgetname = $conn->query($sqlgetname);
                        $rowgetname = $resultgetname->fetch_assoc();

                        echo "<td>" . money_format('%(#10n', $rowgetname['s-price']) . "</td>";

                        echo "<td>" . $rowgetitem['quan'] . "</td>";
                        echo "<td> " . money_format('%(#10n', $rowgetitem['quan'] * $rowgetname['s-price']) . "</td>";

                        $sum = $sum + $rowgetitem['quan'] * $rowgetname['s-price'];

                        echo "<td>" . $rowgetitem['datasold'] . "</td>";
                        echo "<td>" . $rowgetitem['orderno'] . "</td>";
                        echo "<td>" . "<input name ='delbut' type = 'submit' value = 'X' class = 'btn btn-danger'>" . "</td>";
                        echo "</form>";
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong><?php
                                    //echo $sum; 

                                    echo money_format('%(#10n', $sum) . "\n";
                                    ?></strong></td>
                        <td></td>
                        <td></td>
                        <form method="POST" action="<?php echo $currentpage; ?>">
                            <td><input name='Conformorder' type='submit' value='conform order!' class='btn btn-success'></td>
                        </form>
                    </tr>
            </table>
        </body>

        </html>


    </main>




    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>