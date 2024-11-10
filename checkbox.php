<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox Fetch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="checkbox"] {
            margin: 8px 0;
        }
        input[type="submit"] {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        hr {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Select Foods</h2>
        <form action="" method="post">
            <input type="checkbox" name="chkFood[]" id="chkSisig" value="Sisig"><label for="chkSisig">Sisig</label><br>
            <input type="checkbox" name="chkFood[]" id="chkChickenWings" value="Chicken Wings"><label for="chkChickenWings">Chicken Wings</label><br>
            <input type="checkbox" name="chkFood[]" id="chkCaldereta" value="Caldereta"><label for="chkCaldereta">Caldereta</label><br>
            <input type="checkbox" name="chkFood[]" id="chkKareKare" value="Kare Kare"><label for="chkKareKare">Kare Kare</label><br>
            <input type="checkbox" name="chkFood[]" id="chkAdobo" value="Adobo"><label for="chkAdobo">Adobo</label><br>
            <input type="submit" name="btnProcess" value="Process">
        </form>

        <?php
            // Enable error reporting for debugging
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            // Debugging output for submitted data
            if(isset($_POST['btnProcess'])) {
                if(isset($_POST['chkFood'])) {
                    $arrFood = $_POST['chkFood'];
                    echo '<h3>Selected Foods:</h3>';
                    echo '<ul>';
                    // Loop through the selected food items
                    foreach ($arrFood as $food) {
                        echo '<li>' . htmlspecialchars($food) . '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>No food selected.</p>';
                }
            }
        ?>
    </div>

</body>
</html>
