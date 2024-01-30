 <?php
    include('connexion.php');
    if(isset($_POST['sub'])){
        $cmm=htmlspecialchars($_POST['coment']);
        $sql2="INSERT INTO avis (commentaire) VALUES ('$cmm')";
       $resultat=mysqli_query($conn,$sql2);
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

#cmnt {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 65vh; 
    background-image: url("image/personnes-prenant-part-evenement-haut-protocole (1).jpg");
    background-size: cover;
    background-repeat: no-repeat;
    border-radius: 30px;
    margin-top: 100px;
    
  }
  #coment,#sub{
    width:500px;
    height:40px;
    border: none;
    border-radius: 10px;
    margin-top:60px;
}
#sub{
  width:100px;
}
p{
  font-size: 30px;
  text-align: center;
  margin-left: 30px;
  margin-right: 30px;
  font-family:'ROBOTO', 'Times New Roman', 'Times', 'serif';
  color: white;
}

input[type="submit"] {
  background-color: #c2d8e7 ; 
  color: #black; 
  padding: 10px 20px; 
  border: none;
  font-size:16px;  

}
h2{
  text-align: center;
}
.avi{
  color:black;
  font-size: 20px;
  margin-left: 10px;
  margin-right:10px;
  margin-top: 20px;
  padding-left:20px;
  padding-top: 30px;
  padding-bottom: 30px;
  
  background-color: white;
  border-radius:30px;
  width: 300px;
  height: 150px;
  border: 1px solid #c2d8e7;
  box-shadow: 5px 5px 20px rgba(11, 5, 5, 0.1);
}
#con{
  display: flex;
  flex-direction: row;
  flex-wrap:wrap;
  margin-left: 30px;
  margin-right: 30px;
  margin-top: 50px;

}
.avi:hover{
  transform: scale(1.10);
}





      </style>
</head>
<body>

 <header>
    <a href="#" class="logo">ENSAK-EVENTS</a>
    <div class="group">
    <ul class="navigation">
    <li><a href="index.php">Acceuil</a></li>
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


    <div id="cmnt"> 
        <div id='element'>
            <p id="text"><!-- Que vous ayez participé à un événement récemment, que vous ayez des idées pour des améliorations, ou simplement envie de partager votre expérience, n'hésitez pas à laisser un commentaire ci-dessous. Votre contribution fait de notre communauté un lieu vibrant et dynamique !--></p>
            <p>ENSAK-EVENTS</p>
        </div>
        <div id='element'>
            <form action="#" method="post">  
                <input type="text"   placeholder="Ajouter votre avis"  style="padding-left: 10px;" name="coment" id="coment" required>
                <input  style="font-weight: bold; border: none;" type="submit" name="sub" id="sub" value="Envoyer">
            </form>
        </div>
    </div>
    <?php
      $sql1="SELECT * FROM avis ORDER BY id_avis DESC";
      $result1=mysqli_query($conn,$sql1);
      echo "<div id='con'>";
      while($avi=mysqli_fetch_assoc($result1)){
        echo "<div class='avi'>"; 
        echo  $avi['commentaire'];
        echo "</div>";
      }
      echo "</div>";

    ?>
</body>
</html>