<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="number1" id="">
        <br>
        <input type="number" name="number2" id="">
        <input type="submit">
    </form>
    Answer: <?php
        echo $_GET["number1"] + $_GET["number2"];
    ?>
</body>
</html>