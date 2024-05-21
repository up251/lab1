<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area of Circle Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2, h3 {
            margin: 0 0 20px;
            font-size: 20px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }
        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            background-color: #f1f1f1;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Area of Circle Calculator</h2>
        <h3>Author: First Name Last Name</h3>
        <form method="POST" action="">
            <label for="radius">Radius:</label>
            <input type="text" id="radius" name="radius" required>
            <input type="submit" name="submit" value="Calculate">
        </form>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $radius = $_POST["radius"];

            // Prepare the command to run the Python script
            $command = escapeshellcmd("python3 area.py $radius");

            // Execute the Python script and capture the output
            $output = shell_exec($command);

            // Display the result
            echo "<div class='result'><h3>Result from Python script:</h3><p>$output</p></div>";
        }
        ?>
    </div>
</body>
</html>

