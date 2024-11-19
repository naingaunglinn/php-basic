<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores</title>
</head>
<body>
    <?php
        class Student{
            public $name;
            public $major;
            public $gpa;

            function __construct($name, $major, $gpa)
            {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }
            
            function isQualify(){
                if($this->gpa >= 3.5){
                    return "It's qualify";
                } else {
                    return "It's not qualify";
                }
            }
        }      
            
        $student1 = new Student('Naing Aung Linn', 'English', 9.5);
        $studnet2 = new Student('Yoon Me Me Aung','Japanese', 10.5);

        echo $student1->isQualify();
        echo $student2->isQualify();
    ?>
</body>
</html>