@include("assets/bootstrap")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('assets')
</head>
<body>
    @include("templates.navbar")
    <div class="container">
        <h1>Diagnose</h1>
        <form method="POST" action="{{ route("cf.postmethod") }}">
            @csrf
            @foreach ($certainty as $c)
                <h5>{{ $c['gejala'] }}</h5>
                <input type="radio" name="{{ $c['id'] }}" value="Yes"/> Yes
                <input type="radio" name="{{ $c['id'] }}" value="No"/> No
            @endforeach
            <br>
            <a href="/result"><input type="submit" name="submit" value="Submit"/></a>
            <br>
        </form>
    </div>
</body>
</html>