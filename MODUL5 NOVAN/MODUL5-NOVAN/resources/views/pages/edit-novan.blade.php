<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail mobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  @include('layouts.navbar')
  <?php
  $image = $detail[0]['image'];
  ?>
  <section>
    <div class="container text-justify" style="margin-top:5%">
      <div class="row">
        <div class="col">
          <h1>Detail mobil:</h1>
          <p></p>
          <img style="width:500px;padding-top:30px" src='{{"/asset/$image"}}' alt="">
        </div>
        <div class="col">
            <form method="post" action="/edit/{{$detail[0]['id']}}" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="NamaMobil" class="form-label">
                  <br>
                  <h5>Nama Mobil</h5>
                </label>
                <input type="text" class="form-control" value="{{$detail[0]['name']}}" name="NamaMobil" id="NamaMobil" placeholder="super-gt">
              </div>
              <div class="mb-3">
                <label for="NamaPemilik" class="form-label">
                  <h5>Nama Pemilik</h5>
                </label>
                <input type="text" class="form-control" value="{{$detail[0]['owner']}}" name="NamaPemilik" id="NamaPemilik" placeholder="Novan - 1202201382">
              </div>
              <div class="mb-3">
                <label for="Merek" class="form-label">
                  <h5>Merek</h5>
                </label>
                <input type="text" class="form-control" value="{{$detail[0]['brand']}}" name="Merek" id="Merek" placeholder="Super Car">
              </div>
              <div class="mb-3">
                <label for="Tanggal" class="form-label">
                  <h5>Tanggal beli</h5>
                </label>
                <input type="date" class="form-control" value="{{$detail[0]['purchase_date']}}" id="Tanggal" name="Tanggal">
              </div>
              <div class="mb-3">
                <label for="Deskripsi" class="form-label">
                  <h5>Deskripsi</h5>
                </label>
                <textarea class="form-control" id="Deskripsi" name="Deskripsi" style="height:200px">{{$detail[0]['description']}}</textarea>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">
                  <h5>Foto</h5>
                </label>
                <input class="form-control" type="file" value="" id="foto" name="foto">
                <p>current car image: <b>{{$detail[0]['image']}}</b></p>
              </div>
              <h5>Status Pembayaran</h5>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" value="{{$detail[0]['status']}}" name="status" id="lunas" value="Lunas" checked>
                <label class="form-check-label" for="inlineRadio1">Lunas</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="belumlunas" value="Belum-Lunas">
                <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
              </div>
              <br><br>
          <button class="btn btn-primary booking-cta" type="submit" style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 30px">
            Submit Update
          </button>
        </div>
        </form>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>