<?php 
session_start();
include ("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="decore.css" rel="stylesheet" type="text/css">
    <link  rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style type="text/css">
        </style>
    <script src="main2.js" defer></script>
    <style>
       .post {
    width: 400px;
    font-family: 'Lexend', sans-serif;
    position : absolute;
    right:14px;
    bottom:0px;
}

.post-image {
    display: block;
    width: 100%;
}

.post-ratings-container {
    display: flex;
    justify-content: end;
    padding: 12px 0;

}

.post-rating {
    display: flex;
    align-items: center;
    cursor: default;
}

.post-rating:not(:last-child) {
    margin-right: 12px;
}

.post-rating-selected > .post-rating-button,
.post-rating-selected > .post-rating-count {
    color: #1a759f;
}

.post-rating-button {
    margin-right: 6px;
    cursor: pointer;
    color: #555555;
}

.post-rating:not(.post-rating-selected) > .post-rating-button:hover {
    color: #000000;
}
        .report-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 0px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;  
            overflow: hidden; 
            position:relative;

        }
          .report-card:hover{
               background-color: #E3F0FE ;
          }
       
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
             margin-top: 100px;
        }

       
        .event-title {
            font-size: 18px;
            margin-top:10px;
            font-weight: bold;
            margin-bottom: 5px;
            font-family:  "Lucida Console", Courier, monospace;
            text-transform: uppercase; 
        }

        .login {
            text-align: right;
            font-style: italic;
            color: #1a759f; 
            margin-top: 10px; 
        }

       
    </style>
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
    <title>Page de rapports</title>
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
.date{
    margin-left:1050px;
    
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

<?php 
$request = "SELECT * FROM notifications ";
$result = mysqli_query($conn,$request);
while ($data = mysqli_fetch_assoc($result)) {
    $od=$data['id_evenement'];
    $resu= mysqli_query($conn,"SELECT * FROM evenements WHERE id ='$od'");
    $fin=mysqli_fetch_assoc($resu);
    $titre=$fin['titre'];
     echo '<div class="report-card">';
     echo '<div class="event-title">' .$fin['titre']. '</div>';
     echo  ' <i class="fa-solid fa-bell"  style="color: #E3F0FE ;"></i>';

     echo $data['message'] . "<br/>";
     echo '<div class="date" style="margin-right:0px;color:gray;" >'.$data['date_envoi'].'</div>';
    
  echo '</div>';
    
    }
    
?>

   



</body>
</html>