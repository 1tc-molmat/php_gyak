<?php

namespace App\Services;
use App\Traits\LoggerTrait;
use App\Traits\GreetingTrait;

class MyService {
    use LoggerTrait, GreetingTrait;

    public function run($name="User") {
        $this->log("Service elindult!");
        echo $this->greet("mate");
    }
}
 

?>