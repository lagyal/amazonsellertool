<?php include("conn/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Product</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4 mx-auto">
                <div class="py-3 text-end">
                    <a href="index.php" class="btn btn-primary">VIEW PRODUCT</a>
                </div>
                <hr/>
                <h4 class="my-3 text-center">
                    Add Products
                </h4>
                <form name="add-pro" id="add-pro" method="post" action="">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Name" name="name" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Link" name="link" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Dimension" name="dimension" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Weight" name="weight" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Price" name="price" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Shipping" name="shipping" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Profit" name="profit" />
                    </div>
                    <button type="submit" name="addProduct" class="btn btn-primary">Submit</button>
                </form>
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $name = $_POST["name"];
                        $link = $_POST["link"];
                        $dimension = $_POST["dimension"];
                        $weight = $_POST["weight"];
                        $price = $_POST["price"];
                        $shipping = $_POST["shipping"];
                        $profit = $_POST["profit"];
                        
                        $sql = $conn->query("INSERT INTO products(name, link, dimensionp, weight, price, shipping, profit)
                        VALUES('".$name."','".$link."','".$dimension."','".$weight."','".$price."','".$shipping."','".$profit."')");
                        if($sql) {
                            echo "ADDED PRODUCT";
                        } else {
                            echo "ERROR ADDING PRODUCT";
                        }
                    }

                    $conn->close();
                ?>
            </div>
        </div>
    </div>
</body>
</html>