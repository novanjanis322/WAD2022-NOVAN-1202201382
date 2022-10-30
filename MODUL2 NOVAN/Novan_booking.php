<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Modul 2 WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <section class="sticky-top" id="navbar" style="background-color: black; padding-bottom: 10px;padding-top: 10px">
  <nav>
  <ul class="nav justify-content-center" >
   <li class="nav-item">
      <a class="nav-link active text-secondary"  href="Novan_home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-secondary" aria-current="page" href="#">Booking</a>
    </li>
    
  </ul>
  </nav>
  </section>
  <section>
    <center> <h2 style="margin-top:40px">Ready to rent a car? Fill in the form here 👇</h2>
    </center>
  </section>
  <section id="isihalaman" style="margin-top:40px">
  <div class="container-fluid">
  <div class="row">
    <div class="col">
     
      <?php
        if (isset($_POST['booksupergt'])){
          echo '<img src="images_gta-san-andreas_vehicles_super-gt.webp" alt="camper" style="width:600px;margin-top:200px;margin-left:50px">';
        }
        if (isset($_POST['bookcamper'])){
          echo '<img src="images_gta-san-andreas_vehicles_camper.webp" alt="camper" style="width:600px;margin-top:200px;margin-left:50px">';
        }
        if (isset($_POST['bookpolicecar'])){
          echo '<img src="images_gta-san-andreas_vehicles_police.webp" alt="camper" style="width:600px;margin-top:200px;margin-left:50px">';
        }
        if (empty($_POST['booksupergt']) && empty($_POST['bookcamper']) && empty($_POST['bookpolicecar'])){
          echo '<img src="images_gta-san-andreas_vehicles_super-gt.webp" alt="camper" style="width:600px;margin-top:200px;margin-left:50px">';
        }
          
      ?>

    </div>
   
    <div class="col" style="margin-right:50px">

    
        <h5>Nama</h5>
        <form action="Novan_mybooking.php" method="post">
        <input class="form-control" name="namanim" type="text" value="NOVAN_1202201382" aria-label="Disabled input example" readonly >
        <br><h5>Tanggal</h5>
        <input class="form-control" type="date" placeholder="DD/MM/YYYY" aria-label="default input example" name="datepesan">
        <br><h5>Start Time</h5>
        <input class="form-control" type="time" placeholder="--:--" aria-label="default input example" id="jampinjam" name="jampinjam">
        <br><h5>Duration (Days)</h5>
        <input class="form-control" type="number" id="durasihari" name="durasihari">
        <br><h5>Car Type</h5>
        <select class="form-select" aria-label="Default select example" name="pilihmobil">
        <?php
        if (isset($_POST['booksupergt'])){
          echo '<option selected value="Super-GT">Super-GT</option> <option value="Camper">Camper</option> <option value="Police Car">Police Car</option>';
        }
        if (isset($_POST['bookcamper'])){
          echo '<option  value="Super-GT">Super-GT</option> <option selected value="Camper">Camper</option> <option value="Police Car">Police Car</option></option>';
        }
        if (isset($_POST['bookpolicecar'])){
          echo '<option  value="Super-GT">Super-GT</option> <option  value="Camper">Camper</option> <option selected value="Police Car">Police Car</option></option>';
        }
        if (empty($_POST['booksupergt']) && empty($_POST['bookcamper']) && empty($_POST['bookpolicecar'])){
          echo '<option selected value="Super-GT">Super-GT</option> <option value="Camper">Camper</option> <option value="Police Car">Police Car</option>';
        }

          
      ?>
            </select>
        <br><h5>Phone Number</h5>
        <input class="form-control" type="text" name="phonenumber">
        <br><h5>Add service(s)</h5>
        <div class="form-check">
      <input class="form-check-input" type="checkbox" value="services" id="flexCheckDefault" name="addservice1">
      <label class="form-check-label" for="flexCheckDefault">
        Health Protocol / $20

      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="services" id="flexCheckChecked" name="addservice2">
      <label class="form-check-label" for="flexCheckChecked">
        Driver / $80
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="services" id="flexCheckChecked" name="addservice3">
      <label class="form-check-label" for="flexCheckChecked">
      Fuel Filled / $220
      </label>
    </div>
    <br>
    <div class="d-grid gap-2 col mb-3">
  <button class="btn btn-success" type="submit" name="submit" >Book
  </button>
  </div>
</form>
    </div>

    </div>

  </div>
    </div>
    <br><br><br><br>
    
  </section>
  <section id="footer" style="background-color: black"><div class="bottom text-light bg-dark" >
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