<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Movies Quick</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Movies Quick</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#benefits">Benefits</a></li>
          <li><a href="#movies">Available Movies</a></li>
          <li><a href="index.html" id="log_me_out">Log Out</a></li>
        </ul>
    </nav>

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-2">Movies Quick</h1>
          <div class="row center">
            <h5 class="header col s12 light">We rent movies easy and quick. No stress, just entertainment.</h5>
          </div>
          <div class="row center">
            <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Rent now!</a>
          </div>
          <br><br>

        </div>
      </div>
      <div class="parallax"><img src="family_movies.jpg" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container" id="benefits">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
              <h5 class="center">Easy and quick rent method</h5>

              <p class="light">Rent the movie from our web page and just come pick it at the store. As easy as that!</p>
            </div>
          </div>

          <div class="col s4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">group</i></h2>
              <h5 class="center">Watch it with your friends anywhere</h5>

              <p class="light">Enjoy our most popular movies anywhere with your friends at a very cheap price and long rent periods! </p>
            </div>
          </div>

          <div class="col s4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
              <h5 class="center">Disc Warranty</h5>

              <p class="light">If you have trouble with the movie, we will replace it for you with no questions asked!</p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h5 class="header col s12 light">High quality customer service</h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="customer.png" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container" id="movies">
      <div class="section">

        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Available Movies</h4>
            <p class="left-align light center">Here is a list of our best available movies right now. Best rating and quality!</p>
          </div>
        </div>

      </div>
    </div>

    <?php
        $conn = mysqli_connect('localhost', 'id4998352_elizavic', 'Vicfirth4.', 'id4998352_webproject');

        if(!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        $sql = "SELECT name, description, duration, rating, photo from Movies";
        $result = mysqli_query($conn, $sql);
    ?>

    <div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row">
            <?php while($row=mysqli_fetch_assoc($result)) { ?>
              <div class="col s4">
                <div class="card large" style="height: 775px;">
                  <div class="card-image" style="max-height: 45%;">
                    <?php echo "<img src= \"".$row['photo']."\">" ?>
                  </div>
                  <div class="card-content" style="max-height: 50%;">
                    <?php echo "<span class= \"card-title black-text\">".$row['name']."</span>" ?>
                    <div class="teal-text">
                      <?php echo "<p>".$row['description'] ?>
                      <?php echo "<p>".$row['rating']."/10" ?>
                      <?php echo "<p>".$row['duration']." minutes" ?>
                    </div>
                  </div>
                  <div class="card-action" style="background-color: #009688">
                    <a href="#" class="white-text">Rent now!</a>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="curtain.jpg" alt="Unsplashed background img 3"></div>
    </div>

    <footer class="page-footer teal">
      <div class="container">
        <div class="row">
          <div class="col s5">
            <h5 class="white-text">Movies Quick</h5>
            <p class="grey-text text-lighten-4">We rent movies easy and quick. No stress, just entertainment.</p>
          </div>
          <div class="col s5 right">
            <h5 class="white-text center">Location</h5>
            <ul class="center">
              <li><a class="white-text">Sumavska 28 Praha 2, Vinohrady 920 00</a></li>
            </ul>
            <h5 class="white-text center">Telephone</h5>
            <ul class="center">
              <li><a class="white-text"> (73) 4567 1223 </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Victor Elizalde</a>
        </div>
      </div>
    </footer>
  </body>

  <!--  Scripts-->
  <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.0.1/firebase-auth.js"></script>
  <script>
    var config = {
      apiKey: "AIzaSyDe06TWnp--qZQghQvgqNsvxca4_9wEdWM",
      authDomain: "movies-quick-3413f.firebaseapp.com",
      databaseURL: "https://movies-quick-3413f.firebaseio.com",
      projectId: "movies-quick-3413f",
      storageBucket: "",
      messagingSenderId: "465548040314"
    };
    firebase.initializeApp(config);

    var user = firebase.auth().currentUser;
    var itemLogout = document.getElementById("log_me_out");

    itemLogout.addEventListener('click', e => {
      const promise = firebase.auth().signOut();
      document.location.href = "index.html";
    });

    firebase.auth().onAuthStateChanged(user => {
      if(user) {
      } else {
        document.location.href = "index.html";
      }
    });
  </script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</html>
