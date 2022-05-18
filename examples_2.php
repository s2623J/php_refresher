<?php

    // require_once('./lib_1.php');
    // require_once('./lib_2.php'); // This can be replaced by the code below
    spl_autoload_register('autoload'); // Tells PHP to fetch namespace from function

    function autoload($className) // Will load ALL classes in the "classes" folder
    {
        // Converts/parses 'App\Lib1\MyClass_1' to 'classes/MyClass_1.php'
        // Only works if there is only ONE class per file, and filename matches classname
        $partArr = explode('\\', $className);
        $name = array_pop($partArr);
        require_once(sprintf('classes/%s.php', $name)); // $name replaces "%s" wildcard
    }


    use App\Lib1\MyClass_1 as Bobby;  // Required to access namespaces
    use App\Lib2\MyClass_2 as Sue;  // Required to access namespaces

    $ns_1 = new Bobby('Hello from Class 1!');
    $ns_1->doStuff();

    $ns_2 = new Sue('Hello from Class 2!');
    $ns_2->doStuff();

////////////////////////////////////////////////////////////////////////////////////////////
