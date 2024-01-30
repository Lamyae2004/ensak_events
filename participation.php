<?php 
session_start();
include('connexion.php');
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
  {
      header("Location:form.php");
      exit; 
  }
 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="decore.css" rel="stylesheet" type="text/css">
    <link  rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style type="text/css">
        </style>
    
    <title>Document</title>
    <style>
        
    body{
    background-image:linear-gradient(to left,rgb(204, 229, 252),rgb(204, 229, 252));
}
table,th,td{
    border:1px solid ;
    text-align:center;
    width:800px;
    justify-content: center;
    align-items: center;
    height: 5vh;
    font-size:20px;
    font-family:'Roboto';
    background-color: white;

}
table{
    border-radius:4px;
    margin:10vh 30vh 30px 45vh;
    box-shadow: 0px 5px 10px 0px black;
    
}
#titre{
    margin-right:0px;
    background-color: #1c2b4f;
    color:white;
}
th:hover,td:hover{
    
    border-radius:5px;
    background-image:linear-gradient(to left,rgb(204, 229, 252),rgb(204, 229, 252)); ;
}



@media only screen and (max-width: 400px) {
    th, td {
        display: block;
        width: 100%;
        box-sizing: border-box;
    }

    th, td::before {
        content: attr(data-label);
        font-weight: bold;
        display: inline-block;
        width: 50%;
        text-align: left;
    }

    th::after, td::after {
        content: ":";
        display: inline-block;
        width: 50%;
        text-align: right;
    }
}



    </style>
</head>
<body>
      <header>
    <a href="#" class="logo">ENSAK-EVENTS</a>
    <div class="group">
    <ul class="navigation">
    <li><a href="Annonce.php">Annoncer</a></li>
    <li><a href="modifier.html">Modifier</a></li>
    <li><a href="constructiondurapp.php">Rapporter</a></li>
    <li><a href="participation.php">Participants</a></li>
    <li><a href="delete.php">Supprimer</a></li>
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






 
h3 {
     color: #1c2b4f;
    font-family: 'Poppins';
    font-weight: bold;
    padding-bottom: 10px;
    padding-top: 0px;
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
.tab{
    margin-top: 100px;
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




<?php
        $organisateur=$_SESSION['id_organisateur'] ;
        $sql2="SELECT titre,id AS even FROM evenements WHERE id_organisateur ='$organisateur'";
        $result2=mysqli_query($conn,$sql2);
          echo '<div class="tab">';
        while($row2=mysqli_fetch_assoc($result2)){
            echo "<table cellspacing='0' cellpadding='1'>";
            echo "<tr>";
            echo "<th id='titre' colspan='4'>{$row2['titre']}</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th> Nom </th>";
            echo "<th> Prenom </th>";
            echo "<th> Email </th>";
            echo "<th> Date Inscription </th>";
            echo "</tr>";
            $sql3="SELECT id_participant as par,date_inscription as dat  FROM inscriptions WHERE id_evenement='".$row2['even']."'";
            $result3=mysqli_query($conn,$sql3);
           while( $participant=mysqli_fetch_assoc($result3)){
            $sql4="SELECT nom,prenom,email FROM participants where id_participant='".$participant['par']."'";
            $result4=mysqli_query($conn,$sql4);
            $result4=mysqli_fetch_assoc($result4);
            echo "<tr>";
            echo "<td> {$result4['nom']}  </td>";
            echo "<td> {$result4['prenom']}  </td>";
            echo "<td> {$result4['email']}  </td>";
            echo "<td> {$participant['dat']}  </td>";
            echo "</tr>";
        }
    }
        echo "</table>";
         echo "</div>";

?>
</body>
</html>