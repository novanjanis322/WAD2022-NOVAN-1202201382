<?php
  include ('config/connector.php');
  $query = "SELECT * FROM datamobil";
  $result = mysqli_query($conn, $query);
  global $result;
?>  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <div id="halamanawal">
  <div class="container text-center">
  <div class="row" style="margin-top:170px">
    <div class="col" style="text-align:justify;margin-left:">
      <h1>
        Selamat Datang Di <br> 
        Show Room Novan
      </h1>
      <p>okay guys helo kembali lagi ke jualan mobil. Pada kali ini kita akan <br> 
      melihat showroom mobil novan. Check THIS out.
      <br><br>
      </p>
      <a href="<?php if(mysqli_num_rows($result) > 0) {
      echo "index.php?page=mycar";
    } else {
      echo "index.php?page=additem";
    }?>">
    <button class="btn btn-primary" type="submit" style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 30px">
        MyCar
      </button></a> <br><br><br>
      <img src="asset\logo-ead.png" alt="EAD" width="150px"style="margin-right:30px"> NOVAN_1202201382
    </div>
    <div class="col">
      <img src="asset\images_gta-san-andreas_vehicles_super-gt.webp" width="600px" height="330px" alt="mobilcamper">
    </div>
  </div>
</div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>