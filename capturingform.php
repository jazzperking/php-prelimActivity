<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
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
        input[type="text"], input[type="radio"] {
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Form Data</h2>
        <form method="post" action="capturing_form_data_receiver_demo.php">
            <label for="txtFirstName">First Name</label>
            <input type="text" name="txtFirstName" id="txtFirstName" autofocus><br><br>
            
            <label for="txtLastName">Last Name</label>
            <input type="text" name="txtLastName" id="txtLastName"><br><br>

            <input type="radio" name="radSex" id="radMale" value="Male">
            <label for="radMale">Male</label>

            <input type="radio" name="radSex" id="radFemale" value="Female" checked>
            <label for="radFemale">Female</label><br><br>
            
            <button type="submit" name="btnSend">Send</button><br>
        </form>
    </div>

</body>
</html>
