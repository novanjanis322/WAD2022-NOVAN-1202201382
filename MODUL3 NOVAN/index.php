<?php
  include ('config/connector.php');
  $query = "SELECT * FROM datamobil";
  $result = mysqli_query($conn, $query);
  global $result;
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexmodul3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/style1.css">

</head>
<body>
<section id="navbar" class="sticky-top bg-primary" style="padding-bottom: 10px;padding-top: 10px">
  <ul class="nav">
   <li class="nav-item" style="margin-left: 200px">
      <a class="nav-link active text-white" aria-current="page" href="index.php">
        Home
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white text-opacity-75" href="
      <?php if(mysqli_num_rows($result) > 0) {
      echo "index.php?page=mycar";
    } else {
      echo "index.php?page=additem";
    }?>">
        MyCar
      </a>
    </li>
  </ul>
  </section>

    <?php
        if (isset($_GET['page']) && isset($_GET['id'])) {
            $page = $_GET['page'];
            $id = $_GET['id'];
            switch ($page) {
            case 'detail':
                include "pages/detail-novan.php";
                break;
            case 'edit':
                include "pages/edit-novan.php";
                break;
            default:
                echo "<center><h5>Maaf. Halaman yang anda cari tidak di temukan !</h5></center>";
                break;
            }
        } else if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'mycar':
                    include "pages/listcar-novan.php";
                    break;
                case 'additem':
                    include "pages/add-novan.php";
                    break;
                default:
                    echo "<center><h5>Maaf. Halaman yang anda cari tidak di temukan !</h5></center>";
                    break;
            }
        }
        else {
            include "pages/home-novan.php";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>