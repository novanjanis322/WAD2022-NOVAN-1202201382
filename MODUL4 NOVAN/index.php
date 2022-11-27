<?php
include('config/connector.php');
$query = "SELECT * FROM datamobil";
$result = mysqli_query($conn, $query);
global $result;

?>
<style>
  #hide {
    display: none
  }
  
</style>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>indexmodul4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  
  <section id="<?= isset($_GET['page']) && in_array($_GET['page'], ['register', 'login']) ? 'hide' : '' ?>" class="sticky-top bg-<?= isset($_COOKIE['navwarna']) ? $_COOKIE['navwarna'] : 'primary' ?>" primary" style="padding-bottom: 10px;padding-top: 10px">
    <nav>
      <ul class="nav" id="">
        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link active text-white" aria-current="page" href="index.php">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link text-white text-opacity-75" href="
      <?php if (mysqli_num_rows($result) > 0) {
        echo "index.php?page=mycar";
      } else {
        echo "index.php?page=additem";
      } ?>">
            MyCar
          </a>
        </li>
        <li style="margin-left:auto;margin-right:30px">
          <a id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" href="<?php echo "index.php?page=additem"; ?>">
            <button class="btn btn-light text-primary" type="button">
              Add Car
            </button></a>
        </li>
        <li style="margin-right:60px">
          <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" href="<?php echo "index.php?page=login"; ?>">
            <button class="btn btn-primary" type="button">
              Login
            </button></a>
        </li>
        <li style="margin-right:60px">
        <div id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>">
          <a id="" href="<?php echo "index.php?page=login"; ?>">
            <div class="dropdown">
              <a class="btn btn-light text-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php if (isset ($_COOKIE['nama'])) {
                  echo $_COOKIE['nama'];
                }  ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo "index.php?page=profile" ?>">Profile</a></li>
                <li><a class="dropdown-item" href="<?php echo "index.php?page=logout" ?>">Log Out</a></li>
              </ul>
            </div>
          </a>
          </div>
        </li>
      </ul>
    </nav>
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
        echo "<center>
                <h5>
                Not Found !!
                </h5>
                </center>";
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
      case 'profile':
        include "pages/profile-novan.php";
        break;
      case 'logout':
        include "config/logout.php";
        break;
      case 'login':
        include "pages/login-novan.php";
        break;
      case 'register':
        include "pages/register-novan.php";
        break;
      default:
        echo "<center><h5>Not Found !!</h5></center>";
        break;
    }
  } else {
    include "pages/home-novan.php";
  }
  ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>