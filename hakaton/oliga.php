<!DOCTYPE html>
<html lang="en">
<head>
    <link href="stil.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Predavanja</title>
</head>

<body>

<nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Digitalna skola</a>
                  </div>
                  <ul class="nav navbar-nav">
                    
                   
                    
                    <li><a href="predavanja.html" class="prvi">Predavanja</a></li>
                    <li><a href="testovi.html">Testovi</a></li>
                    <li><a href="uspeh.php">Uspeh</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href = "index.php">Logout</a></li>
                  </ul>
                </div>
              </nav>
 <h2 class="tekst">Najbolje rangirana odeljenja Prve beogradske gimnazije:<h2>
    <?php
    session_start();
    $db_user = "root";
    $db_host = "localhost";
    $db_pass = "";
    $db_dbname = "ucenici";
    $db = mysqli_connect($db_host, $db_user, $db_pass, $db_dbname) or die ("Greska pri povezivanju.");
     
            $query = "SELECT odeljenje,poeni FROM odeljenje";
            $result = mysqli_query($db,$query);
            ?>
            <div class='ucenici'>
                <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                
                <div class='row' style = "margin-left: 400px;">

                <div class='col-sm-4'>
                    <?php
                    echo "<h4>".$row['odeljenje']."<h4>";
?>
                </div>
                <div class='col-sm-4'>
                    <?php
                    echo "<h4>".$row['poeni']."<h4>";

?>
                 </div>
            </div>
                 <?php
            }
            ?>
   <div class = "container">
       <h2 style = "color: white; text-align: center;">Ova odeljenska liga se završava za: <p style = "color: blue;padding-left: 200px;  text-align: center; margin-left: -200px;">15 dana</p>
       Ukoliko se Vaše odeljenje plasira među najbolja 3 u školi, možete osvojiti vredne nagrade:</h2>
   </div>
   <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="eks.jpg" alt="Odabir mesta za narednu đačku ekskurziju" style="width:100%;">
        <div style = "text-align: center; color: white;">Odabir mesta za narednu đačku ekskurziju</div>
      </div>

      <div class="item">
        <img src="matura.jpg" alt="Odabir mesta za proslavljanje mature" style="width:100%;">
        <div style = "text-align: center; color: white;">Odabir mesta za proslavljanje mature</div>
      </div>
    
      <div class="item">
        <img src="pare.jpg" alt="novac" style="width:100%;">
        <div style = "text-align: center; color: white;">Novčane nagrade, od strane Ministarstva prosvete</div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>











   



</body>
</html>