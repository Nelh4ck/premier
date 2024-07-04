<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target</title>
</head>
<body>
    <?php
    $Name=$Surname=$Old=$Course="";
        function securite($secu){
            $secu= trim($secu);
            // $secu=htmlspecialchars($secu);
            $secu=strip_tags($secu);
            $secu=stripslashes($secu);
            return $secu;
        }
        $Name=securite($_POST["Nom"]);
        $Surname=securite($_POST["Prenom"]);
        $Old=securite($_POST["Age"]);
        $Course=securite($_POST["Filiere"]);
        // $b="Bienvenue $Name $Surname etudiant en $Course";
        echo $Name;
        echo $Surname;
        echo $Course;
        // if($Name=="Nelson" AND $Surname=="KUADJO" AND $Old==45 AND $Course=="IIM"){
        //     $b="Bienvenue $Name $Surname etudiant en $Course";
        //     echo '<p style="background-color:green;">'. $b .'<p>';
        // }
        // else{
        //     $erreur="Desolé je ne vous recconnais pas";
        //     echo '<p style="background-color:red;">'. $erreur .'<p>';
        // }
        
    ?>
</body>
</html>