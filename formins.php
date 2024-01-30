
<?php 
session_start();
include('connexion.php');

if(isset($_POST['Valider'])){
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
    $code_evenement=$_POST['code_evenement'];
	$datee = new DateTime();
	$date = $datee->format('Y-m-d');
	
$requette="INSERT INTO participants (nom,email,telephone,prenom) VALUES('$nom','$email','$telephone','$prenom') ";
$resultat=mysqli_query($conn,$requette);
$part=mysqli_query($conn,"SELECT * FROM participants WHERE  nom ='$nom' AND prenom = '$prenom' ");
$data=mysqli_fetch_assoc($part);
$parti=$data['id_participant'];

$query=	"INSERT INTO `inscriptions`( `id_participant`,`id_evenement`,`date_inscription`) VALUES ('$parti','$code_evenement','$date')";
$resultat=mysqli_query($conn,$query);
header("Location: thankyou.php");
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="formins.css">
	<title></title>
</head>
<body>
	<div class="box">
		<span class="borderLine"></span>
		<form action="formins.php" method="post" id="monform" enctype="multipart/form-data">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="text" name="nom" required="required">
				<span>Nom</span>
				<i></i>
			</div>
        <div class="inputBox">
				<input type="text" name="prenom" required="required">
				<span>Prénom</span>
				<i></i>
			</div>

		 <div class="inputBox">
				<input type="text" name="email" required="required">
				<span>E-mail</span>
				<i></i>
			</div>
		 <div class="inputBox">
				<input type="tel" name="telephone" required="required">
				<span>Numéro de téléphone</span>
				<i></i>
			</div>
		 <div class="inputBox">
				<input type="text" name="code_evenement" required="required">
				<span>Code d'évenement</span>
				<i></i>
			</div>

		<input type="submit" name="Valider"   value="Valider">

     </form>
	</div>

</body>
</html>