<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form demo</title>
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
            width: 400px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
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
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Basic Contact Form</h2>
        <hr>
        <form method="post">
            <label for="txtName">Name: <sup style="color:red">*</sup></label>
            <input type="text" name="txtName" id="txtName" autofocus required><br>

            <label for="txtEmail">Email: <sup style="color:red">*</sup></label>
            <input type="email" name="txtEmail" id="txtEmail" required><br>

            <label for="txtSubject">Subject: <sup style="color:red">*</sup></label>
            <input type="text" name="txtSubject" id="txtSubject" required><br>

            <label for="txtMessage">Message: <sup style="color:red">*</sup></label>
            <textarea name="txtMessage" id="txtMessage" rows="5" cols="30" required></textarea><br>

            <button type="submit" name="btnSend">Send</button>
        </form>
        <hr>

        <?php 
            if(isset($_REQUEST['btnSend'])){
                    echo '<h2>Thank You!</h2>';
                    echo '<p>Here is the information you have submitted: </p>';

                    $name = $_REQUEST['txtName'];
                    $email = $_REQUEST['txtEmail'];
                    $subject = $_REQUEST['txtSubject'];
                    $messsage = $_REQUEST['txtMessage'];

                    echo '<ul>';
                    echo '<li><b>Name: </b>', $name, '</li>';
                    echo '<li><b>Email: </b>', $email, '</li>';
                    echo '<li><b>Subject: </b>', $subject, '</li>';
                    echo '<li><b>Message: </b>', $messsage, '</li>';
                    echo '</ul>';
            }
        ?>
    </div>

</body>
</html>
