<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat restau</title>
    <style>
        .title{
            text-align:center;
            font-family:Poppins;
        }
        .pe{
            border:2px solid darkblue;
            padding:8px;
            text-align:left;
            color:darkblue;
        }
        .pf{
            border:2px solid darkgreen;
            padding:8px;
            text-align:left;
            color:darkgreen;
        }
        .pg{
            border:2px solid dark;
            padding:8px;
            text-align:left;
            color:dark;  
        }
        body{
            background-image:url('restau.jpg');
            background-size:cover;
            background-position:center no-repeat;
        }
        
        
    </style>
</head>
<body>
<?php
        $nom=$_GET["name"];
        $prenom=$_GET["surname"];
        $anciennete=$_GET["ancien"];
        $age=$_GET["age"];
       
        if($anciennete>=10 AND $age<=20){
            echo'
            <div class="pe"><h2>La categorie du menu attribue est:</h2>
            <ol>
            <li><strong>Chocolat</strong></li>
            <li><strong>Biscuit</strong></li>
            <li><strong>Popcorns</strong></li>
            <li><strong>Yaourts</strong></li>
            </ol>
            </div>';
        }
        if($anciennete<=15 AND $age<28){
            echo'
            <div class="pf"><h2>La categorie du menu attribue est:</h2>
            <ol>
            <li><strong>Riz au gras</strong></li>
            <li><strong>Frites</strong></li>
            <li><strong>Couscous</strong></li>
            </ol>
            </div>';
        }
        if($anciennete<15 AND $age<=40){
            echo'
            <div class="pg"><h2>La categorie du menu attribue est:</h2>
            <ol>
            <li><strong>Haricot</strong></li>
            <li><strong>Pâte de riz</strong></li>
            <li><strong>Spaghetti</strong></li>
            </ol>
            </div>';
        }
        $serveur="localhost";
        $login="root";
        $pass="";
        // try{
        // $connexion=new PDO("mysql:host=$serveur",$login,$pass);
        // $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        // $codesql="CREATE DATABASE restau";
        // $connexion->exec($codesql);
        // echo"base de donnée cree";}
        try{
            $connexion=new PDO("mysql:host=$serveur;dbname=restau",$login,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            // $codesql="CREATE TABLE client(
            //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            //     nom VARCHAR(50),
            //     prenom VARCHAR(50),
            //     anciennete INT UNSIGNED,
            //     age INT UNSIGNED
            //     )";
            // $connexion->exec($codesql);
            $nom=$_GET["name"];
            $prenom=$_GET["surname"];
            $anciennete=$_GET["ancien"];
            $age=$_GET["age"];
            $requete=$connexion->prepare(
                "INSERT INTO client(nom,prenom,anciennete,age)
                VALUES(:nom,:prenom,:anciennete,:age)");

            $requete->bindParam(':nom',$nom);
            $requete->bindParam(':prenom',$prenom);
            $requete->bindParam(':anciennete',$anciennete);
            $requete->bindParam(':age',$age);
            // $requete->execute();
            
            $requete->execute();
            //affichage des données des utilisateurs
            $donnees=$connexion->prepare("SELECT id FROM client");
            $donnees->execute();
            $resultat=$donnees->fetchall();
           
            echo"<div>DONNES DE L'UTILISATEUR</div>";
            echo"<pre>";
            print_r($resultat);
            echo"</pre>";
            }

        catch(PDOException $e){
            echo'Connexion a la base de donnee echoue' .$e->getMessage();
        }
        ?>
</body>
</html>