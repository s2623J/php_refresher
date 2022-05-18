<?php
    
    class MyClass {
        // private $color = 'Blue'; // Serves as a default value
        protected $color = 'Blue'; // Serves as a default value

        public function __construct($text = null)
        {
            // $this->color = "orange"; // Override the value above
            $this->color = $text ? $text : $this->color; // Conditional override value
        }

        final function doStuff() {
            echo '<h1>The car is ' . $this->color . '</h1>';
        }
    }

    $myClass = new MyClass('cyan');
    $newClass = new MyClass();
    $myClass->doStuff();
    $newClass->doStuff();


    class visibilityClass extends MyClass {
        public function __construct($text) // This will overwrite the parent constructor
        {
            parent::__construct($text); // This will restore the parent's constructor
        }
        public function display()
        {
            // This has access to the parent class protected variable
            echo '<h1>The extended class says "' . $this->color . '"</h1>'; 
        }
    }

    $newClass = new visibilityClass('Hello ;-)');
    $newClass->doStuff();
    $newClass->display();
?>
