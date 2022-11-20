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
    <div class="container card mt-5">
        <h1>Hasil</h1>
        <div class="contenttitle my-3">
            <h3 class="px-3 py-1">Kerusakan :</h3>
        </div>
        @foreach ($combineCf as $key => $value)
            @if ($value == $maxValue)
                <p>{{ $dataKerusakan[$key-1]['Kerusakan'] }}</p>
                <p>Dengan Keyakinan :</p>
                <p>{{ $value * 100 }}%</p>
                <button>Solution</button>
            @endif
        @endforeach
        <div class="contenttitle px-2 my-3">
            <h3 class="px-3 py-1">Kemungkinan Lain :</h3>
        </div>
        @foreach ($combineCf as $key => $value)
            @if($value != 0)
                @if ($value != $maxValue)
                    <p>{{ $dataKerusakan[$key-1]['Kerusakan'] }}</p>
                    <p>Dengan Keyakinan :</p>
                    <p>{{ $value * 100 }}%</p>
                    <button>Solution</button>
                @endif
            @endif
        @endforeach
    </div>
</body>
</html>