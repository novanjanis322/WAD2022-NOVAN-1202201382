<?php
    include('connector.php');
    $id=$_GET['id'];
    $querygambar = mysqli_query($conn, "SELECT foto_mobil FROM datamobil WHERE id_mobil = $id");
    $ambilgambar = mysqli_fetch_assoc($image);

    unlink("../asset/".$ambilgambar['foto_mobil']);

    $query = "DELETE FROM datamobil WHERE id_mobil = $id";
    $result = mysqli_query($conn, $query);

    header('Location: ../index.php?page=mycar');

?>

