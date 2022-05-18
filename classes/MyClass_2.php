<?php

namespace App\Lib2;

    class MyClass_2 {
        // private $color = 'Blue'; // Serves as a default value
        protected $color = 'Blue'; // Serves as a default value

        public function __construct($text = null)
        {
            // $this->color = "orange"; // Override the value above
            $this->color = $text ? $text : $this->color; // Conditional override value
        }

        final function doStuff() {
            echo '<h1>From Lib_2: ' . $this->color . '</h1>';
        }
    }


