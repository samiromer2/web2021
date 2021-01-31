<?php include('testconn.php'); ?>
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



            <h2>Accounts form</h2>
            <?php
            if (isset($_POST['update'])) {

                $tableidedit = $_POST['tableid'];
                $accountnameedit = $_POST['accountname'];
                $amountedit = $_POST['amount'];
                $cashflowedit = $_POST['cashflow'];
                $accountdateedit = $_POST['accountdate'];



                $sql = " UPDATE `account` SET `tableid`= '$tableidedit',`accountname`='$accountnameedit',`amount`='$amountedit',`cashflow`='$cashflowedit',`accountdate`='$accountdateedit' WHERE `tableid` = '$tableidedit'";
                $conn->query($sql);
                header('Location: Accountreport.php?editdone');
            }
            // print_r($_GET);
            // print_r($_POST);
            $theid = $_GET['tableid'];

            $sql = "SELECT `tableid`, `accountname`, `amount`, `cashflow`, `accountdate` FROM `account` where  tableid ='$theid'";
            $result = $conn->query($sql);

            $row = $result->fetch_assoc();
            //  print_r($row);

            $accountname = $row['accountname'];
            $amount = $row['amount'];
            $cashflow = $row['cashflow'];
            $accountdate = $row['accountdate'];

            ?>
            <form method="POST" action="accountformedit.php">
                <input name='tableid' type='hidden' value="<?php echo $theid; ?>">
                <div class="col-md-3">
                    <label for="accountname" class="form-label">Account Name</label>
                    <input type="text" class="form-control" id="accountname" value="<?php echo $accountname; ?>" name="accountname" placeholder="Account Name" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input value='<?php echo $amount; ?>' type="text" class="form-control" id="amount" name="amount" placeholder="Amount" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="cash flow" class="form-label">cash flow</label>

                    <?php
                    switch ($cashflow) {
                        case 'in': {
                    ?>
                                <select name="cashflow" class="form-control">
                                    <option selected value="in">in</option>
                                    <option value="non">cash flow</option>

                                    <option value="out">out</option>

                                </select>
                            <?php
                                break;
                            }
                        case 'non': {
                            ?>
                                <select name="cashflow" class="form-control">

                                    <option selected value="non">cash flow</option>
                                    <option value="in">in</option>
                                    <option value="out">out</option>

                                </select>
                            <?php
                                break;
                            }
                        case 'out': {
                            ?>
                                <select name="cashflow" class="form-control">
                                    <option selected value="out">out</option>
                                    <option value="non">cash flow</option>
                                    <option value="in">in</option>


                                </select>
                    <?php
                                break;
                            }
                    }
                    ?>

                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="date" class="form-label">date</label>
                    <input type="date" class="form-control" value="<?php echo $accountdate; ?>" id="date" name="accountdate" placeholder="Date" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <br>
                <div class="col-md-3">
                    <input type="submit" class="btn btn-warning" name='update' value="Edit">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

            </form>
        </body>

        </html>


    </main>




    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>