<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet"  type="text/css" href="style3.css">
    <link rel="stylesheet"  type="text/css" href="styles.css">
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="main.js" defer></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <div class="hi">
<header>
    
    <a href="#" class="logo">ENSAK-EVENTS</a>
    <div class="group">
    <ul class="navigation">
    <li><a href="#conference">CONFERENCE</a></li>
    <li><a href="#formation">FORMATION</a></li>
    <li><a href="#forum">FORUM</a></li>
    <li><a href="#ceremonie">CEREMONIE</a></li>
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
   

   
<br><h1 align="center"  class="title" id="conference">CONFERENCE<h1><br><br>
	<?php 
	include('connexion.php');

$conference_query = "SELECT * FROM evenements WHERE categorie='Conférence'";
$result = mysqli_query($conn, $conference_query);
if(mysqli_num_rows($result) > 0){
while ($conference_data = mysqli_fetch_assoc($result)) {
    $conference_code = $conference_data['id'];
    $conference_title = $conference_data['titre'];
    $conference_description = $conference_data['description'];
    $conference_date = $conference_data['date'];
    $conference_motivation = $conference_data['motivation'];
    $conference_photo = $conference_data['affiche'];
    $conference_lieu = $conference_data['lieu'];

    echo '<div class="card mb-3 colored-card shadow" style="max-width: 100%; ">
            <div class="row g-0">
                <div class="col-md-4 inner">
                    <img src="photo/'.$conference_photo .'" class="img-fluid rounded-start"  style="height: 90%;">
                    <div class="post" data-post-id="7712">
		            <div class="post-ratings-container">
			           <div class="post-rating">
			             	<span class="post-rating-button material-icons">thumb_up</span>
				      <span class="post-rating-count">0</span>
			</div>
			<div class="post-rating">
				<span class="post-rating-button material-icons">thumb_down</span>
				<span class="post-rating-count">0</span>
			</div>
		</div>
	</div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                           
            <script>
            const countToDate = new Date("' . $conference_date . '").getTime();
            let previousTimeBetweenDates;

            setInterval(() => {
                const currentDate = new Date().getTime();
                const timeBetweenDates = Math.ceil((countToDate - currentDate) / 1000);
                flipAllCards(timeBetweenDates);

                previousTimeBetweenDates = timeBetweenDates;
            }, 250);

            function flipAllCards(time) {
                const seconds = time % 60;
                const minutes = Math.floor(time / 60) % 60;
                const hours = Math.floor(time / 3600);

                flip(document.querySelector("[data-hours-tens]"), Math.floor(hours / 10));
                flip(document.querySelector("[data-hours-ones]"), hours % 10);
                flip(document.querySelector("[data-minutes-tens]"), Math.floor(minutes / 10));
                flip(document.querySelector("[data-minutes-ones]"), minutes % 10);
                flip(document.querySelector("[data-seconds-tens]"), Math.floor(seconds / 10));
                flip(document.querySelector("[data-seconds-ones]"), seconds % 10);
            }

            function flip(flipCard, newNumber) {
                const topHalf = flipCard.querySelector(".top");
                const startNumber = parseInt(topHalf.textContent);
                if (newNumber === startNumber) return;

                const bottomHalf = flipCard.querySelector(".bottom");
                const topFlip = document.createElement("div");
                topFlip.classList.add("top-flip");
                const bottomFlip = document.createElement("div");
                bottomFlip.classList.add("bottom-flip");

                topHalf.textContent = startNumber;
                bottomHalf.textContent = startNumber;
                topFlip.textContent = startNumber;
                bottomFlip.textContent = newNumber;

                topFlip.addEventListener("animationstart", e => {
                    topHalf.textContent = newNumber;
                });
                topFlip.addEventListener("animationend", e => {
                    topFlip.remove();
                });
                bottomFlip.addEventListener("animationend", e => {
                    bottomHalf.textContent = newNumber;
                    bottomFlip.remove();
                });
                flipCard.append(topFlip, bottomFlip);
            }
            
        </script>
          <div class="container1">
          <div class="container-segment">
            <div class="segment-title">Hours</div>
            <div class="segment">
              <div class="flip-card" data-hours-tens>
                <div class="top">2</div>
                <div class="bottom">2</div>
              </div>
              <div class="flip-card" data-hours-ones>
                <div class="top">4</div>
                <div class="bottom">4</div>
              </div>
            </div>
          </div>
          <div class="container-segment">
            <div class="segment-title">Minutes</div>
            <div class="segment">
              <div class="flip-card" data-minutes-tens>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
              <div class="flip-card" data-minutes-ones>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
            </div>
          </div>
          <div class="container-segment">
            <div class="segment-title">Seconds</div>
            <div class="segment">
              <div class="flip-card" data-seconds-tens>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
              <div class="flip-card" data-seconds-ones>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
            </div>
          </div>
        </div>
        </div>

                        <div class="container3">
                        <h1 class="card-title">' . $conference_title . '</h1> <br>
                        <h3 class="card-subtitle" >DATE DE CONFERENCE :</h3> 
                        <p class="card-text"><small class="text-body-secondary">' . $conference_date . '</small></p>
                        <h3 class="card-subtitle">CODE D\'EVENEMENT :</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $conference_code . '</small></p>
                        <h3 class="card-subtitle">DESCRIPTION :</h3>
                        <p class="card-text">' . $conference_description . '</p>
                        <h3 class="card-subtitle">LE LIEU:</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $conference_lieu . '</small></p>
                        <a href="formins.php" class="btn btn-primary">s\'inscrire</a>
                        <a href="location.php" class="btn btn-primary">Localisation</a>
                        </div>
                        </div>
                        </div> 
                      
        </div>';
}
} else {
    echo'<div class="card mb-3 colored-card" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-7">
            <div class="card-body">
                <h5 class="lead" align="center">Aucun conférence cette semaine</h5>
            </div>
        </div>
    </div>
  </div>';
	
}

mysqli_close($conn);
?>
<h1 align="center" class="title" id="formation">FORMATION<h1><br><br>
	<?php 
	include('connexion.php');

$formation_query = "SELECT * FROM evenements WHERE categorie='Formation'";
$result = mysqli_query($conn, $formation_query);
if(mysqli_num_rows($result) > 0){
while ($formation_data = mysqli_fetch_assoc($result)) {
    $formation_title = $formation_data['titre'];
    $formation_description = $formation_data['description'];
    $formation_date = $formation_data['date'];
    $formation_motivation = $formation_data['motivation'];
    $formation_photo = $formation_data['affiche'];
    $formation_code = $formation_data['id'];
    $formation_lieu = $formation_data['lieu'];

    echo '<div class="card mb-3 colored-card" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4 inner">
                    <img src="photo/'.$formation_photo.'" class="img-fluid rounded-start" style="height: 90%;">
                    <div class="post" data-post-id="7712">
		            <div class="post-ratings-container">
			           <div class="post-rating">
			             	<span class="post-rating-button material-icons">thumb_up</span>
				      <span class="post-rating-count">0</span>
			</div>
			<div class="post-rating">
				<span class="post-rating-button material-icons">thumb_down</span>
				<span class="post-rating-count">0</span>
			</div>
		</div>
	</div>
              
                </div>
                <div class="col-md-8">
                <div class="card-body">
                       
        <script>
        const countToDate= new Date("' . $formation_date . '").getTime();
        let previousTimeBetweenDate;

        setInterval(() => {
            const currentDate = new Date().getTime();
            const timeBetweenDates = Math.ceil((countToDate - currentDate) / 1000);
            flipAllCards(timeBetweenDate);

            previousTimeBetweenDates = timeBetweenDates;
        }, 250);

        function flipAllCards(time) {
            const seconds = time % 60;
            const minutes = Math.floor(time / 60) % 60;
            const hours = Math.floor(time / 3600);

            flip(document.querySelector("[data-hours-tens]"), Math.floor(hours / 10));
            flip(document.querySelector("[data-hours-ones]"), hours % 10);
            flip(document.querySelector("[data-minutes-tens]"), Math.floor(minutes / 10));
            flip(document.querySelector("[data-minutes-ones]"), minutes % 10);
            flip(document.querySelector("[data-seconds-tens]"), Math.floor(seconds / 10));
            flip(document.querySelector("[data-seconds-ones]"), seconds % 10);
        }

        function flip(flipCard, newNumber) {
            const topHalf = flipCard.querySelector(".top");
            const startNumber = parseInt(topHalf.textContent);
            if (newNumber === startNumber) return;

            const bottomHalf = flipCard.querySelector(".bottom");
            const topFlip = document.createElement("div");
            topFlip.classList.add("top-flip");
            const bottomFlip = document.createElement("div");
            bottomFlip.classList.add("bottom-flip");

            topHalf.textContent = startNumber;
            bottomHalf.textContent = startNumber;
            topFlip.textContent = startNumber;
            bottomFlip.textContent = newNumber;

            topFlip.addEventListener("animationstart", e => {
                topHalf.textContent = newNumber;
            });
            topFlip.addEventListener("animationend", e => {
                topFlip.remove();
            });
            bottomFlip.addEventListener("animationend", e => {
                bottomHalf.textContent = newNumber;
                bottomFlip.remove();
            });
            flipCard.append(topFlip, bottomFlip);
        }
        
    </script>
      <div class="container1">
      <div class="container-segment">
        <div class="segment-title">Hours</div>
        <div class="segment">
          <div class="flip-card" data-hours-tens>
            <div class="top">2</div>
            <div class="bottom">2</div>
          </div>
          <div class="flip-card" data-hours-ones>
            <div class="top">4</div>
            <div class="bottom">4</div>
          </div>
        </div>
      </div>
      <div class="container-segment">
        <div class="segment-title">Minutes</div>
        <div class="segment">
          <div class="flip-card" data-minutes-tens>
            <div class="top">0</div>
            <div class="bottom">0</div>
          </div>
          <div class="flip-card" data-minutes-ones>
            <div class="top">0</div>
            <div class="bottom">0</div>
          </div>
        </div>
      </div>
      <div class="container-segment">
        <div class="segment-title">Seconds</div>
        <div class="segment">
          <div class="flip-card" data-seconds-tens>
            <div class="top">0</div>
            <div class="bottom">0</div>
          </div>
          <div class="flip-card" data-seconds-ones>
            <div class="top">0</div>
            <div class="bottom">0</div>
          </div>
        </div>
      </div>
    </div>
    </div>
                       <div class="container3">
                        <h1 class="card-title">' . $formation_title . '</h1><br>
                        <h3 class="card-subtitle">DATE DE FORMATION :</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $formation_date . '</small></p>
                        <h3 class="card-subtitle">CODE D\'EVENEMENT:</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $formation_code . '</small></p>
                        <h3 class="card-subtitle">DESCRIPTION :</h3>
                        <p class="card-text">' . $formation_description . '</p>
                        <h3 class="card-subtitle">LE LIEU:</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $formation_lieu . '</small></p>
                        <a href="formins.php" class="btn btn-primary">s\'inscrire</a>
                        <a href="location.php" class="btn btn-primary">Localisation</a>
                    </div>

                </div>
            </div>
          </div>';
}
} else {
    echo'<div class="card mb-3 colored-card" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-7">
            <div class="card-body">
            <div class="ti">
                <h5 class="lead" align="center" >Aucun formation cette semaine</h5>
                </div>
            </div>
        </div>
    </div>
  </div>';
	
}
mysqli_close($conn);
?>
<h1 align="center" class="title" id="forum">FORUM<h1><br><br>
	<?php 
	include('connexion.php');

$forum_query = "SELECT * FROM evenements WHERE categorie='Forum'";
$result = mysqli_query($conn, $forum_query);
if(mysqli_num_rows($result) > 0){
while ($forum_data = mysqli_fetch_assoc($result)) {
    $forum_code = $forum_data['id'];
    $forum_title = $forum_data['titre'];
    $forum_description = $forum_data['description'];
    $forum_date = $forum_data['date'];
    $forum_motivation = $forum_data['motivation'];
    $forum_photo = $forum_data['affiche'];
    $forum_lieu= $forum_data['lieu'];

    echo '<div class="card mb-3 colored-card" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4 inner" >
                    <img src="photo/'. $forum_photo .'" class="img-fluid rounded-start"style="height: 90%;" >
                    <div class="post" data-post-id="7712">
		            <div class="post-ratings-container">
			           <div class="post-rating">
			             	<span class="post-rating-button material-icons">thumb_up</span>
				      <span class="post-rating-count">0</span>
			</div>
			<div class="post-rating">
				<span class="post-rating-button material-icons">thumb_down</span>
				<span class="post-rating-count">0</span>
			</div>
		</div>
	</div>
                
                </div>
                <div class="col-md-8">
                    <div class="card-body">
            <script>
            const countToDatefo = new Date("' . $forum_date . '").getTime();
            let previousTimeBetweenDatesfo;

            setInterval(() => {
                const currentDatefo = new Date().getTime();
                const timeBetweenDatesfo = Math.ceil((countToDatefo - currentDatefo) / 1000);
                flipAllCardsfo(timeBetweenDatesfo);

                previousTimeBetweenDatesfo = timeBetweenDatesfo;
            }, 250);

            function flipAllCardsfo(time) {
                const seconds = time % 60;
                const minutes = Math.floor(time / 60) % 60;
                const hours = Math.floor(time / 3600);

                flipfo(document.querySelector("[data-hours-tens]"), Math.floor(hours / 10));
                flipfo(document.querySelector("[data-hours-ones]"), hours % 10);
                flipfo(document.querySelector("[data-minutes-tens]"), Math.floor(minutes / 10));
                flipfo(document.querySelector("[data-minutes-ones]"), minutes % 10);
                flipfo(document.querySelector("[data-seconds-tens]"), Math.floor(seconds / 10));
                flipfo(document.querySelector("[data-seconds-ones]"), seconds % 10);
            }

            function flipfo(flipCard, newNumber) {
                const topHalf = flipCard.querySelector(".top");
                const startNumber = parseInt(topHalf.textContent);
                if (newNumber === startNumber) return;

                const bottomHalf = flipCard.querySelector(".bottom");
                const topFlip = document.createElement("div");
                topFlip.classList.add("top-flip");
                const bottomFlip = document.createElement("div");
                bottomFlip.classList.add("bottom-flip");

                topHalf.textContent = startNumber;
                bottomHalf.textContent = startNumber;
                topFlip.textContent = startNumber;
                bottomFlip.textContent = newNumber;

                topFlip.addEventListener("animationstart", e => {
                    topHalf.textContent = newNumber;
                });
                topFlip.addEventListener("animationend", e => {
                    topFlip.remove();
                });
                bottomFlip.addEventListener("animationend", e => {
                    bottomHalf.textContent = newNumber;
                    bottomFlip.remove();
                });
                flipCard.append(topFlip, bottomFlip);
            }
            
        </script>
          <div class="container1">
          <div class="container-segment">
            <div class="segment-title">Hours</div>
            <div class="segment">
              <div class="flip-card" data-hours-tens>
                <div class="top">2</div>
                <div class="bottom">2</div>
              </div>
              <div class="flip-card" data-hours-ones>
                <div class="top">4</div>
                <div class="bottom">4</div>
              </div>
            </div>
          </div>
          <div class="container-segment">
            <div class="segment-title">Minutes</div>
            <div class="segment">
              <div class="flip-card" data-minutes-tens>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
              <div class="flip-card" data-minutes-ones>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
            </div>
          </div>
          <div class="container-segment">
            <div class="segment-title">Seconds</div>
            <div class="segment">
              <div class="flip-card" data-seconds-tens>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
              <div class="flip-card" data-seconds-ones>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
            </div>
          </div>
        </div>
        </div>
                        <div class="container3">
                        <h1 class="card-title">' . $forum_title . '</h1><br>
                        <h3 class="card-subtitle">DATE DE FORUM :</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $forum_date . '</small></p>
                        <h3 class="card-subtitle">CODE d\'EVENEMENT:</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $forum_code . '</small></p>
                        <h3 class="card-subtitle">DESCRIPTION :</h3>
                        <p class="card-text">' . $forum_description . '</p>
                        <h3  class="card-subtitle">LE LIEU :</h3>
                       <p class="card-text"><small class="text-body-secondary">' . $forum_lieu . '</small></p>
                        <a href="formins.php" class="btn btn-primary">s\'inscrire</a>
                        <a href="location.php" class="btn btn-primary">Localisation</a>
                    </div>
                </div>
            </div>
          </div>';
}
} else {
    echo'<div class="card mb-3 colored-card" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-7">
            <div class="card-body">
                <h5 class="lead" align="center">Aucun forum cette semaine</h5>
            </div>
        </div>
    </div>
  </div>';
	
}
mysqli_close($conn);
?>
<h1 align="center" class="title" id="ceremonie">CEREMONIE<h1><br><br>
	<?php 
	include('connexion.php');

$ceremonie_query = "SELECT * FROM evenements WHERE categorie='Cérémonie'";
$result = mysqli_query($conn, $ceremonie_query);
if(mysqli_num_rows($result) > 0){
while ($ceremonie_data = mysqli_fetch_assoc($result)) {
    $ceremonie_code = $ceremonie_data['id'];
    $ceremonie_title = $ceremonie_data['titre'];
    $ceremonie_description = $ceremonie_data['description'];
    $ceremonie_date = $ceremonie_data['date'];
    $ceremonie_motivation = $ceremonie_data['motivation'];
    $ceremonie_photo = $ceremonie_data['affiche'];
    $ceremonie_lieu = $ceremonie_data['lieu'];

    echo '<div class="card mb-3 colored-card" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4 inner">
                    <img src="photo/'. $ceremonie_photo .'" class="img-fluid rounded-start" style="height: 90%;">
                    <div class="post" data-post-id="7712">
		            <div class="post-ratings-container">
			           <div class="post-rating">
			             	<span class="post-rating-button material-icons">thumb_up</span>
				      <span class="post-rating-count">0</span>
			</div>
			<div class="post-rating">
				<span class="post-rating-button material-icons">thumb_down</span>
				<span class="post-rating-count">0</span>
			</div>
		</div>
	</div>
                
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    
                           
            <script>
            const countToDate = new Date("' . $ceremonie_date . '").getTime();
            let previousTimeBetweenDates;

            setInterval(() => {
                const currentDate = new Date().getTime();
                const timeBetweenDates = Math.ceil((countToDate - currentDate) / 1000);
                flipAllCards(timeBetweenDates);

                previousTimeBetweenDates = timeBetweenDates;
            }, 250);

            function flipAllCards(time) {
                const seconds = time % 60;
                const minutes = Math.floor(time / 60) % 60;
                const hours = Math.floor(time / 3600);

                flip(document.querySelector("[data-hours-tens]"), Math.floor(hours / 10));
                flip(document.querySelector("[data-hours-ones]"), hours % 10);
                flip(document.querySelector("[data-minutes-tens]"), Math.floor(minutes / 10));
                flip(document.querySelector("[data-minutes-ones]"), minutes % 10);
                flip(document.querySelector("[data-seconds-tens]"), Math.floor(seconds / 10));
                flip(document.querySelector("[data-seconds-ones]"), seconds % 10);
            }

            function flip(flipCard, newNumber) {
                const topHalf = flipCard.querySelector(".top");
                const startNumber = parseInt(topHalf.textContent);
                if (newNumber === startNumber) return;

                const bottomHalf = flipCard.querySelector(".bottom");
                const topFlip = document.createElement("div");
                topFlip.classList.add("top-flip");
                const bottomFlip = document.createElement("div");
                bottomFlip.classList.add("bottom-flip");

                topHalf.textContent = startNumber;
                bottomHalf.textContent = startNumber;
                topFlip.textContent = startNumber;
                bottomFlip.textContent = newNumber;

                topFlip.addEventListener("animationstart", e => {
                    topHalf.textContent = newNumber;
                });
                topFlip.addEventListener("animationend", e => {
                    topFlip.remove();
                });
                bottomFlip.addEventListener("animationend", e => {
                    bottomHalf.textContent = newNumber;
                    bottomFlip.remove();
                });
                flipCard.append(topFlip, bottomFlip);
            }
            
        </script>
          <div class="container1">
          <div class="container-segment">
            <div class="segment-title">Hours</div>
            <div class="segment">
              <div class="flip-card" data-hours-tens>
                <div class="top">2</div>
                <div class="bottom">2</div>
              </div>
              <div class="flip-card" data-hours-ones>
                <div class="top">4</div>
                <div class="bottom">4</div>
              </div>
            </div>
          </div>
          <div class="container-segment">
            <div class="segment-title">Minutes</div>
            <div class="segment">
              <div class="flip-card" data-minutes-tens>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
              <div class="flip-card" data-minutes-ones>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
            </div>
          </div>
          <div class="container-segment">
            <div class="segment-title">Seconds</div>
            <div class="segment">
              <div class="flip-card" data-seconds-tens>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
              <div class="flip-card" data-seconds-ones>
                <div class="top">0</div>
                <div class="bottom">0</div>
              </div>
            </div>
          </div>
        </div>
        </div>
                        <div class="container3">
                        <h1 class="card-title">' . $ceremonie_title . '</h1><br>
                        <h3 class="card-subtitle">DATE DE CEREMONIE :</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $ceremonie_date . '</small></p>
                        <h3 class="card-subtitle">CODE D\'EVENEMENT :</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $ceremonie_code . '</small></p>
                        <h3 class="card-subtitle">DESCRIPTION :</h3>
                        <p class="card-text">' . $ceremonie_description . '</p>
                        <h3 class="card-subtitle">LE LIEU :</h3>
                        <p class="card-text"><small class="text-body-secondary">' . $ceremonie_lieu . '</small></p>
                        <a href="formins.php" class="btn btn-primary">s\'inscrire</a>
                        <a href="location.php" class="btn btn-primary">Localisation</a>
                    </div>
                </div>
            </div>
          </div>';
}
} else {
    echo'<div class="card mb-3 colored-card" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-sm-7">
            <div class="card-body">
                <h5 class="lead" align="center">Aucun cérémonie cette semaine</h5>
            </div>
        </div>
    </div>
  </div>';
	
}

mysqli_close($conn);
?>
</div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>