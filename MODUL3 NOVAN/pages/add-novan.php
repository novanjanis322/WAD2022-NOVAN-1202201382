
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add mobil</title>
    <link rel="stylesheet" href="web.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  
  <section id="tambahmobil" style="margin:40px;margin-left:100px;margin-right:360px">
    <h1>
        Tambah Mobil
    </h1>
    <p class="text-black-50">
        Tambahkan mobil baru anda ✨
    </p>
    <br><br>

    <form action="config/insert.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
  <label for="NamaMobil" class="form-label">
    <h5>Nama Mobil</h5>
  </label>
  <input type="text" class="form-control" name="NamaMobil" id="NamaMobil" placeholder="super-gt">
</div>
    <div class="mb-3">
  <label for="NamaPemilik" class="form-label">
    <h5>Nama Pemilik</h5>
  </label>
  <input type="text" class="form-control" name="NamaPemilik" id="NamaPemilik" placeholder="Novan - 1202201382">
</div>
    <div class="mb-3">
  <label for="Merek" class="form-label">
    <h5>Merek</h5>
  </label>
  <input type="text" class="form-control" name="Merek" id="Merek" placeholder="Super Car">
</div>
    <div class="mb-3">
  <label for="Tanggal" class="form-label">
    <h5>Tanggal beli</h5>
  </label>
  <input type="date" class="form-control" id="Tanggal" name="Tanggal">
</div>
    <div class="mb-3">
  <label for="Deskripsi" class="form-label">
    <h5>Deskripsi</h5>
  </label>
  <textarea  class="form-control" id="Deskripsi" name="Deskripsi" style="height:200px" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry.
   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."></textarea>
</div>
    <div class="mb-3">
  <label for="foto" class="form-label">
  <h5>Foto</h5>
  </label>
    <input class="form-control" type="file" id="foto" name="File" >
</div>
    <h5>Status Pembayaran</h5>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas">
  <label class="form-check-label" for="inlineRadio1">Lunas</label>
</div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="belumlunas" value="Belum Lunas">
  <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
</div>
<br><br>
  <button class="btn btn-primary" name="submit" type="submit" style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 30px">
        Selesai
      </button>
    </form>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>