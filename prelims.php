<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
            margin: 0;
        }
        .container {
            width: 50%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Center the container */
            margin: 0 auto;
        }
        h2 {
            text-align: left;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .radio-group {
            margin: 10px 0;
        }
        .radio-group label {
            display: block;
            margin-bottom: 5px;
        }
        .radio-group input {
            margin-right: 10px;
        }
        button {
            background-color: #0070ba;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #005f8c;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Payment Form</h2>
    <form action="process.php" method="POST">
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="radio-group">
            <label>Sex:</label>
            <label>
                <input type="radio" id="male" name="sex" value="Male"> Male
            </label>
            <label>
                <input type="radio" id="female" name="sex" value="Female"> Female
            </label>
        </div>
        <div>
            <label for="designation">Select Designation:</label>
            <select id="designation" name="designation" required>
                <option value="Manager (200)">Manager (200)</option>
                <option value="Supervisor (120)">Supervisor (120)</option>
                <option value="Crew (80)">Crew (80)</option>
            </select>
        </div>
        <div>
            <label for="type">Select Type:</label>
            <select id="type" name="type" required>
                <option value="Student">Student</option>
                <option value="Professional">Professional</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div>
            <button type="submit">Next</button>
        </div>
    </form>
</div>

</body>
</html>
