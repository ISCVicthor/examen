<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("css/estilos.css")}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>@yield("title")</title>
</head>
<body>
<header class="bg-secondary">
   <div id="hp">
        <br>
        <div class="row" class="row font-weight-bold" id="h1">
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"><h3>TEMPLATE</h3></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1">CONTACT</div>
            <div class="col-md-1">LOGIN</div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
        </div>
        <br>
   </div>
</header>
<section class="container" >
    @yield("content")
    <div id="col">
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    </div>
</section>
<footer class="bg-secondary text-white " class="bg-primary text-center">
    <div id="f1">
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">LOCATION</div>

            <div class="col-md-3">AROUND THE WEB</div>

            <div class="col-md-3">ABOUT FREELANCER</div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div id="f2">
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">3481 Melrose place</div>

            <div class="col-md-3"></div>

            <div class="col-md-3">Freelance is a free to use open source</div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">Beverly Hills, CA.90210 </div>

            <div class="col-md-3">
                <span><i class="fab fa-facebook-f"></i></span>
                <span><i class="fab fa-google"></i></span>
                <span><i class="fab fa-twitter"></i></span>
                <span><i class="fab fa-linkedin"></i></span>
                <span><i class="fab fa-browser"></i></span>
            </div>

            <div class="col-md-3">Bootstrap theme created by start</div>
            <div class="col-md-1"></div>
        </div>
        <div class="row" id="let">
            <div class="col-md-1"></div>
            <div class="col-md-3"></div>

            <div class="col-md-3"></div>

            <div class="col-md-3">Bootstrap</div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="row" id="copy">
        <div class="col-md-1"></div>
        <div class="col-md-3"></div>

        <div class="col-md-3">Copyrigth @ Author 2014</div>

        <div class="col-md-3"></div>
        <div class="col-md-1"></div>
    </div>
</footer>
</body>
</html>
