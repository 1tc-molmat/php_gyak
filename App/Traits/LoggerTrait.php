<?php
namespace App\Traits;

trait LoggerTrait {
    public function log($message = "Sikerült!") {
        echo "Log : $message\n";
    }
}

?>