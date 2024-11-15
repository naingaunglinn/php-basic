<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET['name'];?>
    <?php
        echo 'Hello World!';
    ?>
    <?php
        $name = 'Yoon Me Me Aung';
        echo "Hello $name.";
    ?>
    <?php
        $phrase = "To be or not to be";
        $age = 10;
        $gpa = 40.54;
        $isLove = true;
        null;
    ?>
    <?php
        echo "NAL ACADEMY "
    ?>
</body>
</html>