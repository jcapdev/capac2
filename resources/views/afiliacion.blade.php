@extends('layouts.head')
<link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" />
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtxtu3JKW43c8apkj-PIO4SQWv779rOeM&callback=initMap&v=weekly" defer></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
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
                                        <h1 class="internal-titles"><span class="internal-number">4</span> AFILIACIÓN
                                        </h1>
                                        <hr class="solid">
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <p class = "white-text-college" style="position:initial;color:white">Únete al Colegio de Arquitectos de Puebla y disfruta de beneficios exclusivos. Conéctese con sus pares influyentes, asista a eventos profesionales, obtenga representación y promoción, encuentre oportunidades laborales y recursos profesionales. ¡Únete hoy y lleve su carrera de construcción al siguiente nivel
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container marketing white-section">
            <div class="square">
                <form action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" id="form-exit">
                        @if(Session::has("success"))
                        <p id="sentmsg" class="confirm">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" width="70" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg></span><br><br>
                            ¡Recibimos su solicitud, Gracias!
                        </p>
                        @elseif(Session::has("failed"))
                        <p id="notsentmsg" class="confirm">
                            <label class="icon-confirm"><strong>X</strong></label><br><br>
                            No se pudo enviar su solicitud, por favor intente más tarde...
                        </p>
                        @endif

                        <div class="col-md-5">
                            <input type="text" id="fname" name="fname" class="form-field" placeholder="Nombre" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <input type="text" id="lname" name="lname" class="form-field" placeholder="Apellido" required>
                        </div><br><br>
                        <div class="col-md-5">
                            <input type="email" id="email" name="email" class="form-field" placeholder="Email" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <input type="number" id="phone" name="phone" class="form-field" placeholder="Teléfono" required>
                        </div><br><br>
                        <div class="col-md-12">
                            <textarea type="textbox" id="message" name="message" class="form-field" placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-2">
                            <input type="submit" id="button" class="button-form" value="ENVIAR">
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                </form>
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