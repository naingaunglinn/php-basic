<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'header.html'; ?>
    <!-- <form action="index.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">
    </form> -->
    <!-- <form action="index.php" method="post">
        <input type="checkbox" name="fruits[]" id="" value="oranges">oranges<br/>
        <input type="checkbox" name="fruits[]" id="" value="bananas">bananas<br/>
        <input type="checkbox" name="fruits[]" id="" value="apples">apples<br/>
        <input type="checkbox" name="fruits[]" id="" value="coconuts">coconuts<br/>
        <input type="submit">
    </form>
    <br> -->

    <form action="index.php" method="post">
        <input type="number" name="num" id="">
        <input type="submit">
    </form>
    <?php
        // $fruits = $_POST['fruits'];
        // var_dump($fruits);
    
        // $isMale = true;
        // if($isMale){
        //     echo "He's male";
        // } else {
        //     echo "He isn't male";
        // }
        
        // function getMax($num1, $num2, $num3){
        //     if($num1 >= $num2 && $num1 >= $num3){
        //         return $num1;
        //     } elseif($num2 >= $num2 && $num2 >= $num3){
        //         return $num2;
        //     } else {
        //         return $num3;
        //     }
        // }

        // echo getMax(3000, 100, 50);

        // $grade = $_POST['grade'];

        // switch($grade){
        //     case "A+":
        //         echo "You are great.";
        //         break;
        //     case "B":
        //         echo "You are good.";
        //         break;
        //     case "C":
        //         echo "You are fine.";
        //         break;
        //     case "D":
        //         echo "You need to study.";
        //         break;
        //     case "E":
        //         echo "I'm sorry you didn't make it.";
        //         break;
        // }

        // $index = 6;
        // do{            
        //     echo $index;
        //     $index++;
        // }while($index <= 5)
        $userInput = $_POST['num'];
        $luckNumbers = [1,20,35,89,60,2,43,11];
        for ($i=0; $i < count($luckNumbers); $i++) { 
            if($userInput == $luckNumbers[$i]){
                echo "$luckNumbers[$i] is lucky number <br/>";
            }
        }
        include 'useful-tools.php';

        echo mileInFeet(3);

        include 'footer.html';
    ?>
    
</body>
</html>