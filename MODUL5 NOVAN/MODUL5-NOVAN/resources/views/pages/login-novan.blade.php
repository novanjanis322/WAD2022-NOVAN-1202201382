<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row" style="width: 96vw">
        <div class="col">
            <img src="asset/d35f42f19e061b804deefdd2cc0c0e67.jpg" alt="" style="width:50vw;">
        </div>
        <div class="col">
            <form action="config/login.php" enctype="multipart/form-data" method="POST" style="padding:60px">
                <div class="mb-3">
                    <h2>Login</h2>
                    <label for="email" class="form-label">Email address<a style="color:red">*</a></label>
                    <input type="email" class="form-control" name="email" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password<a style="color:red">*</a></label>
                    <input type="password" class="form-control" name="password" value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] :'' ?>" id="password" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" value="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember me ?
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" style="padding-left: 30px;padding-right: 30px">Login</button>
                <p>belum punya akun? <a href="index.php?page=register">Register</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>