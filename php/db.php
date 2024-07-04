<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion a la base de données</title>
</head>
<body>
    <?php 
        $serveur="localhost";       
        $login="root";
        $pass="";

        try{
        $connexion=new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $codesql="CREATE TABLE Visiteuur(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Nom VARCHAR(50),
            Prenom VARCHAR(50),
            EMAIL VARCHAR(70)
        )";
        $connexion->exec($codesql);
        echo 'table créée avec succès';
        }
        catch(PDOException $e){
            echo 'Connexion à la base de donnée echoué'. $e->getMessage();
        }
    ?>
</body>
</html>