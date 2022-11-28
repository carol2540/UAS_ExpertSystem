@include("assets.bootstrap")

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    @yield('assets')
</head>
<body>
    @include("templates.navbar")
    <div class="container pt-5">
        <h2>Solusi Untuk Kerusakan "{{ $kerusakan['Kerusakan'] }}"</h2>
        <div class="card p-5 my-4">
            <h5>Lakukan beberapa langkah dibawah ini:</h5>
            @foreach ($solusi as $s)
                <p>{{ $s['solution'] }}</p>
            @endforeach
        </div>
    </div>
</body>
</html>