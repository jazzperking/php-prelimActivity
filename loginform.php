<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/customlogin.css">

    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        /* Ensure the body takes up the full height of the viewport */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 400px; /* Set the max width of the form */
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .Back {
            font-size: 20px;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .preview-img {
            border-radius: 50%;
            max-width: 150px; /* Limit image size */
            max-height: 150px; /* Limit image size */
            display: block;
            margin-left: auto;
            margin-right: auto; /* Center image horizontally */
            margin-bottom: 10px;
        }

        .browse-button {
            position: relative;
            margin-bottom: 20px;
        }

        .browse-input {
            display: none;
        }

        .browse-button i {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #007bff;
            color: white;
            padding: 8px;
            border-radius: 50%;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .Error {
            color: red;
            font-size: 12px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }

        .btn-block {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="Back">
            <i class="fa-solid fa-arrow-left"></i>
        </div>

        <p class="h2">Form</p>
        <form action="" method="post">
            <div class="preview text-center">
                <img class="preview-img" src="img/keng.jpg" alt="Preview Image" />
                <div class="browse-button">
                    <i class="fa fa-pencil-alt"></i>
                    <input class="browse-input" type="file" required name="UploadedFile" id="UploadedFile"/>
                </div>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Full Name:</label>
                <input class="form-control" type="text" name="fullname" required placeholder="Enter Your Full Name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" type="email" name="email" required placeholder="Enter Your Email"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input class="form-control" type="password" name="password" required placeholder="Enter Password"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Gender:</label><br/>
                <label><input type="radio" name="gender" required value="Male" checked /> Male</label>
                <label><input type="radio" name="gender" required value="Female" /> Female</label>
                <label><input type="radio" name="gender" required value="Other" /> Other</label>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="js/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
