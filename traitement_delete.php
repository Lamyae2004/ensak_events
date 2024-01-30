<?php
session_start();
include ("connexion.php");
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: form.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $id = $_POST['id'];
    $sql1="SELECT * FROM  evenements  WHERE id='$id' " ;
    $result1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)<0)
    {
    header("Location: login_error.php");
    }
    $aff=mysqli_query($conn,"DELETE FROM notifications WHERE  id_evenement='$id'");
    $resultats=mysqli_query($conn, "DELETE FROM inscriptions WHERE  id_evenement='$id'");
    $query = "DELETE FROM evenements WHERE  id='$id'";
    $resultat=mysqli_query($conn, $query);
    if (mysqli_query($conn, $query)) {
        header("Location: Annonce.php");
    } else {
        echo "Erreur: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}       
?>
