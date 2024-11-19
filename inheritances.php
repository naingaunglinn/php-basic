<?php
    class Chef {
        function makeChicken(){
            echo "the chief make chicken <br/>";
        }

        function makeSalad(){
            echo "the chief make salad <br/>";
        }

        function makeSpecialDish(){
            echo "the chief make bbq ribs <br/>";
        }
    }

    class ItalianChef extends Chef{
        function makePasta(){
            echo "the chef make pasta";
        }

        function makeSpecialDish(){
            echo "the chef make cheese pizza";
        }
    }

    $chief = new Chef();
    $chief->makeSpecialDish();

    $italianChief = new ItalianChef();
    $italianChief->makeSpecialDish();
?>