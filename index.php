<?php
namespace App;

trait MyService {
    use GreetingTrait, LoggerTrait;

    public function serve($name = "Guest") {
        $this->log("$name bejelentkezett");
        return $this->greet($name);
    }
}



?>