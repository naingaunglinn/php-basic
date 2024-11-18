<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        <input type="number" name="number1" id="">
        <br>
        <input type="text" name="op" id=""><br/>
        <input type="number" name="number2" id="">
        <input type="submit">
    </form>
    Answer: <?php
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $op = $_POST['op'];
        
        if($op == '+'){
            echo $num1 + $num2;
        }elseif($op == '-'){
            echo $num1 - $num2;
        }elseif($op == '*'){
            echo $num1 * $num2;
        }elseif($op == '/'){
            echo $num1 / $num2;
        }else{
            echo "Invalid Operator!";
        }

    ?>
</body>
</html>