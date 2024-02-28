<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .main {
        height: 100vh;
    }

    .register-box {
        width: 500px;
        border: solid blueviolet 1px;
        padding: 20px;

    }

    form div {
        margin-bottom: 15px;
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if ($errors->any())
        <div class="alert alert-danger" style="width: 500px">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success" style="width: 500px">
        {{ Session('message') }}
      </div>
      @endif
        <div class="register-box">
            <form action="" method="post">
                @csrf
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" >
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" >
                </div>
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div>
                    <label for="namalengkap" class="form-label">NamaLengkap</label>
                    <input type="text" name="namalengkap" id="namalengkap" class="form-control">
                </div>
                <div>
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="alamat" id="alamat" class="form-control" rows="5" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Register</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>