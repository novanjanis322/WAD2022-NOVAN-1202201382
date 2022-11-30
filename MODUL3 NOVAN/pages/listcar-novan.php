<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listmobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <section id="daftarmobil" style="margin:40px;margin-left:100px;margin-right:360px">
    <h1>
      My Show Room
    </h1>
    <p>
      List Show Novan - 1202201382
    </p>
    <div class="container text-center">
      <div class="row row-cols-3">
        <?php
        include('config/connector.php');
        $result = mysqli_query($conn, 'SELECT * FROM datamobil');
        if ($result) {
          while ($select = mysqli_fetch_array($result)) {
        ?>
            <div class="col">
              <div class="card" style="width:300px;margin-top:30px">
                <img style="height:200px" src="asset/<?php echo $select['foto_mobil']; ?>" class="card-img-top img-card" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $select['nama_mobil'] ?></h5>
                  <p class="card-text">
                    <?php
                    if (strlen($select['deskripsi']) > 21) {
                      echo substr($select['deskripsi'], 0, 21) . "...";
                    } else {
                      echo $select['deskripsi'];
                    }
                    ?>
                  </p>
                  <div class="btn-container">
                    <a href="index.php?page=detail&id=<?= $select['id_mobil'] ?>" class="btn btn-primary rounded-pill">Detail</a>
                    <a href="config/delete.php?id=<?= $select['id_mobil'] ?>" class="btn btn-danger rounded-pill">Delete</a>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>