<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Lib</title>
</head>
<body>
    <form action="math-lib.php" method="get">
        Color: <input type="text" name="color" id="">
        <br/>
        Plural Noun: <input type="text" name="pluralNoun" id="">
        <br/>
        Celebrity: <input type="text" name="celebrity" id="">
        <br/>
        <input type="submit">
    </form>
    <br/><br/>
    
    <?php
        $color = $_GET['color'];
        $pluralNoun = $_GET['pluralNoun'];
        $celebrity = $_GET['celebrity'];

        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity  <br>";
    ?>
</body>
</html>