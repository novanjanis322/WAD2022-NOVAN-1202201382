<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listmobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  @include('layouts.navbar')
  <section id="daftarmobil" style="margin:40px;margin-left:100px;margin-right:360px">
    <h1>
      My Show Room
    </h1>
    <p>
      List Show Novan - 1202201382
    </p>
    <div class="container text-center">
      <div class="row row-cols-3">
      @foreach($showrooms as $data)

            <div class="col">
                <div class='card' style="width:300px;margin-top:30px;overflow:hidden">
                    <img src='{{"/asset/$data->image"}}' alt='' width="100%"  height="180px">
                    <div class="card-body">
                    <h5 class='card-title'>{{$data->name}}</h5>
                    <p class=''>{{strlen($data->description) > 21 ? substr($data->description, 0, 21).'...' : $data->description}}</p>
                    <div class='btn-container'>
                        <a href='/detailcar/{{$data->id}}' type="button" class='btn rounded-pill btn-primary'>Detail</a>
                        <a href='/delete/{{$data->id}}' class='btn rounded-pill btn-danger'>Delete</a>
                    </div>
                </div>
            </div>
      </div>
      @endforeach

    </div>
    </div>
    <br>
    <h5>
      <?php
      echo 'jumlah mobil : ' ;
      ?>{{$showrooms->count();}}
    </h5>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>