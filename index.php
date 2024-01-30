
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
</head>
<body >
    <header>
    <a href="#" class="logo">ENSAK-EVENTS</a>
    <div class="group">
    <ul class="navigation">
    <li><a href="#">Acceuil</a></li>
    <li><a href="thankyou.php">Evénements</a></li>
    <li><a href="avi.php">Avis</a></li>
    <li><a href="rapport.php">Rapports</a></li>
    <li><a href="notification.php">Notification</a></li>
    <li><a href="form.php">Login</a></li>
      
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
            margin-top: 90px;
            font-size: 20px;
           
            position: relative;
            bottom: -1550px;
            background-image: url("image/jpg");
            

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
    margin-left:80px;
    margin-right: 80px;
}
.card
{
	border: none;
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
    margin-top: 30px;
    top:1500px;
    left:550px;
   
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
footer{
    position:absolute;
    top:1900px;
    background-color: rgb(204, 229, 252);
    height: 300px;
    width:1400px;
    display: flex;
    margin-top: 800px;
   background-color:#1c2b4f;
    box-shadow:   5px 10px 8px #888888;
}

#footer-left{
    border: 1px solid #1a759f;
    width: 600px;
    padding: 15px;
    text-align: center;
    margin-left: 330px;
    margin-top: 40px;
    height: 180px;
}
#footer-left:hover{
    border: 1px solid #d5c3a0 ;
}
.footerContainer{
    width: 100%;
    padding: 70px 30px 20px;


}

.socialIcons{
    display: flex;
    justify-content: center;
}
.socialIcons a{
    text-decoration: none;
    padding: 10px;
    background-color: white;
    margin: 10px;
    border-radius: 50%;
}
.socialIcons a i{
    font-size: 2em;
    color: black;
    opacity: 0.9;
}

.socialIcons a:hover{
    background-color: #111;
    transition: 0.5s;


}
.socialIcons a:hover i{
  color: white;
  transition: 0.5s; 
}
.footerBottom{
    padding: 20px;
    text-align: center;
    bottom: 0;

}
.footerBottom p{
    color: white;
    margin-bottom: 1px;

}


img {
    width: 330px;
	height: 300px;
    border-radius: 8px;
    margin-left: 6px; 
    margin-top:3px;  
    padding-top: 20px;
    padding-left: 22px;
    padding-right: 20px;
}

.bloc{
    display:flex;
    flex-wrap:wrap ;
    justify-content:center ;
    margin:auto;
    margin-top: 1900px;




}
.cartes{
    border: none;
    border-radius: 20px;
    padding-left: 50px;
    padding-right: 40px;
    padding-top: 20px;
    padding-bottom: 0px;
    margin-left: 15px;
    margin-right: 0px;
    margin-bottom: 10px;
    justify-content:center ;
    width:350px;
    height: 320px;
    background-color: white;

}
.cartes h5{
    color:#5c7eea;
    text-align: center;

}
.cartes:hover{
    box-shadow: 2px 2px 5px #888888 ;
}
.card:hover{
    box-shadow: 2px 2px 5px #888888 ;
}
@media (max-width: 800px)
{
    #ensemble{
        display:block;

    }
    #first{
        position:absolute;
        left:0px;
    }
    .banner{
        display:none;
    }
    .titre{
        margin-left:60px;
    }
    #chiff{
        margin-left:60px;
        position :absolute;
        top:2000px;
        left:0px;
    }
    #chiffres{
        position :absolute;
        top:2000px;
        left:0px;
    }
    .bloc{
        position :absolute;
        top:500px;
        left:0px;
    }
    footer{
    position:absolute;
    top:3000px;
    background-color: rgb(204, 229, 252);
    height: 300px;
    width:1400px;
    display: flex;
    margin-top: 800px;
   background-color:#1c2b4f;
    box-shadow:   5px 10px 8px #888888;
}
    .tit{
       display:none;
    }
 .footerContainer{
   position:absolute;
   left:-350px;
 }

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
    <div id="ensemble">
    <div class="banner">
     <video   autoplay controls loop width="600px" height="600px">
        <source src="banner-intro.webm" type="video/webm">
     </video>
   </div>
   <div id= "first">
   <h1 id="intro">  Campus Vibrant : Événements, Connexions, Souvenirs ! </h1>
   <p id="text" style=" margin-left: 35px;"> Plongez dans une expérience universitaire exceptionnelle avec nos événements exclusifs. Bienvenue 
    sur le campus dynamique de l'ENSA-K!</p>
</div>
</div>
    <h1 class="titre">Préparez-vous à l'action !</h1>  
<?php 
session_start();
include('connexion.php');
$query = "SELECT * FROM evenements";
$resultats=mysqli_query($conn, $query);
echo'<div id="annonce">';
while ($row = mysqli_fetch_assoc($resultats)) {
  

?>

<div class="card" style=" height: 500px;    width:22rem ; margin-left:10px  ">
<?php $photo= $row['affiche'] ;
echo "<img src=\"photo/$photo\" alt=\"image\"  height=70 width=80 class=\"card1\" alt=\"...\">";?>
<div class="card-body" style="  ">
<h4 style="margin-left: 10px" class="card-title"><?php echo $row['titre'];?></h4>
<p style="margin-left: 10px" class="card-text"><?php echo $row['motivation'];?></p>
<a href="thankyou.php"  class="bouton" style="color: white; background: #1c2b4f; margin-right: 20px; margin-bottom:20px ; margin-top: 100px; padding-bottom: 10px; padding-left: 15px;"> Savoir plus </a>
</div></div>
<?php } ?>
</div> 
<h1 id="chiff"> Grands chiffres</h1>
<div id="chiffres">
    
<?php $user_query = "SELECT COUNT(*) as total FROM participants";
    $result = mysqli_query($conn, $user_query);
    $participants_total = mysqli_fetch_assoc($result)['total'];
    echo '<div class="container"><ion-icon name="people-outline"></ion-icon><h4 class="count" data-target="' . $participants_total . '"></h4><h4>des participants</h4></div>';
    $events_query = "SELECT COUNT(*) as total FROM evenements";
    $result = mysqli_query($conn, $events_query);
    $events_total = mysqli_fetch_assoc($result)['total'];
    echo '<div class="container"><ion-icon name="calendar-outline"></ion-icon><h4 class="count" data-target="' . $events_total . '"></h4><h4>des evenements</h4></div>';

    $organizers_query = "SELECT COUNT(*) as total FROM organisateurs";
    $result = mysqli_query($conn, $organizers_query);
    $organizers_total = mysqli_fetch_assoc($result)['total'];
    echo '<div class="container"><ion-icon name="person-circle-outline"></ion-icon><h4 class="count" data-target="' . $organizers_total . '"></h4><h4>des organisateurs</h4></div>';
?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    var counters = document.querySelectorAll('.count');
    
    counters.forEach(counter => {
        var target = +counter.dataset.target;
        var count = 0;
        var speed = 200; 
        
        var updateCount = function () {
            var increment = target / speed;
            if (count < target) {
                count += increment;
                counter.innerText = Math.ceil(count);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
});
</script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</div>


 <div class="bloc"> 
    <h1 style=" margin-top : 550px; margin-left: 50px;" id="chiff" class="tit"> About as</h1>
                <div class="cartes"> 
                    <i class="fa-solid fa-shield-halved"  style="font-size: 30px; margin-left: 120px;"></i>
                    
                    <h5 >Plateforme sécurisée</h5>
                    <p  style="  text-align: center;  ">  La sécurité de vos données et de votre expérience en ligne est notre priorité. Notre plateforme intègre des mesures de sécurité avancées pour protéger vos informations personnelles, garantir des transactions sûres et maintenir la confidentialité de vos activités en ligne.    </p>
                </div>
                <div class="cartes"> 
                   <i class="fa-solid fa-gauge-simple-high"  style="font-size: 30px; margin-left: 120px;" ></i>
                    <h5>Rapide,simple et 100% web</h5>
                    <p style="  text-align: center;  ">  Notre plateforme a été optimisée pour une utilisation efficace et agréable. Elle est rapide, assurant des temps de chargement minimaux pour que vous puissiez accéder rapidement aux informations et effectuer des actions sans délai.    </p>
                </div>
                <div class="cartes"> 
                    <i class="fa-solid fa-circle-up"   style="font-size: 30px; margin-left: 115px;"></i>
                    <h5  >Extensibilité et Personnalisabilité</h5>
                    <p style="  text-align: center;  ">  Nous comprenons que chaque utilisateur a des besoins spécifiques. C'est pourquoi notre plateforme est conçue pour évoluer avec vous. Vous pouvez personnaliser votre expérience en fonction de vos préférences individuelles.   </p>
                </div>
                

 </div>





<footer >
 <div class="footerContainer">
    <div class="socialIcons">
        <a href="mailto:votre@email.com"><i class="fas fa-envelope"></i></a>
         <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
        <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
    </div>
    <div class="footerBottom">
        <p>© 2023-ENSAK-EVENTS</p>
    </div>  
</div>      
</footer>
</body>
</html>

