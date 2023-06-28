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
                                        <h1 class="internal-titles"><span class="internal-number">1</span> COLEGIO
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

        <div class="container marketing college-white">
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/img/imagen-1.jpg" id="stairs" alt="CAPAC">
                    <p class="image-desc">Realizar una vinculación tanto profesional como académica con las principales universidades de la ciudad para promover el trabajo en conjunto con la sociedad.</p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 main-text-space">
                    <p class="white-text-college">La Historia del Colegio estuvo muy ligada a la de escuela de Arquitectura de UAP ya que de aquí
                        también surge la idea de agrupar a los estudiantes de arquitectura en la Sociedad de
                        Arquitectos, para posteriormente formar parte del Colegio de Arquitectos de Puebla.<br><br>
                        A la fecha el Colegio de Arquitectos de Puebla A.C. cuenta con más de 1980 arquitectos
                        agremiados, especialistas en diferentes ramas de la arquitectura.
                    </p>
                    <p class="black-text-college">Fundación del Colegio y de la Sociedad de Arquitectos de Puebla A.C.<br><br>
                        Fue el 22 de abril de 1965, fecha en que se firmaba la escritura constitutiva de la asociación
                        civil.<br><br>
                        El Primer Consejo Directivo es presidido por el Arq. Miguel Pavón Rivero, en los años de 1966 a
                        1968, contando como socios fundadores a:
                    </p>
                </div>
                <div class="col-md-12 separator"></div>
                <div class="col-md-5">
                    <ul class="founders">
                        <li>Elsa Alonso de Bautista</li>
                        <li>Abel Aguirre Terán</li>
                        <li>Mario Bautista O'Farril</li>
                        <li>Amalia Espinosa Rojas</li>
                        <li>Rafael Funes Diaz</li>
                        <li>Fernando García Limón</li>
                        <li>Arturo González Castaños</li>
                        <li>René Guzmán Santos</li>
                        <li>Arnulfo Luna Arévalo</li>
                        <li>Everardo Morales Pardo</li>
                        <li>Darío Alfonso Morales Pérez</li>
                        <li>Miguel Pavón Rivero</li>
                        <li>José Carlos Santillana Mondragón</li>
                        <li>Víctor ManuelTerán Bonilla</li>
                        <li>Sergio Zafra Mata</li>
                    </ul>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <img src="assets/img/Capa-2.jpg" id="building" alt="CAPAC">
                    <p class="image-desc">Lograr la unión de los arquitectos poblanos por un bien común.</p>
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
    <script src="js/nav.js"></script>
</body>

</html>