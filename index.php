<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book {
            public $title;
            public $author;
            public $pages;

            function __construct($title, $author, $pages)
            {
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }
        }

        $book1 = new Book('Harry Potter','J.K Rolling', 400);
        $book2 = new Book('Gone with the wind','Magret Mechille', 600);

        echo $book2->author;
    ?>    
</body>
</html>