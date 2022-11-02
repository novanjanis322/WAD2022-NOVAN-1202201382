<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Modul 2 WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
   
  <section class="sticky-top" id="navbar" style="background-color: black; padding-bottom: 10px;padding-top: 10px">
  <nav>
  <ul class="nav justify-content-center" >
   <li class="nav-item">
      <a class="nav-link active text-secondary" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-secondary" href="Novan_booking.php">Booking</a>
    </li>
    
  </ul>
  </nav>  
  
  </section>
  
  <section class="isihalaman" style="margin-left: 20%;margin-right: 20%">
  <center>
    <br><h1>
      WELCOME TO EAD RENT
  </h1>
  <h3><br>❗❗ CHOOSE OUR FINEST CARS HERE ❗❗</h3>
  </center>
  <form action="Novan_booking.php" method="POST" >
  <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
          <div class="card">
            <img src="images_gta-san-andreas_vehicles_super-gt.webp" style="height: 200px;" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Super GT</h5>
              <p class="card-text">150$/day</p>
              <ul class="list-group">
            <li class="list-group-item">Matic</li>
            <li class="list-group-item">Capacity: 2 adult person max</li>
            <li class="list-group-item">max speed: 140 mph</li>
          </ul>
          <center><br><button class="btn btn-primary" type="submit" name="booksupergt" value="super-gt">Book Now</button>
        </center>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images_gta-san-andreas_vehicles_camper.webp"  style="height: 200px;" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Camper</h5>
              <p class="card-text">130$/day</p>
              <ul class="list-group">
                <li class="list-group-item">Manual</li>
                <li class="list-group-item">Capacity: 8 adult person max </li>
                <li class="list-group-item">max speed: 70 mph</li>
                <center><br><button class="btn btn-primary" type="submit" name="bookcamper"value="bookcamper">Book Now</button>
              </center>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images_gta-san-andreas_vehicles_police.webp" style="height: 200px;" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">Police Car</h5>
              <p class="card-text">200$/day</p>
              <ul class="list-group">
                <li class="list-group-item">Matic</li>
                <li class="list-group-item">Capacity: 5 adult person max </li>
                <li class="list-group-item">max speed: 100 mph</li>
                <center><br><button class="btn btn-primary" type="submit " name="bookpolicecar" value="policecar">Book Now</button></center>
              </ul>
            </div>
          </div>
  </form>
        </div>
        
  </section>
  <section id="footer" style="background-color: black; margin-top:30px"><div class="bottom text-light bg-dark" >
      <center>
        <h3>
          <br><a data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;color:white">  © Created by NOVAN_1202201382
          </a>
        </h3>
      </center>
      <br>
    </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>