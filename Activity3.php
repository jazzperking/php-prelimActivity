<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/act3.css">
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <style> 
    .notification {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 100px;
        padding: 15px;
        border-radius: 5px;
        text-align: center;
        color: white;
        align-items: center;
        z-index: 1000;
    }
    .success {
        background-color: #28a745;
    }
    .error {
        background-color: #dc3545;
    }
    .close-btn {
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        padding: 0;
    }

    /* Centering the body content */
    body {
        width: 500px;
        margin: auto;
    }

    .container {
        width: 500px;
        margin: 20px auto;
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 8px;
    }

    .form-group {
        width: 250px;
        margin: 10px auto;
    }

    .form-group input {
        transition: 0.3s linear;
    }

    .form-group input:focus {
        border: 1px solid crimson;
        box-shadow: 0 0 0 0;
    }

    /* Centering the image */
    .preview {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .preview-img {
        border-radius: 50%;
    }
    </style>

    <br>
    <?php
    $arrAdmin = array("admin" => "admin1", "jeni" => "jeni1");
    $arrContent_manager = array("pepito" => "pepito1", "juan" => "juan1");
    $arrSystem_user = array("pedro" => "pedro1");

    $notification = "";
    $isSuccess = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_role = $_POST['drpUser'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($user_role == 'Admin' && isset($arrAdmin[$username]) && $arrAdmin[$username] == $password) {
            $notification = "Login successful as Admin.";
            $isSuccess = true; 
        } elseif ($user_role == 'Content Manager' && isset($arrContent_manager[$username]) && $arrContent_manager[$username] == $password) {
            $notification = "Login successful as Content Manager.";
            $isSuccess = true; 
        } elseif ($user_role == 'System User' && isset($arrSystem_user[$username]) && $arrSystem_user[$username] == $password) {
            $notification = "Login successful as System User.";
            $isSuccess = true;
        } else {
            $notification = "Login unsuccessful. Please check your credentials.";
            $isSuccess = false;
        }
    }
    ?>

    <?php if ($notification): ?>
        <div class="alert <?php echo $isSuccess ? 'alert-success' : 'alert-danger'; ?>" role="alert" id="notification">
            <?php echo $notification; ?>
            <button type="button" class="close" onclick="closeNotification()" aria-label="Close" style="border: none; background: none; float: right; padding: 0;">&times;</button>
        </div>
    <?php endif; ?>

    <div class="container">
        <form action="" method="post">
            <div class="preview text-center">
                <img class="preview-img" src="img/keng.jpg" alt="Icon" width="150" height="150"/>
            </div>
            
            <div class="form-group">
                <select class="form-control" name="drpUser">    
                    <option value="Admin" selected>Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System User">System User</option>    
                </select>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="username" required placeholder="Username"/>
                <span class="Error"></span>
            </div>

            <div class="form-group">    
                <input class="form-control" type="password" name="password" required placeholder="Password"/>
                <span class="Error"></span>
            </div>

            <div class="form-group">
                <input class="btn btn-primary form-control" type="submit" value="Sign In"/>
            </div>
        </form>
    </div>

    <script>
        function closeNotification() {
            var notification = document.getElementById('notification');
            if (notification) {
                notification.style.display = 'none';
            }
        }
    </script>

    <script type="text/javascript" href="js/jquery-3.7.1.js"></script>
    <script type="text/javascript" href="js/bootstrap.js"></script>
</body>
</html>