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
            <form method="POST" action="Accountsave.php">
                <div class="col-md-3">
                    <label for="accountname" class="form-label">Account Name</label>
                    <input type="text" class="form-control" id="accountname" name="accountname" placeholder="Account Name" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="cash flow" class="form-label">cash flow</label>
                    <select name="cashflow" class="form-control">
                        <option value="non">cash flow</option>
                        <option value="in">in</option>
                        <option value="out">out</option>

                    </select>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="date" class="form-label">date</label>
                    <input type="date" class="form-control" id="date" name="accountdate" placeholder="Date" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <br>
                <div class="col-md-3">
                    <input type="submit" class="form-control" value="Save">
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