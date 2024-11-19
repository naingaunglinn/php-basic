<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        function sayHello($name){
            echo "hello world $name";
        }

        sayHello('naingaunglinn');

        function cube($num){
            return $num * $num * $num;
        }

        $cubic = cube(6);
        echo $cubic;  
    ?>
</body>
</html>