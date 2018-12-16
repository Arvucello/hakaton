
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
              <h2 class="tekst">Najbolje rangirani ucenici:<h2>

<?php 
//             Always start this first
session_start();

        $db_user = "root";
        $db_host = "localhost";
        $db_pass = "";
        $db_dbname = "ucenici";
        
        
        // $db = mysqli_connect($db_host, $db_user, $db_pass,$db_dbname) or die ("Greska pri povezivanju.");
        // for($i=3; $i<14;$i++){
        //     $query = "SELECT ime FROM odeljenja WHERE id='$i' ";
        //     $result = mysqli_query($db,$query);
        //     var_dump($result);
        //     while($row = mysqli_fetch_assoc($result)){
        //         echo $row['ime'];
        //     }     
        // }
        
        
        $db = mysqli_connect($db_host, $db_user, $db_pass, $db_dbname) or die ("Greska pri povezivanju.");
     
            $query = "SELECT * FROM ucenikk";
            $result = mysqli_query($db,$query);
            ?>
            <div class='ucenici'>
                <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                
                <div class='row' style = "margin-left: 250px;">

                <div class='col-sm-2'>
                    <?php
                    echo "<h4>".$row['ime']."<h4>";
?>
                </div>
                <div class='col-sm-2'>
                    <?php
                    echo "<h4>".$row['prezime']."<h4>";
?>
                </div>
                <div class='col-sm-2'>
                    <?php
                    echo "<h4>".$row['odeljenje']."<h4>";
                
                ?>
                </div>
                <div class='col-sm-2'>
                    <?php
                    echo "<h4>".$row['skola']."<h4>";
?>
                </div>
                <div class='col-sm-2'>
                    <?php
                    echo "<h4>".$row['poeni']."<h4>";
?>
                </div>
                </div>
                <?php
            } 
        ?>
        
   
        </div>
    
        <div class="rrr"><button type="button" class="btn btn-light ppbtn"  style = "display: inline-block;"><a class="tekst1" href="oliga.php">Odeljenjska liga</a></button></div>
        
    <div class="rrr"><button type="button" class="btn btn-light ppbtn"  style = "display: inline-block;"><a class="tekst1" href="prod.php">Prodavnica poena</a></button></div>
    <html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>


  </body>




  
</body>
</html>