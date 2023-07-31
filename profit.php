<?php include("conn/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet" type="text/css" />
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Product</title>
    <script>
        function profitCalculator() {
            let sellingPrice = parseFloat(document.forms["calculateProfit"]["sellingprice"].value);
            let itemcost = parseFloat(document.forms["calculateProfit"]["itemcost"].value);
            let shipa = parseFloat(document.forms["calculateProfit"]["shipa"].value);
            let ref = parseFloat(document.forms["calculateProfit"]["ref"].value);
            let fba = parseFloat(document.forms["calculateProfit"]["fba"].value);
            let shipb = parseFloat(document.forms["calculateProfit"]["shipb"].value);
            let inventory = parseFloat(document.forms["calculateProfit"]["inventory"].value);
            let fnsk = parseFloat(document.forms["calculateProfit"]["fnsk"].value);
            let packaging = parseFloat(document.forms["calculateProfit"]["packaging"].value);
            let misc = parseFloat(document.forms["calculateProfit"]["misc"].value);

            let finalRef = ref * (sellingPrice/100);

            let totalCost = itemcost + shipa + finalRef + fba + shipb + inventory + fnsk + packaging + misc;

            let profit = sellingPrice - totalCost;
            
            alert("Profit: " + profit);
            //console.log(profit);
            return false
        }
        
        

    </script>

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
                    Calculatr Profit
                </h4>
                <form name="calculateProfit" id="add-pro" method="post" action="" onsubmit="return profitCalculator()">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Selling Price" name="sellingprice" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Item Cost" name="itemcost" />
                        <span class="calciI">*Cost for the product</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Shipping Cost (i)" name="shipa" />
                        <span class="calciI">*Cost for shipping the product from China</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Referral/Selling Fee%" name="ref" value="15"/>
                        <span class="calciI">*Amazon charges around 15% of the selling price</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="FBA fee" name="fba" />
                        <span class="calciI">*Fees for Amazon FBA. Depends on size and weight. $3.07 - $6.44</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Shipping Cost (ii)" name="shipb" />
                        <span class="calciI">*Carrier service to send amazon.</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Inventory Placement" name="inventory" />
                        <span class="calciI">*.75 per cubic foot oer month</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="FNSKU labelling" name="fnsk" />
                        <span class="calciI">*Labelling. We will do it so zero</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Packaging" name="packaging" />
                        <span class="calciI">*Cost of Packaging. Custom Packaging if we do it.</span>
                    </div>                    
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Misc Costs" name="misc" />
                        <span class="calciI">*Extra Cost</span>
                    </div>
                    <button type="submit" name="addProduct" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>