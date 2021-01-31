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

    $sql = "SELECT `tableid`, `accountname`, `amount`, `cashflow`, `accountdate` FROM `account`  ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Account Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Cash Flow</th>
            <th scope="col">Account Date</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $count = 1;
        // output data of each row
        while ($row = $result->fetch_assoc()) {
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

          //print_r($row);
          // echo "<br>";
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }

        ?>
  </main>




  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>