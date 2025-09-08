<?php
/*

   1. if,else,elseif
   2. switch
   3.Ciklusok: for,while,do while,foreach
   4.Ternary operátor ?:
   5.tömbök:(indexelt,asszociatív,multidimenziós)
*/

//Egy számról döntsü el hogy páros vagy páratlan
   $number=7;

   if($number %2==0){
       echo "A szám páros";
   }else{
       echo "A szám páratlan";
   }

   $result = ($number %2==0) ? "A szám páros" : "A szám páratlan";
   echo "<br>$number: $result<br>";



   //ciklussal írasd ki 1-10ig a számokat
   for($i=0;$i< 10;$i++){
      $out = $i+1;
       echo "{$out} <br>";
   }


   //hozz létre egy indexelt tömböt 5gyümölccsel és irasd ki
   $fruits = array("apple","pear","peach","plum","melon");   
   //$things = ["apple","pear","peach","plum","melon"];
   for($i=0;$i< count($fruits);$i++){
       echo $fruits[$i] . "<br>";
   }

   foreach($fruits as $fruit){
       echo "$fruit <br>";
   }

   //hozd létre a user tömböt ami tartalmazza a user nevét és életkorát
   $users = 
   [
         "Kiss Pista" => 25,
         "Nagy János" => 30,
         "Kovács Béla" => 35
   ];

   foreach($users as $name => $age){
       echo "Név: $name, Életkor: $age <br>";
   }


   //vegyünk fel egy students tömböt ami tömbök tömbje legyen
   $students = 
   [
       [
           "name" => "Kiss Pista",
           "age" => 25
          
       ],
       [
           "name" => "Nagy János",
           "age" => 30
       ],
       [
           "name" => "Kovács Béla",
           "age" => 35
       ]
   ];

   foreach ($students as $student){
       echo "Név: {$student['name']}, Életkor: {$student['age']} <br>";
   };



   // users tömb , ami lehetővé teszi az autentikációt
   $users = 
   [
       "admin" => "admin123",
       "user" => "user123", 
         "guest" => "guest123"
   ];
   foreach($users as $username => $password){
       echo "Felhasználónév: $username, Jelszó: $password <br>";
   }  
?>