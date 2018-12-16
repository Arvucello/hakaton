<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel ="stylesheet" href= "stil.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body><?php 
session_start();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['submit'] )) {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_dbname = "ucenici";
    
        
        
        $db = mysqli_connect($db_host, $db_user, $db_pass,$db_dbname) or die ("Greska pri povezivanju.");
        $k_ime = $_SESSION['username'];
        $lozinka = $_SESSION['sifra'];
        echo "<h1>".$k_ime."</h1>";
    }
}

?>
<nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Digitalna škola</a>
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
 <div class="poz">
              <img src="avatar.png"><br>
              Ime: Nikola <br>
              Prezime: Petrovic<br>
              Odeljenje: IV4<br>
              Skola: Prva beogradska gimnazija<br>
              Poeni: 86<br>
              Mesto na rang listi (Pojedinačna): 11.<br>
              Mesto na rang listi(Odeljenska): 4.
</div>
<a type = "button" class = "btn btn-success" href = "index.html" style = "position: absolute; height: 50px; font-size: 200%; margin-left: 500px; margin-top: 30px;">Povratak na početnu stranu</a>
</body>
</html>
