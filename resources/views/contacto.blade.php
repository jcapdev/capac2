@extends('layouts.head')
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtxtu3JKW43c8apkj-PIO4SQWv779rOeM&callback=initMap&v=weekly"
        defer></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>
    <header>
        @extends('layouts.navbar')
    </header>

    <main style="margin-top: -49px;">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class = "col-md-1" style="background-color: #FF1B21;margin-left: -4px;">
            <img src="assets/img/banerizquierdo.png" style="margin-top: 8px;" alt="">
        </div> -->
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active top-fill">
                                <div class="container">
                                    <!-- <div id="banerrigt" class="carousel-caption text-right">
                                        <img src="assets/img/banerizquierdo.png" id="imgizq" alt="">
                                    </div> -->
                                    <div class="col-md-4 titles">
                                        <h1 class="internal-titles"><span class="internal-number">5</span> CONTACTO
                                        </h1>
                                        <hr class="solid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container marketing white-section">
            <div class="square back-contact">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 text-center">
                        <img src="assets/img/CopiadeCAPAC-BLANCOPNGSINFONDO.png" id="" alt="" class="logo-contact">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <ul class="list-unstyled mb-0 list-contact text-center">
                            <li>
                                <a href="#!" class=""><b>Lunes a viernes</b></a>
                            </li>
                            <li>
                                <a href="#!" class="">9 am – 6 pm</a>
                            </li>
                            <li>
                                <a href="#!" class="">Calzada de los fuertes esquina 22 Oriente.</a>
                            </li>
                            <li>
                                <a href="#!" class="">Conjunto El calvario, Puebla CP 72290</a>
                            </li>
                            <li>
                                <a href="mailto:capac@capac.org.mx" class="">capac@capac.org.mx</a>
                            </li>
                            <li>
                                <a href="tel:2222114432" class=""><b>Tel. 222 211 44 32, 222 211 44 33</b></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="">
            <!-- Footer -->
            @extends('layouts.footer')
            <!-- Footer -->
        </div>
        <!-- FOOTER -->
    </main>

    <script src="js/script.js"></script>
    <script src="js/maps.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>