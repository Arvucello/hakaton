<?php
// Always start this first
session_start();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['submit'] )) {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_dbname = "ucenici";
        
        
        $db = mysqli_connect($db_host, $db_user, $db_pass,$db_dbname) or die ("Greska pri povezivanju.");
        $k_ime = $_POST['uname'];
        $lozinka = $_POST['psw'];
        
    
        $query = "SELECT * FROM ucenikk WHERE (username = '$k_ime' AND sifra = '$lozinka')";
        $result = mysqli_query($db,$query);
        //$query1="SELECT id FROM ucenikk WHERE (username='$k_ime' AND sifra='$lozinka')";
        //$result1 = mysqli_query($db,$query1);
        //$row = mysqli_fetch_assoc($result1);
       // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        //$active = $row['active'];
        //echo "<script>localStorage.id=".$result1."</script>"; 
        $count = mysqli_num_rows($result);
        if($count > 0) {
           header("Location: index.html");
        //   echo "<script>localStorage.id=".$row."</script>";
        }
        else {
            echo "login neuspesan. Molimo pokusajte ponovo.";
        }
        mysqli_close($db);
    }
}
?>