<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php orienté objet</title>
</head>
<body>
    <?php
    // include_once('classvisiteur.php');
    // $visiteur1=new Visiteur;
    // $visiteur1->set_prenom('Pierre');
    // echo 'Bonjour'. $visiteur1->get_prenom(). '<br/>';
    function division($a,$b){
        if($a==0 OR $b==0){
            throw new Exception("Division de 0 ou par 0 impossible");
        }
        return $a/$b;
    }
    try{
        division(22,0 );
    }
    catch (Exception $e){
        echo 'Message d_erreur'. $e->getMessage();
    }
    ?>
</body>
</html>