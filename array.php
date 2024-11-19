<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <form action="array.php" method="post">
        <input type="text" name="student" id="">
        <input type="submit">
    </form>
    <?php
        $info = ['cars', 'bikes', 'planes'];
        // var_dump($info);

        $array = ['naingaunglinn' => 'web developer', 'garywish' => 'hacker'];
        echo $array[$_POST['student']];
    ?>

</body>
</html>