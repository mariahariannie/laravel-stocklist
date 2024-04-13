<html>
<head>
    <title>TTG Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        body{
	        background-image: var(--bs-gradient);
        }

        .logo-image{
            width: 46px;
            height: 46px;
            border-radius: 50%;
            overflow: hidden;
            margin-top: -6px;
        }
        .carousel-inner{
            width: 100%;
            height: 50%;
            margin: auto;
        }
    </style>
</head>

<body>
    @show
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" href="/">
            <div class="logo-image">
                <img src="https://i.pinimg.com/originals/c8/a5/4c/c8a54c9d5547ba76261a06d2701b6d86.jpg" class="img-fluid">
            </div>
        </a>
        <div id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">HOME<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/stocklist">STOCK LIST<span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <br>
        <h1>Welcome to The Thrift Gallery</h1>
        <h4><i>...it's all about sustainable fashion...</i></h4>
        @yield('content')
    </div>

<!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4">
        <div class="container">
            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
            <!--Facebook-->
                <a href="https://www.facebook.com/the.thrift.galleryfb" target="_blank" class="btn-floating btn-fb mx-1" type="button" role="button">
                    <div class="logo-image">
                        <img src="https://i.pinimg.com/564x/81/7d/a5/817da56d17049312a404173757220263.jpg" class="img-fluid">
                    </div>
                </a>
            <!--Instagram-->
                <a href="https://www.instagram.com/the.thrift.gallery/" target="_blank" class="btn-floating btn-fb mx-1" type="button" role="button">
                    <div class="logo-image">
                        <img src="https://i.pinimg.com/564x/00/ec/b2/00ecb2ae7a45cb32230ba2e9a1f1cc2d.jpg" class="img-fluid">
                    </div>
                </a>
            <!--Pinterest-->
                <a href="https://www.pinterest.ph/arianniesanchez/the-thrift-gallery/" target="_blank" class="btn-floating btn-fb mx-1" type="button" role="button">
                    <div class="logo-image">
                        <img src="https://i.pinimg.com/564x/d6/10/dd/d610dd1c225cde159dbf97b830d92eb3.jpg" class="img-fluid">
                    </div>
                </a>
            </ul>
        </div>

        <div class="footer-copyright text-center py-3">Since 2020
            <a href="https://www.instagram.com/the.thrift.gallery/" target="_blank">the.thrift.gallery</a>
        </div>
    </footer>
</body>
</html>