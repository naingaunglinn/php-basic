<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">
    </form> -->
    <form action="index.php" method="post">
        <input type="checkbox" name="fruits[]" id="" value="oranges">oranges<br/>
        <input type="checkbox" name="fruits[]" id="" value="bananas">bananas<br/>
        <input type="checkbox" name="fruits[]" id="" value="apples">apples<br/>
        <input type="checkbox" name="fruits[]" id="" value="coconuts">coconuts<br/>
        <input type="submit">
    </form>
    <br>
    <?php
        $fruits = $_POST['fruits'];
        var_dump($fruits);
    ?>
    
</body>
</html>