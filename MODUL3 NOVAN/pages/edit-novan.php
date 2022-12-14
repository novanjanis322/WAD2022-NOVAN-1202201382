<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'config/connector.php';
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM datamobil WHERE id_mobil=$id");
    $data = mysqli_fetch_assoc($result);
    ?>
    <section>
        <div class="container text-justify" style="margin-top:5%">
            <div class="row">
                <div class="col">
                    <h1>Edit <?= $data['nama_mobil'] ?></h1>
                    <p>Edit mobil ini</p>
                    <img style="width:500px;padding-top:30px" src="asset/<?= $data['foto_mobil'] ?>" alt="">
                </div>
                <div class="col">
                    <form action="config/edit.php" enctype="multipart/form-data" method="post">
                        <div class="mb-3">
                            <label for="NamaMobil" class="form-label">
                                <br>
                                <h5>Nama Mobil</h5>
                            </label>
                            <input type="text" class="form-control" value="<?= $data['nama_mobil'] ?>" name="NamaMobil" id="NamaMobil" placeholder="super-gt">
                        </div>
                        <div class="mb-3">
                            <label for="NamaPemilik" class="form-label">
                                <h5>Nama Pemilik</h5>
                            </label>
                            <input type="text" class="form-control" value="<?= $data['pemilik_mobil'] ?>" name="NamaPemilik" id="NamaPemilik" placeholder="Novan - 1202201382">
                        </div>
                        <div class="mb-3">
                            <label for="Merek" class="form-label">
                                <h5>Merek</h5>
                            </label>
                            <input type="text" class="form-control" value="<?= $data['merk_mobil'] ?>" name="Merek" id="Merek" placeholder="Super Car">
                        </div>
                        <div class="mb-3">
                            <label for="Tanggal" class="form-label">
                                <h5>Tanggal beli</h5>
                            </label>
                            <input type="date" class="form-control" value="<?= $data['tanggal_beli'] ?>" id="Tanggal" name="Tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="Deskripsi" class="form-label">
                                <h5>Deskripsi</h5>
                            </label>
                            <textarea class="form-control" id="Deskripsi" value="" name="Deskripsi" style="height:200px"><?= $data['deskripsi'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">
                                <h5>Foto</h5>
                            </label>
                            <input class="form-control" type="file" value="" id="foto" name="File">
                        </div>
                        <h5>Status Pembayaran</h5>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas" checked>
                            <label class="form-check-label" for="lunas">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="belumlunas" value="Belum Lunas">
                            <label class="form-check-label" for="belumlunas">Belum Lunas</label>
                        </div>
                        <br><br>
                        <input class="btn btn-primary booking-cta" name="edit" type="submit" value="save" style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 30px">
                        <input type="hidden" name="id" value="<?= $data['id_mobil'] ?>">
                    </form>
                </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>