<?php

namespace rekapLibrary;

require_once __DIR__ . "/../vendor/autoload.php";

class Student {
    public function __construct(
        private ?string $name
    ){}

    public function sayStudent(string $anotherName)
    {
        echo "Hello $anotherName, My name is {$this->name}";
    }
}

?>