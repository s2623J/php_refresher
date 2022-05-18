<?php

    interface myInterface {
        // Enforce a MINIMUM of specified properties and methods
        public function doThing();
        public function doOtherThing();
    }

    class MyClass implements myInterface
    {
        public function doThing()
        {
            # code...
        }

        public function doOtherThing()
        {
            # code...
        }

        public function doYetAnotherThing()
        {
            # code...
        }
    }
    