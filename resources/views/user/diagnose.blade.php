@include("assets/bootstrap")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
    @yield('assets')
</head>
<body>
    @include("templates.navbar")
    <div class="container card my-4" style="height:80vh; overflow:auto;">
        <div class="card-header p-5">
            <h3>Mulai Diagnosa</h3>
        </div>
        <form method="POST" action="{{ route("cf.postmethod") }}">
            @csrf
            @foreach ($certainty as $c)
                <div class="card-body">
                    <h5>{{ $c['gejala'] }}</h5>
                    <input class="form-checked-input" type="radio" name="{{ $c['id'] }}" value="Yes"/>
                    <label for="{{ $c['id'] }}" class="form-checked-label">Yes</label>
                    <input type="radio" name="{{ $c['id'] }}" value="No" class="form-checked-input"/>
                    <label for="{{ $c['id'] }}" class="form-checked-lalbel">No</label>
                </div>
            @endforeach
            <a href="/result"><input  class="btn btn-primary mx-3 my-2" type="submit" name="submit" value="Submit"/></a>
        </form>
    </div>
</body>
</html>