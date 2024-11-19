<?php
    class Movie {
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->rating = $rating;
        }

        function setRating($rating){
            $this->rating = $rating;
        }

        function getRating(){
            return $this->rating;
        }
    }

    $avengers = new Movie ('Avengers', "PG-13");

    echo $avengers->getRating();

?>