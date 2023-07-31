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
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="py-3 text-end">
                    <a href="addproducts.php" class="btn btn-primary">ADD PRODUCT</a>
                    <a href="profit.php" class="btn btn-success mx-3">CALCULATE PROFIT</a>
                </div>
                <table class="table">
                    <thead class="table-dark">
                        <th>
                            S/N
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Link
                        </th>
                        <th>
                            Dimension
                        </th>
                        <th>
                            Weight
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Shipping Cost
                        </th>
                        <th>
                            Profit
                        </th>
                    </thead>
                    <tbody>
                    
                    <?php

                        $sql = $conn->query("SELECT * FROM products");
                        if($sql->num_rows > 0){
                        while($row = $sql->fetch_assoc()){
                        ?>
                        <tr>
                            <td>
                              <?php echo $row["id"];?>
                            </td>
                            <td>
                              <?php echo $row["name"];?>
                            </td>
                            <td>
                              <a href="<?php echo $row["link"];?>"><?php echo $row["link"];?></a>
                            </td>
                            <td>
                              <?php echo $row["dimensionp"];?>
                            </td>
                            <td>
                              <?php echo $row["weight"];?>
                            </td>
                            <td>
                              <?php echo $row["price"];?>
                            </td>
                            <td>
                              <?php echo $row["shipping"];?>
                            </td>
                            <td>
                              <?php echo $row["profit"];?>
                            </td>
                          
                        </tr>
                        
                    <?php
                            }
                            }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>