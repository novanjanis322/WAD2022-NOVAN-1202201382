<?php

include ('connector.php');

 if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $NamaMobil = ($_POST["NamaMobil"]);
    $NamaPemilik = ($_POST["NamaPemilik"]);
    $Merek = ($_POST["Merek"]);
    $Tanggal = ($_POST["Tanggal"]);
    $Deskripsi = ($_POST["Deskripsi"]);
    $foto = $_FILES['File']['name'];
    $foto_tmp = $_FILES['File']['tmp_name'];
    $status = ($_POST["status"]);

    if ($foto_tmp) {
        move_uploaded_file($foto_tmp, '../asset/'.$foto);
        $query = "UPDATE datamobil SET nama_mobil = '$NamaMobil', pemilik_mobil = '$NamaPemilik', merk_mobil = '$Merek', tanggal_beli = '$Tanggal', deskripsi = '$Deskripsi', foto_mobil = '$foto', status_pembayaran = '$status' WHERE id_mobil = $id";
        $result = mysqli_query($conn, $query);
    } else {
        $query = "UPDATE datamobil SET nama_mobil = '$NamaMobil', pemilik_mobil = '$NamaPemilik', merk_mobil = '$Merek', tanggal_beli = '$Tanggal', deskripsi = '$Deskripsi', status_pembayaran = '$status' WHERE id_mobil = $id";
        $result = mysqli_query($conn, $query);
    }
    header('Location: ../index.php?page=mycar');
}
?>

