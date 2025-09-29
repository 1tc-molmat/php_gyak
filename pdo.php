<?php

/*1. Mysql
CRUD: Create, Read, Update, Delete
tfh:van egy cards táblám amiben van name,email,id mező
backtick `, (alt gr + 7)
1.MySQl
-READ: SELECT name,email FROM cards id=10;
-CREATE: INSERT INTO  cards (name,`email`) VALUES ('Tibi','tibi@mzsrk.hu');
-UPDATE: UPDATE cards SET email='tibi2025@mzsrk.hu' WHERE id=10;
-DELETE: DELETE FROM cards WHERE id=10;


CREATE DATABASE business_cards;
USE business_cards;


Create TABLE cards(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) DEFAULT NULL
    companyname VARCHAR(100) DEFAULT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    photo VARCHAR(255) DEFAULT NULL,
    status VARCHAR (20) DEFAULT NULL,
    note TEXT NULL,
) ENGINE =InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;
*/


//DATA SOURCE NAME
$dsn='mysql:host=localhost;dbname=business_cards;charset=utf8';
$user='root';
$password='';
try{
    $pdo=new PDO($dsn,$user,$password);
    $pdo->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    echo"Sikerees a kapcsolódás";
    $name = "Mate";
    $companyname = "Mate Kft.";
    $phone = "+36 30 123 4567";
    $email = "teszt@teszt.hu";
    $photo = null;
    //$status =?
    $note = "Webfejlesztő";
    $sql="INSERT INTO cards (`name`, `companyname`, `phone`,`email`, `photo`, `note`) VALUES('$name', '$companyname', '$phone', '$email', '$photo', '$note')";
    //$pdo->exec($sql);

    //READ
    $sql="SELECT * FROM cards WHERE id=11";
    $result =$pdo->query($sql);
    $card=$result->fetch(PDO::FETCH_ASSOC);
    print_r($card);

}
catch(PDOException $ex)
{
    echo "Kapcsolódási hiba: ".$ex->getMessage();
    exit();
}

?>