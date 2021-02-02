<?php
$mycurrentform = 'Accountreport.php';
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

  <?php include('anyname.php'); ?>

  <main>

    <?php
    include('testconn.php');
    if (isset($_POST['delbut'])) {
      $theid = $_POST['tableid'];

      $sql = "DELETE FROM `account` where tableid = '$theid' ";
      $conn->query($sql);

      //here is the code that deletes
      //  echo "we want to delete";
      //  print_r($_POST);
      $_GET['deletedone'] = "m";
    }
    if (isset($_POST['editbut'])) {
      $theid = $_POST['tableid'];



      //here is the code that deletes
      header('Location: accountformedit.php?tableid= ' . $theid);
      print_r($_POST);
    }
    $sql = " SELECT `tableid`, `barcode`, `quan`, `priceid`, `datasold`, `orderno` FROM `itemsells`   ";
    $result = $conn->query($sql);
    if (isset($_GET['editdone'])) {
    ?>
      <div class="alert alert-warning" role="alert">
        Data Edited !.
      </div>

    <?php
    }
    if (isset($_GET['deletedone'])) {
    ?>
      <div class="alert alert-danger" role="alert">
        Data Deleted !.
      </div>

    <?php
    }
    if ($result->num_rows > 0) {
    ?>
      <h2>Sells Report</h2>
      <table class="table table-hover">
        <thead>
          <tr>

            <th scope="col">#</th>
            <th scope="col">Name </th>
            <th scope="col">quan</th>
            <th scope="col">priceid </th>
            <th scope="col">datasold </th>
            <th scope="col">orderno</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $count = 1;
          // output data of each row
          while ($row = $result->fetch_assoc()) {

            $sqlgetname = "SELECT `name` , `quan` FROM `item` WHERE  `barcode` ='" . $row['barcode'] . "'";
            $resultgetname = $conn->query($sqlgetname);
            $rowgetname = $resultgetname->fetch_assoc();

            $itemname = $rowgetname['name'];

            $sqlgetname = "SELECT `tableid`, `productname`, `s-price`, `b-pirce`, `active`, `pricedate` FROM `itemprice` WHERE `tableid` = '" . $row['priceid'] . "'";
            $resultgetname = $conn->query($sqlgetname);
            $rowgetname = $resultgetname->fetch_assoc();

            $price = $rowgetname['s-price'];

          ?>
            <form method="POSt" action="<?php echo $mycurrentform; ?>">
          <?php
            $theid = $row['tableid'];
            echo "<input name = 'tableid' value ='$theid' type = 'hidden'>";

            echo "<tr>";
            echo "<td>";
            echo $count;
            $count++;
            //$count = $count + 1;
            echo "<td>" . $itemname . "</td>";
            echo "<td>" . $row['quan'] . "</td>";
            echo "<td>" . $price  . "</td>";
            echo "<td>" . $row['datasold'] . "</td>";
            echo "<td>" . $row['orderno'] . "</td>";

            //print_r($row);
            // echo "<br>";
            echo "</tr>";
            echo "</form>";
          }
        } else {
          echo "0 results";
        }

          ?>

  </main>




  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>