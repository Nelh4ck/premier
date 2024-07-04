<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nice Restau</title>
    <style>
        .title{
            text-align:center;
            font-family:Poppins;
        }
        
        body{
            background-image:url('restau.jpg');
            background-size:cover;
            background-position:center no-repeat;
        }
        .contenu{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        form{
            width:300px;
        }
        label{
            display:block;
            margin-bottom:5px;
        }
        input{
            width:100%;
            padding:5px;
            margin-bottom:10px;
        }
        button{
            width:100%;
            padding:10px;
            background-color:#3498db;
            color:white;
            border:none; 
        }
    </style>
</head>
<body>
    <div class="title"><h1>BIENVENU A NICE RESTAU</h1></div>
    <div class="contenu">
    <form  action="premier.php" method="get">
        <label for="name">Entrer votre nom</label>
        <input type="text" name="name" id="name">
        
        <label for="surname">Entrer votre prenom</label>
        <input type="text" name="surname" id="surname">

        <label for="ancien">Entrer votre ancienneté</label>
        <input type="number" name="ancien" id="ancien">

        <label for="age">Entrer votre age</label>
        <input type="number" name="age" id="age">

        <button type="submit">Soumettre</button>
        
    </form>
    </div>
    
</body>
</html>