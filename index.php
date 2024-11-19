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
        }

        $book1 = new Book;
        $book1->title = 'Harry Potter';
        $book1->author = 'J.K Rolling';
        $book1->pages = 400;

        $book2 = new Book;
        $book2->title = 'Gone with the wind';
        $book2->author = 'Magret Mechille';
        $book2->pages = 600;

        echo $book2->pages;
    ?>    
</body>
</html>