<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php
    //    $present=array('Nom','Prenom');

    //    $age=array(
    //         array('Pierre',24,'pierregiraud@fr.fr'),
    //         array('Jacques',22,'jacques@gmail.com'),
    //         array('Nelson',45,'dkuadjo@gmail.com')
    //    );
    //    for($ligne=0;$ligne<3;$ligne++){
    //     $menbre_no=$ligne+1;
    //     echo 'Membre numero' .$menbre_no. '<br/>';
    //     echo "<ul>";
    //     for($col =0; $col<3 ;$col++){
    //         echo '<li>' .$age[$ligne][$col]. '<li/>';
    //     }
    //     echo "<ul/>";
    //    } 
   echo nl2br("Bonjour
                à tous"). '<br/>';
    // $me="Bonjour tout le monde";
    // echo str_word_count($me).'<br/>';
    // echo strtolower($me).'<br/>';
    // echo strtoupper($me).'<br/>';
    // echo str_ireplace("bonjour","bonsoir",$me,$i);
    // echo "Nombre de remplacement : $i".'<br/>';

    // setlocale(LC_TIME,'fr_FR');
    // echo strftime('%A,%d %B %Y'). '<br/>';
    // echo strftime('%H:%M:%S');
    // echo "<pre>";
    // print_r(getdate(1));
    // echo "</pre>";
    define("COUCOU","Salut ici");
    echo COUCOU. '<br/>';
    $def=fopen("fichier.txt","a+");
    // while(!feof($def)){
    //    echo fgets($def);
    // }
    fwrite($def,"J'apprends");
    fclose($def);

    // $nom_cookie="utilisateur";
    // $valeur_cookie="infos de connexion";
    // setcookie($nom_cookie,$valeur_cookie);
    // echo $_COOKIE["utilisateur"];
    echo $_SERVER['PHP_SELF']. '<br/>';
    echo $_SERVER['SERVER_ADDR'] . '<br/>';
    echo $_SERVER['SERVER_NAME']. '<br/>';
    echo $_SERVER['SCRIPT_NAME']. '<br/>';
    echo $_SERVER['HTTP_HOST']. '<br/>';
   ?>
   
   
</body>
</html> 