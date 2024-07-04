<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        body{
            background-color:darkred;
           
            justify-content:center;
            font-family:Poppins;
        }
        form{
        
		background: dark;
		padding-top:100px;
		padding-bottom:100px;
		padding-left:50px;
		padding-right: 100px;
		margin-top:50px;
        
	} 
    .mmm{
        margin-bottom:20px;
        
    }
    #meme{
        border:2px solid black;
         padding:4px;
         box-shadow: 3px 11px 5px black ;
    }
    </style>
</head>
<body>
    
    <form method="get">
        <div class="mmm">
        <label for="Nom">Entrer votre Nom</label>
        <input type="text" name="Nom" id="meme">
        </div>
        <div  class="mmm">
        <label for="Prenom">Entrer votre Prenom</label>
        <input type="text" name="Prenom" id="meme">
        </div>
        <div class="mmm">
            <label for="Age">Entrer votre age</label>
            <input type="number" name="Age" id="meme">
        </div>
        <div class="mmm">
            <label for="Filiere">Entrer votre filiere</label>
            <input type="text" name="Filiere" id="meme">
        </div class="mmm">
        <button type="submit">Envoyer</button>
    </form>
    <?php
        
        $Name=$_GET["Nom"];
        $Surname=$_GET["Prenom"];
        $Old=$_GET["Age"];
        $Course=$_GET["Filiere"];
        $tableau=array('1' =>$Name,'2'=>$Surname,'3'=>$Old,'4'=>$Course );
        echo "<p>Infos du profil</p>";
        if (isset($tableau)) {
			echo "Nom d'users".' : '.$tableau['1'].'<br>';
			echo "Prenom d'users".' : '.$tableau['2'].'<br>';
            echo "Old users".' : '.$tableau['3'].'<br>';
            echo "Course users".' : '.$tableau['4'].'<br>';
		}
    ?>
</body>
</html>