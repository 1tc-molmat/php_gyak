<?php

namespace App;

trait GreetingTrait {
    public function greet($name = "Guest") {
        return "Hello, $name!";
    }
}


?>