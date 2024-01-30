<?php
session_start();
include ("connexion.php");
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: Annonce.php");
    exit;
}
$code=$_SESSION['eve'];
$urg="SELECT * FROM evenements WHERE id='$code'";
$one=mysqli_query($conn,$urg);
$fini=mysqli_fetch_assoc($one);
$ancienDate=$fin['date'];
$ancienLieu=$fin['lieu'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $motivation= htmlspecialchars($_POST['motivation']);
    $description=htmlspecialchars($_POST['description']);
    $categorie = $_POST['categorie'];
    $date =$_POST['date'];
	$lieu=$_POST['lieu'];
	
    if(isset($_FILES['affiche']) and $_FILES['affiche']['error']==0)
	{
		$dossier= 'photo/';
		$temp_name=$_FILES['affiche']['tmp_name'];
		if(!is_uploaded_file($temp_name))
		{
		exit("le fichier est untrouvable");
		}
		if ($_FILES['affiche']['size'] >= 1000000){
			exit("Erreur, le fichier est volumineux");
		}
		$infosfichier = pathinfo($_FILES['affiche']['name']);
		$extension_upload = $infosfichier['extension'];
		
		$extension_upload = strtolower($extension_upload);
		$extensions_autorisees = array('png','jpeg','jpg');
		if (!in_array($extension_upload, $extensions_autorisees))
		{
		exit("Erreur, Veuillez inserer une image svp (extensions autorisées: png)");
		}
		$nom_photo=$code.".".$extension_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
		exit("Problem dans le telechargement de l'image, Ressayez");
		}
		$affiche=$nom_photo;
	}
	else{
		$affiche=$fini['affiche'];
	}
	
    $org=$_SESSION['id_organisateur'];
    // Création de la requête SQL pour insérer les données

    $query = "UPDATE evenements SET  date='$date',lieu='$lieu',motivation='$motivation',description='$description',affiche='$affiche' WHERE id='$code'" ;


    if (mysqli_query($conn, $query)) {
		$message="Des modifications sont effectuées veuillez consulter la page des événements ";
		$datee = new DateTime();
        $dateFormattee = $datee->format('Y-m-d');
        $notif=mysqli_query($conn,"INSERT INTO notifications (id_evenement,date_envoi,message) VALUES('$code','$dateFormattee','$message')");
        header("Location: Annonce.php");

    } else {
        echo "Erreur: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>