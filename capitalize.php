<?php
 //Készits egy fgv-t ami átvesz egy string tömböt és visszaadja nagy kezdőbetűvel


 function capitalizeAll( array $names) : array {
            $temmpAray=[];
    foreach($names as $name ){
        $temmpAray[] = mb_strtoupper($name);
    }return $temmpAray;
}
     $names = ["Pista","Jóska","Éva"];
    $capitalizedNames=capitalizeAll($names);

    print_r($capitalizedNames);
?>