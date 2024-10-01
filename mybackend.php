<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: #d8e4d4;
            display: flex;
            justify-content: center;
            margin top: 40px;
            background-image: url("calculator.jpg");
            background-repeat: no-repeat;
            background-size: cover;

        }
         .result {
            background-color: #C0EBA6;
            padding: 180px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 200px;

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
            margin-top: 110px;
            font-size: 16px;
        }
        .result p {
            margin: 0;
            font-size: 50px;
        }
    </style>
<body>
<?php

if  ($_POST['submit']) {
$name = ($_POST['name']);
$grade = ($_POST['grade']);
            
if ($grade >= 90) {
$letterGrade = "A";
$feedback = "Excellent work!";
} elseif ($grade >= 80) {
$letterGrade = "B";
$feedback = "Great job!";
} elseif ($grade >= 70) {
$letterGrade = "C";
$feedback = "Good effort!";
} elseif ($grade >= 60) {
$letterGrade = "D";
$feedback = "Mag Drop kana bhe whahaahah.";
} else {
$letterGrade = "F";
$feedback = "Failed. Try harder next time.";
}

            
echo "<div class='result'>";
echo "<p>Hello, <strong>$name</strong>!</p><br>";
echo "<p>Your grade is <strong>$letterGrade</strong>.</p><br>";
echo "<strong>$feedback</strong>";
echo "</div>";
}
?>
</body>
</html>
