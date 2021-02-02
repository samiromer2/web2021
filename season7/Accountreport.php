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
    $sql = "SELECT `tableid`, `accountname`, `amount`, `cashflow`, `accountdate` FROM `account`  ";
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
      <h2>Accounts Report</h2>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Account Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Cash Flow</th>
            <th scope="col">Account Date</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php

          $count = 1;
          // output data of each row
          while ($row = $result->fetch_assoc()) {
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
            echo "</td>";
            echo "<td>";
            echo $row['accountname'];
            echo "</td>";
            echo "<td>";
            echo $row['amount'];
            echo "</td>";
            echo "<td>";
            echo $row['cashflow'];
            echo "</td>";
            echo "<td>";
            echo $row['accountdate'];
            echo "</td>";
            echo "<td><input name = 'editbut' type = 'submit' value = 'E' class='btn btn-warning'>";
            echo "&nbsp;<input name = 'delbut' type = 'submit' value = 'x' class='btn btn-danger'></td>";

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