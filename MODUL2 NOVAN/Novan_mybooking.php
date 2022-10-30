<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mybooking MODUL 2 WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <section class="sticky-top" id="navbar" style="background-color: black; padding-bottom: 10px;padding-top: 10px">
  <nav>
  <ul class="nav justify-content-center" >
   <li class="nav-item">
      <a class="nav-link active text-secondary" aria-current="page" href="Novan_home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-secondary" href="Novan_booking.php">Booking</a>
    </li>
    
  </ul>
  </nav>  
  
  </section>
    <section id="isihalaman">
        <center>
            <br><br><h2>Thank You NOVAN_1202201382 for Reserving</h2>
            <br><h4>Please double check your reservation details</h4>
    </center>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Car Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service(s)</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr class="table-active">
      <th scope="row">
        <?php echo rand()?>
    </th>
      <td><?php 
        echo $_POST["namanim"];
      ?>
      </td>
      <td><?php $tanggalpesan = strtotime($_POST["datepesan"] . $_POST["jampinjam"]);
        echo date('Y-m-d H:i:s', $tanggalpesan);
      ?></td>
      <td>
        <?php $durasihari = $_POST["durasihari"];
        $tanggalcheckout = strtotime($_POST["datepesan"] . $_POST["jampinjam"]."+$durasihari days ");
        echo date('Y-m-d H:i:s', $tanggalcheckout);
      ?></td>
      <td><?php 
        echo $_POST["pilihmobil"];
      ?></td>
      <td><?php 
        echo $_POST["phonenumber"];
      ?></td>
      <td><ul class="list-group")>
        <?php 
        if(isset($_POST["addservice1"])){
        echo ("<li>Health Protocol <br></li>");
      }if(isset($_POST["addservice2"])){
        echo ("<li>Driver <br></li>");
      }if(isset($_POST["addservice3"])){
        echo ("<li>Fuel Filled <br></li>");
      }if(empty($_POST["addservice1"]) && empty($_POST["addservice2"]) && empty($_POST["addservice3"])){
        echo ("No services");
      }
      
      ?>
      </td>
      </ul>
      <td>
      <?php 
      $mobil = $_POST["pilihmobil"];
      $hari = $_POST["durasihari"];
      if(empty($_POST["durasihari"])){
        $hari = 0;
      }
      if ($mobil=="Super-GT"){
        $totalbiaya = 150*$hari;
        if (isset($_POST["addservice1"])){
          $totalbiaya+=20;
        }
        if (isset($_POST["addservice2"])){
          $totalbiaya+=80;
        }
        if (isset($_POST["addservice3"])){
          $totalbiaya+=220;
        }
        echo ("$$totalbiaya");
      }
      if ($mobil=="Camper"){
        $totalbiaya = 130*$hari;
        if (isset($_POST["addservice1"])){
          $totalbiaya+=20;
        }
        if (isset($_POST["addservice2"])){
          $totalbiaya+=80;
        }
        if (isset($_POST["addservice3"])){
          $totalbiaya+=220;
        }
        echo ("$$totalbiaya");
      }
      if ($mobil=="Police Car"){
        $totalbiaya = 200*$hari;
        if (isset($_POST["addservice1"])){
          $totalbiaya+=20;
        }
        if (isset($_POST["addservice2"])){
          $totalbiaya+=80;
        }
        if (isset($_POST["addservice3"])){
          $totalbiaya+=220;
        }
        echo ("$$totalbiaya");
      }
      
      ?>
      </td>
    </tr>
  </tbody>
</table>


    </section>

  <section id="footer" style="background-color: black"><div class="fixed-bottom text-light bg-dark">
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