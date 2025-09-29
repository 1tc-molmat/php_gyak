<?php 
if(isset($_POST["submit"]))
{try{
    $uploadFolder="uploads/";
    $fileName=basename($_FILES["kep"]["name"]);
    $tempFileName=$_FILES["kep"]["tmp_name"];
    $fileSize=$_FILES["kep"]["size"];
    $error=$_FILES["kep"]["error"];
    $fileType=strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
    $targetFile=$uploadFolder.$fileName;
    //Ellenörzések

    //1. Hiba a feltöltött fájlban
    if($error)
    {
        throw new Exception("Hiba történt a fájl feltöltése során! (hiba kód: $error)");
    }
    //2. A feltöltési mappa létezése vagy kiírása
    if(!is_dir($uploadFolder) || !is_writable($uploadFolder))
    {
        throw new Exception("A feltöltési mappa nem létezik vagy nem írható!");
    }
    //3. már létezik ilyen fájl
    if(file_exists($targetFile))
    {
        throw new Exception("Már létezik ilyen nevű fájl a szerveren!");
    }   
    //4. fájl méret ellenőrzése (max 5MB)
    if($fileSize>5000000)
    {
        throw new Exception("A fájl mérete nem lehet nagyobb 5MB-nál!");
    }
    //5. fájl típus ellenőrzése
    if(in_array($fileType,["jpg","jpeg","png","gif"]))
    {
        throw new Exception("Csak JPG, JPEG, PNG és GIF fájlok tölthetők fel!");
    }
    //Fájl áthelyezése a célmappába 
    if(move_uploaded_file($tempFileName,$targetFile))
    {
        echo "A fájl sikeresen feltöltve!";
    }else{
        throw new Exception("A fájl feltöltése nem sikerült!");
    }




}catch(Exception $ex)
{
    echo "Hiba: {$ex->getMessage()}";
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fileupload</title>
</head>
<body>
    <h2>Fájl feltöltése</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="kép">Válassz egy képet a feltöltéshez</label>
        <input type="file" name="kep" id="kep">
        <button type="submit" name="submit">Feltöltés</button>
    </form>


</body>
</html>