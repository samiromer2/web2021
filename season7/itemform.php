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



            <h2>Item form</h2>
            <form method="POST" action="Itemsave.php">
                <div class="col-md-3">
                    <label for="itemname" class="form-label"> item name</label>
                    <input type="text" class="form-control" id="itemname" name="itemname" placeholder="Item Name" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="b-price" class="form-label"> b-price</label>
                    <input type="text" class="form-control" id="b-price" name="b-price" placeholder="b-price" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="s-price" class="form-label"> s-price</label>
                    <input type="text" class="form-control" id="s-price" name="s-price" placeholder="s-price" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="quan" class="form-label"> quan</label>
                    <input type="text" class="form-control" id="quan" name="quan" placeholder="quan" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="exp-date" class="form-label"> exp-date</label>
                    <select name="day" class="form-control">
                        <option>day</option>
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option>";
                            echo $i;
                            echo "</option>";
                        }

                        ?>
                    </select>
                    <select name="month" class="form-control">
                        <option>Month</option>
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo "<option>";
                            echo $i;
                            echo "</option>";
                        }

                        ?>
                    </select>
                    <select name="year" class="form-control">
                        <option>Year</option>
                        <?php
                        for ($i = 2010; $i <= date("Y") + 1; $i++) {
                            echo "<option>";
                            echo $i;
                            echo "</option>";
                        }

                        ?>
                    </select>

                </div>
                <div class="col-md-3">
                    <label for="barcode" class="form-label"> barcode</label>
                    <input type="text" class="form-control" id="barcode" name="barcode" placeholder="barcode" required>
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