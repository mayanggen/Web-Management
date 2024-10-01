<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Evaluator</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: #d8e4d4;
            display: flex;
            justify-content: center;
            margin top: 40px;
            padding: 300px;
        }
        .container {
            background-color: #66cccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        h2 {
            margin: 0 0 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 16px;
        }
        .result p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Grade Evaluator</h2>
        <form action="mybackend.php" method="POST">
            <label for="name">Student Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="grade">Grade (0-100):</label>
            <input type="number" id="grade" name="grade" min="0" max="100" required>
            
            <input type="submit" name="submit" value="Evaluate">
        </form>
    </div>
</body>
</html>
