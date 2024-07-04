<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dbs</title>
</head>
<body>
<?php 
    $serveur="localhost";
    $login="root";
    $pass="";
    $nom="eviter";
   $prenom="attaque_sql";
   $email="attaquesql@edhec.com";
 try{
    $connexion=new PDO("mysql:host=$serveur;dbname=tes",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    // $codesql="CREATE TABLE VISIT(
    //     ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     NOM VARCHAR(50),
    //     PRENOM VARCHAR(50),
    //     ADRESSMAIL VARCHAR(70)
    //     )";
    $requete=$connexion->prepare(
                "INSERT INTO VISIT(NOM,PRENOM,ADRESSMAIL)
                VALUES(:NOM,:PRENOM,:ADRESSMAIL)");

   $requete->bindParam(':NOM',$nom);
   $requete->bindParam(':PRENOM',$prenom);
   $requete->bindParam(':ADRESSMAIL',$email);
//     $requete=$connexion->prepare("
//                 SELECT * FROM VISIT");

//    $requete->execute();
//    $resultat=$requete->fetchall();
//    echo'<pre>';
//    print_r($resultat);
//    echo'</pre>';
    $requete="ALTER TABLE VISIT ADD AGE VARCHAR(50)";
    $connexion->exec($requete);
   echo"donnée de VISIT entrée";
  }

 catch(PDOException $e){
    echo'connexion a la base de donnée echouée'. $e->getMessage();
 }

?>
</body>
</html>