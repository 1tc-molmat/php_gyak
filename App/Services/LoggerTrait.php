<?php
namespace App;

trait LoggerTrait {
    public function log($message = "Vendég bejelentkezett") {
        echo "Log : $message";
    }
}

?>