<?php
//Egy űrlap amibe egy darab név mezőzel és ott van mögött egy submit gomb 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, " . $name . "!";
}

?>
