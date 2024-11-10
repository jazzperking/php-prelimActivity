<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <h2>Vendo Machine</h2><br><br>
    
    <form action="" method="post">
        <fieldset> 
            <legend>Products</legend>
                <input type="checkbox" name="chkProducts[]" id="chkCoke" value="Coke"><label for="chkCoke">Coke - ₱15</label><br>
                <input type="checkbox" name="chkProducts[]" id="chkSprite" value="Sprite"><label for="chkSprite">Sprite - ₱20</label><br>
                <input type="checkbox" name="chkProducts[]" id="chkRoyal" value="Royal"><label for="chkRoyal">Royal - ₱20</label><br>
                <input type="checkbox" name="chkProducts[]" id="chkPepsi" value="Pepsi"><label for="chkPepsi">Pepsi - ₱15</label><br>
                <input type="checkbox" name="chkProducts[]" id="chkMountainDew" value="Mountain Dew"><label for="chkMountainDew">Mountain Dew - ₱20</label><br>
        </fieldset>

        <fieldset> 
            <legend>Options</legend>
                <label for="size">Size 
                    <select name="size" id="size">
                        <option value="Regular" selected>Regular</option>
                        <option value="Up Size">Up Size (add ₱5)</option>
                        <option value="Jumbo">Jumbo (add ₱10)</option>
                    </select>
                </label> 

                <label for="txtQuantity">Quantity 
                    <input type="number" name="txtQuantity" id="txtQuantity" min="1" value="1">
                </label>

                <input type="submit" name="btnCheckOut" value="Check Out">
        </fieldset>

    </form>

    <?php
        if (isset($_POST['btnCheckOut'])) {
            $selectedProd = $_POST['chkProducts'] ?? [];
            $selectedSize = $_POST['size'];
            $quantity = $_POST['txtQuantity'] ?? 1;
            $totalAmount = 0;

            $prices = [
                'Coke' => 15,
                'Sprite' => 20,
                'Royal' => 20,
                'Pepsi' => 15,
                'Mountain Dew' => 20
            ];

            $prices_per_size = [
                'Regular' => 0,
                'Up Size' => 5,
                'Jumbo' => 10
            ];


            if (!empty($selectedProd)) {
                echo '<hr>';
                echo '<h3>Purchase Summary:</h3>';
                echo '<ul>';
                foreach ($selectedProd as $prod) {
                    $prodPrice = $prices[$prod];               
                    $sizePrice = $prices_per_size[$selectedSize];                
                    $itemTotal = ($prodPrice + $sizePrice) * $quantity;
                    $totalAmount += $itemTotal;

                    $noun = ($quantity == 1) ? 'piece' : 'pieces';
                    
                    echo "<li>$quantity $noun of $selectedSize $prod, amounting to ₱$itemTotal</li>";
                }
                echo '</ul>';
                
                echo "<p><b>Total Number of Items:</b> " . (count($selectedProd) * $quantity) . "</p>";
                echo "<p><b>Total Amount:</b> ₱$totalAmount</p>";
            } else {
                echo '<h4>No products selected.</h4>';
            }
        }
    ?>

</body>
</html>
