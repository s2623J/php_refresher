<?php
    
    class MyClass {
        public $color = 'Blue';
        public function doStuff() {
            echo 'The car is ' . $this->color;
        }
    }

    $myClass = new MyClass;
    $myClass->doStuff();
?>

<h1>{$myClass->doStuff()}</h1>