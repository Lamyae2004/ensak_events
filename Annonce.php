<?php
session_start();
include('connexion.php');
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
    header("Location:form.php");
    exit; 
}
$org=$_SESSION['id_organisateur'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $titre=htmlspecialchars($_POST['titre']);
    $id=$_POST['id'];
    $date=$_POST['date'];
    $lieu=htmlspecialchars($_POST['lieu']);
    $motivation=htmlspecialchars($_POST['motivation']);
    $categorie=htmlspecialchars($_POST['categorie']);
    $description=htmlspecialchars($_POST['description']);

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
        $extension_upload = strtolower($extension_upload);
        $nom_photo=$id.".".$extension_upload;
        if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
        exit("Problem dans le telechargement de l'image, Ressayez");
        }
        $affiche=$nom_photo;
    }
  else{
    $affiche="inconnue.png";
  }

  
    
    $dod=$id;
    $query="INSERT INTO evenements (id,titre,motivation,description,date,lieu,categorie,affiche,id_organisateur) VALUES('$id','$titre','$motivation','$description','$date','$lieu','$categorie','$affiche','$org')";
    $resultat=mysqli_query($conn,$query);
    $message="un nouveau évenement est annoncé veuillez le voir !!";
    $date = new DateTime();
    $dateFormattee = $date->format('Y-m-d');
    $notif=mysqli_query($conn,"INSERT INTO notifications (id_evenement,date_envoi,message) VALUES ('$dod','$dateFormattee','$message')");
                                                                                                                                                                                                               
  }

//echo"<h1>Bienvenue"." ".$_SESSION['nom']." ".$_SESSION['prenom']." "."!<h1>";//
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="decore.css" rel="stylesheet" type="text/css">
    <link  rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style type="text/css">
        </style>
    <title>annonce</title>
    
</head>
<body>
       <header>
    <a href="#" class="logo">ENSAK-EVENTS</a>
    <div class="group">
    <ul class="navigation">
  
    <li><a href="Annonce.php">Annoncer</a></li>
    <li><a href="modifier.html">Modifier</a></li>
    <li><a href="constructiondurapp.php">Rapporter</a></li>
    <li><a href="delete.php">Supprimer</a></li>
    <li><a href="participation.php">Participants</a></li>
    <li><a href="deconnexion.php">Déconnexion</a></li>
    </ul>
    <div class="search">
     <span class="icon">
     <ion-icon name="search-outline" class="searchBtn"></ion-icon>
     <ion-icon name="close-outline" class="closeBtn"></ion-icon>

     </span>
    </div>
    <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
    </div>
    <div class="searchBox">
    <input type="text" placeholder="search here .....">
    </div>
    <style>
       #chiffres {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            gap: 5%;
             border-radius: 10px;
            padding: 15px;
            text-align: center;
            font-family: 'Poppins',sans-serif;
            
            font-size: 20px;
           
            position: relative;
            bottom: -1550px;



        }
       .container ion-icon{
            font-size: 50px;
        }
        .count {
            font-size: 30px;
        }
    #annonce{
    position:absolute;
    top:900px;
    display:flex;
    flex-direction: row;
    flex-wrap:wrap;
    margin:auto;
    margin-left:0px;
}
.card
{
    border: 3px solid #044e35;
    border-radius: 30px;
    padding-left: px;
    padding-right: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
    margin-left: 20px;
    margin-right: 0px;
    margin-bottom: 20px;
    width:100px;
    height: 100px;
    position:relative;
} 
body
{   background-image:linear-gradient(to left,rgb(204, 229, 252),rgb(204, 229, 252));
    min-height: 100vh;
    overflow-x: hidden;
}
header
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 80px;
  background-image:linear-gradient(to left,rgb(204, 229, 252),rgb(204, 229, 252));
  padding : 20px 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 15px 15px rgba(0,0,0,0.05);


}
#chiff{
    position:absolute;
    top:1450px;
    left:450px;
   
}
.searchBox input 
{
    width:100%;
    border: none;
    outline:none;
    height: 50px;
    color: #333;
    font-size: 1.25em;
    background-image:linear-gradient(to left,rgb(204, 229, 252),rgb(204, 229, 252));
    border-bottom: 1px solid rgba(0,0,0,0.5);
}
.searchBox
{
    position:absolute;
    right: -100%;
    width:100%;
    height:100%;
    display:flex;
    background: #fff;
    align-items: center;
    padding: 0 30px;
    transition: 0.5s ease-in-out;
    background-image:linear-gradient(to left,rgb(204, 229, 252),rgb(204, 229, 252));
}



@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');


.form
{
    position: absolute;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background:#E3F0FE;
}



 input{
    background:#E3F0FE ;
    border: none;
    width: 300px;
    border-radius: 4px;
    height: 40px;
    margin-top: 10px;
    margin-bottom: 15px;
    padding-left: 10px;
    font-family: 'Poppins';
}

 label {
    color: #1c2b4f;
    font-family: 'Poppins';
    font-weight: bold;
}
h3 {
     color: #1c2b4f;
    font-family: 'Poppins';
    font-weight: bold;
    padding-bottom: 10px;
    padding-top: 0px;
}
.ff{
    display: flex;
    flex-direction: row;
    display: flex;
     flex-wrap: wrap;
    position:relative;
    width: 380px;
    height: 650px;
    background: skyblue;
    border-radius: 8px;
    overflow: hidden;
}
.bloc{
    display:flex;
    flex-wrap:wrap ;
    justify-content:center ;
    margin:auto;
    margin-top: 150px;


}
.cartes{
    border: none;
    border-radius: 15px;
    padding-left: 50px;
    padding-right: 10px;
    padding-top: 60px;
    padding-bottom: 40px;
    margin-left: 15px;
    margin-right: 0px;
    margin-bottom: 10px;
    justify-content:center ;
    width:400px;
    height: 550px;
background: white;
}

textarea {
    background:#E3F0FE;
    border: none;
}
.sub{
    background:#E3F0FE ;
    border: none;
    border-radius: 5px;
    width: 100px;
    height: 40px;
    margin-left: 100px;
    box-shadow: 5px;
    font-weight: bold;
     color: #1c2b4f;
     padding-left: 5px;
}
.sub:hover 
{
    background-color: #a9d4b2;
  border-radius:10px;

}

</style>
    </header>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script> 
    let searchBtn = document.querySelector('.searchBtn');
    let closeBtn = document.querySelector('.closeBtn');
    let searchBox = document.querySelector('.searchBox');
    let navigation = document.querySelector('.navigation');
    let menuToggle = document.querySelector('.menuToggle');
    let header = document.querySelector('header');
    searchBtn.onclick = function(){
        searchBox.classList.add('active');
        closeBtn.classList.add('active');
        searchBtn.classList.add('active');
        menuToggle.classList.add('hide');
        header.classList.remove('open');
    }
    closeBtn.onclick = function(){
        searchBox.classList.remove('active');
        closeBtn.classList.remove('active');
        searchBtn.classList.remove('active');
        menuToggle.classList.remove('hide');
    }
    menuToggle.onclick = function(){
        header.classList.toggle('open');
        searchBox.classList.remove('active');
        closeBtn.classList.remove('active');
        searchBtn.classList.remove('active');
        
       
    }
    </script> 

<div form>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="bloc"> 
             <div class="cartes"> 
                <h3> Ajouter annonce </h3>
              <label for="titre">Titre événement</label>
    <input type="texte" name="titre" id="titre" required="required"/><br>
    
<label for="titre">Lieu</label><br>
    <input type="lieu" name="lieu" id="lieu" required="required" />
   
<label for="titre">Code événement</label>
    <input type="texte" name="id" id="id" required="required"/><br>

<label for="titre">Date</label><br>
    <input type="date" name="date" id="date" required="required"  />
    
   </div>
   <div class="cartes">
 <label for="titre">Motivation</label>
  <textarea id="motivation" name="motivation" rows="3" cols="35"> </textarea><br>

  
  <label for="titre">Description</label>
  <textarea id="description" name="description" rows="5" cols="35"> </textarea><br>
   
    <label for="titre">Catégorie</label>
    <input type="texte" name="categorie" id="categorie" required="required"/>
    
    <label for="titre">Affiche</label>
    <input type="file" name="affiche" id="affiche" required="required"/>
   
    <input type="submit"  class="sub" name="Annoncer" valeur="Annoncer">
</div>
</form>
</div>

</body>
</html>