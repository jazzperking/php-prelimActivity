<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Demo</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
        }
        h2 {
            text-align: center;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div>
        <h2>Basic Contact Form</h2>
        <hr>
        <form method="post">
            <label for="txtName">Name: <sup style="color:red">*</sup></label><br>
            <input type="text" name="txtName" id="txtName" autofocus required><br>

            <label for="txtEmail">Email: <sup style="color:red">*</sup></label><br>
            <input type="email" name="txtEmail" id="txtEmail" required><br>

            <label for="txtSubject">Subject: <sup style="color:red">*</sup></label><br>
            <input type="text" name="txtSubject" id="txtSubject" required><br>

            <label for="txtMessage">Message: <sup style="color:red">*</sup></label><br>
            <textarea name="txtMessage" id="txtMessage" rows="5" cols="30" required></textarea><br>

            <button type="submit" name="btnSend">Send</button>
        </form>
        <hr>

        <?php if (isset($_POST['btnSend'])): ?>
            <h2>Thank You!</h2>
            <p>Here is the information you have submitted: </p>   
            <?php
                $name = $_POST['txtName'];
                $email = $_POST['txtEmail'];
                $subject = $_POST['txtSubject'];
                $message = $_POST['txtMessage'];
            ?>

            <ul>
                <li><b>Name: </b><?php echo htmlspecialchars($name); ?></li>
                <li><b>Email: </b><?php echo htmlspecialchars($email); ?></li>
                <li><b>Subject: </b><?php echo htmlspecialchars($subject); ?></li>
                <li><b>Message: </b><?php echo nl2br(htmlspecialchars($message)); ?></li>
            </ul>
        <?php endif; ?>
    </div>

</body>
</html>
