<?php
    include ('connector.php');
        $NamaMobil = ($_POST["NamaMobil"]);
        $NamaPemilik = ($_POST["NamaPemilik"]);
        $Merek = ($_POST["Merek"]);
        $Tanggal = ($_POST["Tanggal"]);
        $Deskripsi = ($_POST["Deskripsi"]);
        $foto = $_FILES['File']['name'];
        $foto_tmp = $_FILES['File']['tmp_name'];
        $status = ($_POST["status"]);
        move_uploaded_file($foto_tmp, '../asset/'.$foto);
        $query = "INSERT INTO datamobil (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$NamaMobil', '$NamaPemilik', '$Merek', '$Tanggal', '$Deskripsi', '$foto', '$status' )";
        mysqli_query($conn, $query); 
        $result = mysqli_query($conn, $query);

        if ($result) {
            header('Location: ../index.php?page=mycar');
        } else {
            echo 'Gagal';
        }
?>
