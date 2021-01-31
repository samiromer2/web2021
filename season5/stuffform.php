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
        <title>
            Super Market
        </title>

        <body>


            <h2>Stuff form</h2>
            <form method="POST" action="stuffsave.php">

                <div class="col-md-3">
                    <label for="staffname" class="form-label">staffname</label>
                    <input type="text" class="form-control" name="staffname" id="staffname" placeholder="staffname" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="phone" class="form-label">phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="gender" class="form-label">gender</label>
                    <select name="Gender" class="form-control">
                        <option value="non">Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>

                    </select>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="address" class="form-label">address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="address" required>
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