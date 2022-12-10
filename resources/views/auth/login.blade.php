<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link rel="stylesheet" href="../css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
  .main{
    height: 100vh;
    background-image: url("https://c4.wallpaperflare.com/wallpaper/412/447/801/texture-simple-background-wallpaper-preview.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    filter: brightness(80%);
    width: 100vw;
  }
  form div{
    margin-bottom: 15px;
  }

</style>
<body>
  <div class="main d-flex justify-content-center align-items-center">
    <div class="card p-5">
      <form action="{{ route("auth.verify") }}" method="POST">
        @csrf
        <div class="text-center wel-text">
          <h5>Sign In</h5>
          <p>Admin Panel</p>
        </div>
        <div>
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control"> 
        </div>
        <div>
          <label for="email" class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control"> 
        </div>
        <div>
          <button type="submit" class="btn btn-primary form-control">Login </button>
        </div>
      </form>


    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>