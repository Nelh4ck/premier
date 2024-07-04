<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    
    <form method="get">
        <div>
        <label for="Nom">Entrer votre Nom</label>
        <input type="text" name="Nom" id="">
        </div>
        <div>
        <label for="Prenom">Entrer votre Prenom</label>
        <input type="text" name="Prenom" id="">
        </div>
        <div>
            <label for="Age">Entrer votre age</label>
            <input type="text" name="Age" id="">
        </div>
        <div>
            <label for="Filiere">Entrer votre filiere</label>
            <input type="text" name="Filiere" id="">
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <?php
        
        $total=$_GET["number1"]+$_GET["number2"];
        echo "<p>Total = $total</p>";
        
    ?>
</body>
</html>