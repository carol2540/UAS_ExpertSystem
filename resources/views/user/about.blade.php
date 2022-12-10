@include("assets/bootstrap")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>About</title>

    <style>
        img{
            height: 40vh;
            overflow: hidden;
        }

        .cardname{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 12vh;
        }

        .img:hover{
            height: 50vh;
            width : auto;
        }
    
    </style>
    @yield('assets')
</head>
<body>
    @include("templates.navbar")
    <div class="container">
        <div class="row  d-flex align-items-center justify-content-center">
            <div class="card text-center col-sm-3 m-3 p-3">
                <img class="card-img-top" src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/fe853eb5-e5f8-453d-915e-63c71ce0cdc6.jpeg?w=750&q=90" alt="">
                <div class="card-body">
                    <div class="cardname">
                        <h3>Vanness Iwata</h3>
                    </div>
                    <h5>00000046190</h5>
                </div>
            </div>
            <div class="card text-center col-sm-3 m-3 p-3">
                <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/fe853eb5-e5f8-453d-915e-63c71ce0cdc6.jpeg?w=750&q=90" alt="">
                <div class="card-body">
                    <div class="cardname">
                        <h3>Alan Prastowo</h3>
                    </div>
                    <h5>00000051557</h5>
                </div>
            </div>
            <div class="card text-center col-sm-3 m-3 p-3">
                <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/fe853eb5-e5f8-453d-915e-63c71ce0cdc6.jpeg?w=750&q=90" alt="">
                <div class="card-body">
                    <div class="cardname">
                        <h3>Charisma Christ Anugrah</h3>
                    </div>
                    <h5>00000043903</h5>
                </div>
            </div>
            <div class="card text-center col-sm-3 m-3 p-3">
                <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/fe853eb5-e5f8-453d-915e-63c71ce0cdc6.jpeg?w=750&q=90" alt="">
                <div class="card-body">
                    <div class="cardname">
                        <h3>Klaudius Carol Illona Banu</h3>
                    </div>
                    <h5>00000050432</h5>
                </div>
            </div>
            <div class="card text-center col-sm-3 m-3 p-3">
                <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/fe853eb5-e5f8-453d-915e-63c71ce0cdc6.jpeg?w=750&q=90" alt="">
                <div class="card-body">
                    <div class="cardname">
                        <h3>Kezia Ivena Tania</h3>
                    </div>
                    <h5>00000042845</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>