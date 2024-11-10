<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <form action="" method="post">
        <h1>Peys App</h1><br>

        <label for="txtSize">Select Photo Size:</label>
        <input type="range" name="txtSize" id="txtSize" min="10" max="100" step="10" value="60"><br>

        <label for="clrBorder">Pick Border Color:</label>
        <input type="color" name="clrBorder" id="clrBorder" value="#000000"><br>

        <input type="submit" name="btnProcess" value="Process"><br><br>
    </form>

    <div style="width: 200px; height: 200px; display: flex; justify-content: center; align-items: center;">
        <?php
            $selectedSize = isset($_POST['txtSize']) ? $_POST['txtSize'] * 2 : 120;  
            $selectedColor = isset($_POST['clrBorder']) ? $_POST['clrBorder'] : '#000000';

            if (isset($_POST['btnProcess'])) {
                echo '<img src="img/keng.jpg" alt="keng" width=" ',$selectedSize,' " height=" ',$selectedSize,' " style="border: 5px solid ',$selectedColor,' ;"/>';
            } else {
                echo '<img src="img/keng.jpg" alt="keng" width=" ',$selectedSize,' " height=" ',$selectedSize,' " style="border: 5px solid ',$selectedColor,' ;"/>';
            }
        ?>
    </div>
    
</body>
</html>
