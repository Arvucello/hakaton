<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel = "stylesheet" href = "style.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <div class="jumbotron">
        <h1 style="text-align: center; font-family: 'Courier New', Courier, monospace;">Digitalna škola</h1> 
    </div>
    <section class="login-block">
        <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Prijavi se</h2>
    <form class="login-form" action = "verify.php" method = "post">
      <div class="form-group">
        <label for="exampleInputEmail1" class="text-uppercase">Korisničko ime</label>
        <input type="text"  name="uname" style = "border-radius: 7px;" required>

        
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="text-uppercase">Lozinka</label>
        <input type="password" name="psw" style = "border-radius: 7px; margin-left: 56px;" required>
      </div>
      
      <?php ?>     
        <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          <small>Zapamti me</small>
        </label>
        <input type="submit" name = "submit" class="btn btn-login float-right">
      </div>
      
    </form>
   
    </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>Mogućnosti aplikacije</h2>
                <p>Uz pomoć ove aplikacije možete da učite lekcije, vežbate preko testova i zarađivanjem poena obezbedite sebi vredne nagrade!</p>
            </div>	
      </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="2.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>Poeni i rang liste</h2>
                <p>Rešavanjem testova, vežbom u određenom roku, kao i pružanjem pomoći drugima zarađujete poene. Broj poena određuje Vaše mesto na rang listi. Kada prikupite dovoljan broj poena možete ih zameniti za neku od nagrada.</p>
            </div>	
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="3.jpeg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>Učenje sa lakoćom</h2>
                <p>Sve poteškoće sa školskim predmetima i ocenama će uz malo truda biti brzo rešene. Srećno!</p>
            </div>	
        </div>
      </div>
                </div>	   
                
            </div>
        </div>
    </div>
    </section>
</body>
</html>