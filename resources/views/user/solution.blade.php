@include("assets.bootstrap")

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    @yield('assets')
</head>
<body>
    <h1>Solusi Untuk Kerusakan Anda</h1>
    <h5>Lakukan beberapa langkah dibawah ini:</h5>
    @foreach ($solusi as $s)
        <p>{{ $s['solution'] }}</p>
    @endforeach
</body>
</html>