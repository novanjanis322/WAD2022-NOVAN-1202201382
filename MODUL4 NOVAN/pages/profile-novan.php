<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section style="margin:50px;padding-left:100px;padding-right:100px">
        <center>
            <h1>
                Profile
            </h1>
            <div style="text-align:left">
                <div class="mb-3 row">
                    <label for="displayemail" class="col-sm-2 col-form-label">email<a style="color:red">*</a></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" name="displayemail" id="displayemail" value="<?php echo $_COOKIE['email']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="displaynama" class="col-sm-2 col-form-label">nama<a style="color:red">*</a></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="displaynama" id="displaynama" value="<?php echo $_COOKIE['nama']; ?>" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="displaynomorhp" class="col-sm-2 col-form-label">nomor hp<a style="color:red">*</a></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="displaynomorhp" id="displaynomorhp" value="<?php echo $_COOKIE['nomorhp']; ?>" >
                    </div>
                </div>
            </div>
        </center>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>