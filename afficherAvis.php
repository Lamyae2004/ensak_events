<?php
    session_start();
    include('connexion.php');
    $sql2="SELECT id_participant,commentaire FROM avis LIMIT 10 ";
    $avis=mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_assoc($avis)){
        $sql3="SELECT nom,prenom FROM participants WHERE id_participant='".$row['id_participant']."'";
        $result3=mysqli_query($conn,$sql3);
        $user=mysqli_fetch_assoc($result3);
        echo $user['nom']." ". $user['prenom'];
        echo "</br>";
        echo $row['commentaire'];
        echo "</div><br>";
    }
    echo "<a href='avi.php'>ajouter un commentaire </a>";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>