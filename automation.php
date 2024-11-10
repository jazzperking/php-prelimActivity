<?php
    $arrMonths = array('January', 'February', 'March', 'April', 'May', 'June' , 'July', 'August', 'September', 'October', 'November', 'December');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Automation</title>
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
        .container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>   
<div class="container">
    <h3 class="text-center">Form Automation</h3>
    <form action="" method="post">
        <div class="mb-3">
            <label for="drpMonths" class="form-label">Month</label>
            <select name="drpMonths" id="drpMonths" class="form-control">
                <?php
                    if(isset($arrMonths)){
                        foreach ($arrMonths as $key => $value){
                            if($value == date('F')){
                                echo '<option value="' , $value , '" selected>', $value , '</option>';
                            }else{
                                echo '<option value="' , $value , '">', $value , '</option>';
                            }
                        }
                    }     
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="drpDays" class="form-label">Day</label>
            <select name="drpDays" id="drpDays" class="form-control">
                <?php
                    for($i=1; $i<32;$i++){
                        if($i == date('d')){
                            echo '<option value="' , $i , '" selected>', $i , '</option>';
                        }else{
                            echo '<option value="' , $i , '">', $i , '</option>';
                        }
                    }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="drpYears" class="form-label">Year</label>
            <select name="drpYears" id="drpYears" class="form-control">
                <?php
                    for($i=1924; $i<=date('Y'); $i++){
                        $date = date('Y');
                        $date -= 10;
                        if($i == $date){  
                            echo '<option value="' , $date , '" selected>', $date , '</option>';
                        }else{
                            echo '<option value="' , $i , '">', $i , '</option>';
                        }
                    }
                ?>
            </select>
        </div>

        <button type="submit" name="btnProcess" class="btn-primary">Process</button>
    </form>
</div>

<!-- Debugging output -->
<?php
    if (isset($_POST['btnProcess'])) {
        echo '<hr>';
        echo '<h4>Selected Values:</h4>';
        echo '<p>Month: ' . $_POST['drpMonths'] . '</p>';
        echo '<p>Day: ' . $_POST['drpDays'] . '</p>';
        echo '<p>Year: ' . $_POST['drpYears'] . '</p>';
    }
?>

<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
