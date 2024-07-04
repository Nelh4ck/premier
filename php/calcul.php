<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tableau formulaire</title>
</head>
<style type="text/css">
	body{
		display:flex;
		justify-content:space-around;
		font-family: sans-serif;
	}
	form{
		margin-top:150px;
		width:300px;
		height:	200px;
		background:orange;
		padding-left:20px;
		padding-right:20px;
		padding-top:30px;
		padding-bottom:10px;
		border-radius:5px;
	}
	.mb{
		margin-bottom:30px;
	}
	input[type=text],input[type=password]{
		outline:none;
		width:100%;
		height:20px;
		border:2px solid transparent;
		border-radius:5px;
	}
	button{
		padding:10px;
		background:white;
		color: orange;
		font-weight: bold;
		border-radius:5px;
		outline: none;
		border: none;
		cursor: pointer;
	}
	.data{
		color:black;
		font-size:18px;
	}

</style>
<?php
if (isset($_GET['btn'])) {
	$id=$_GET['id'];
	$pass=$_GET['pass'];
	if(!empty($id) AND !empty($pass)){
		$tableau=array('1' =>$id,'2'=>$pass );
	}
}
?>
<body>
	<div class="data">
		<h3>Voci les donnée de l'utilisateur</h3>
		<?php
		if (isset($tableau)) {
			echo "Identifiant".' : '.$tableau['1'].'<br>';
			echo "Mot de passe".' : '.$tableau['2'].'<br>';
		}
		?>
	</div>
	<form method="get" action="#">
		<div class="mb">
			<label>Entrer votre Identifiant</label>
			<br>
			<input type="text" name="id">
		</div>
		<div class="mb">
			<label>Mot de passe</label>
			<input type="text" name="pass">
		</div>
		<button name="btn">Valider</button>
	</form>


</body>
</html>