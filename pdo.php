<?php
//data source name
$dsn = 'mysql:host=localhost;dbname=business_cards;charset=utf8';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass);

    //Hiba mód : exception dobása hiba esetén
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sikeres csatlakozás\n";
    //sql_injection($pdo);
    checked_insert($pdo);
} catch (PDOException $e) {
    echo 'Kapcsolodasi hiba: ' . $e->getMessage();
    exit();
}


function xss($pdo)
{
$name = "xyz";
 $companyName = "xyz bt";
 $phone = "123123123";
 $email = "xyz@qwer.com";
 $photo =null;
 //$status =?
 $note ="hivatasos pornoszinesz";

/*$sql = "INSERT INTO cards(name, companyName,`phone`,`email`,`photo`,`note`)
        VALUES ('$name', '$companyName', '$phone', '$email', '$photo', '$note')"; */

//$pdo->exec($sql);


$sql = "INSERT INTO cards(name, companyName,`phone`,`email`,`photo`,`note`)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $companyName, $phone, $email, $photo, $note]);

/////
$sql = "SELECT * FROM cards WHERE name = 'xyz'";
$result = $pdo->query($sql);
$card = $result->fetch(PDO::FETCH_ASSOC);

echo "<br>";
print_r($card);

}
 
function prepare_statement($pdo)
{
 $name_i = "' OR '1'='1";
    $sql = "SELECT * FROM cards WHERE name = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name_i]);
    $card = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<br>";
    print_r($card);

}
//Egy függvény checked_insert , minden mezöhöz egy string és ezt sql injection ellen és xss ellen is védi és ezt adjuk hozzá az adatbázishoz

function checked_insert($pdo)
{
    $name=htmlspecialchars("ezaz");
    $companyname=htmlspecialchars("xyz");
    $phone=htmlspecialchars("06301234567");
    $email=htmlspecialchars("ezaz@citromail.hu");
    $photo=null;
    $note=htmlspecialchars("valami jegyzet");

    $sql = "INSERT INTO cards(name, companyName,`phone`,`email`,`photo`,`note`)
        VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $companyname, $phone, $email, $photo, $note]);

}

?>