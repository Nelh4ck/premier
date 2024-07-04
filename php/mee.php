<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple PHP</title>
</head>
<body>
    <h1>Message en PHP</h1>
    <?php
    $varA="Coding team";
    $no1 = 15;
    $no2=25;
    $add=$no1+$no2;
    echo $add;
    $varA=str_replace('Coding','pogam',$varA);
    //var_dump (str_contains($varA,'une'));
    // echo "<pre>"
    $tableau=["bonjour" ,"je suis ..."];
    var_dump($tableau);
     $valeur=array_push($tableau,"A la fin au utilise pop");
    echo $valeur;
    // echo "</pre>"
        
        
        
    ?>
</body>
</html>
