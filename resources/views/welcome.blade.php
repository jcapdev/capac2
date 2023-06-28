<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPAC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">  
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtxtu3JKW43c8apkj-PIO4SQWv779rOeM&callback=initMap&v=weekly" defer></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


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
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div id = "mousescroll">
              <img src="assets/img/scrolldown.png" alt="">
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">                
                <video style="margin-bottom: 100px;" id = "videomovildesk" width="auto" height="auto" autoplay loop muted>
                  <source src="assets/img/BannerAnimadoLoop.mp4" type="video/mp4" />
                </video>
                <video style="margin-bottom: 100px;" id = "videobanermovil" width="auto" height="auto" autoplay loop muted>
                  <source src="assets/img/ColegioArquitectos_BannerAnimadoLoop_Movil.mp4" type="video/mp4" />
                </video>
                <video style="margin-bottom: 100px;" id = "videobanermovil_680" width="auto" height="auto" autoplay loop muted>
                  <source src="assets/img/ColegioArquitectos_BannerAnimadoLoop_Movil_680.mp4" type="video/mp4" />
                </video>
                <div class="container">
                  <div id= "banerrigt" class="carousel-caption text-right">
                    <img src="assets/img/banerizquierdo.png" id = "imgizq"  alt="">                   
                  </div>
                  <!-- <div class="carousel-caption text-left">
                      <h1>Example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                      metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div> -->
              </div>
            </div>          
          </div>
          <a class="carousel-control-prev" id = "previcon" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    </div>
    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <div class="row featurette">
        <div class="col-md-4">
          <img src="assets/img/marcoRojoAnimado.gif" id = "imgrectangulo"  alt="">
          <span class="num"  data-val="647"></span>
          <!-- <span class= "text">Afiliados actualmente al Colegio de Arquitectos de Puebla</span> -->
          <p class="lead" id = "textmision">Afiliados actualmente al Colegio de Arquitectos de Puebla</p>
        </div>
        <div class="col-md-4">
          <h2 class="featurette-heading" id = "textmisionCont">MISIÓN</h2>
          <p class="lead" id = "text-leadcont">Lograr la unión de los <strong>arquitectos de Puebla</strong>  para que, mediante el trabajo conjunto y la permanente búsqueda de las acciones óptimas para el ejercicio profesional integral, se beneficie a la sociedad poblana.</p>
        </div>
        <div class="col-md-4" style="text-align: center;">
          <img src="assets/img/instrumento.png" id="instrumento"  alt="">
        </div>
      </div>
      <!-- Three columns of text below the carousel -->
      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
    <hr class="featurette-divider">
    <!-- paralax -->
    <div id="gremial">
      <div class="paralax">
        <div class="container">
          <div class="text-organismo" id = "textcard" >
            <h1 class="featurette" id = "titleorganismo">Organismo gremial</h1>
            <p class="lead" id = "leadtextgremial" >Esta conformado por profesionales que tienen jurisdicción dentro del <b>estado de Puebla</b>, que dentro de sus competencias tiene la representación de sus miembros ante la <b>Federación de Colegios de Arquitectos de la República Mexicana</b>.</p>
          </div>
        </div>
      </div>
      <div id = "marketing"class="container marketing">
        <div class="row" id = "margintop-marketing" style="background-color: #ffff;margin-top: -349px;position: relative;border-radius: 25px;-webkit-box-shadow: 3px 8px 37px -7px rgba(0,0,0,0.75);-moz-box-shadow: 3px 8px 37px -7px rgba(0,0,0,0.75);box-shadow: 3px 8px 37px -7px rgba(0,0,0,0.75);">
          <div class="col-md-6">
            <img src="assets/img/capac_paralax_img2.jpg" id = "imgcapac1"  alt="" srcset="">
          </div>
          <div class="col-md-6">
            <div class="text-organismo"  id = "text-organismoinfo" style="text-align: left;">
              <h1 class="featurette" id = "featuretteid" style="color:black">Vinculación profesional y académica</h1>
              <p class="lead" id = "leadcard" style="color:black">Te invitamos a formar parte de nuestra institución.</p>
              <p id = "btndiv"><a id = "btninscrib" class="btn btn-lg btn-danger" href="afiliacion" role="button">INSCRIBIR</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="myCarousel3" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="height: 42rem;">
          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div style="text-align:left" class="col-md-4 col-sm-4 col-xl-6">
                  <h1 id = "titleeventos">Eventos y congresos arquitectura</h1>
                  <p id = "textevents">Ven y construyamos con nuestras propias manos este nuevo inicio.</p>
                </div>
                <!-- Foreach valores de la bd--> 

                @foreach ($noticiashomes as $noticiashome)                
                <div class="col-md-4 col-sm-4 col-xl-3">
                  <div class="card">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="card flip-card-front">
                          <img src="assets/img/arquitectura_moderna.png" alt="Avatar">
                            <div style="position: absolute;" class = "container">
                              <p id = "textcardeventos">{{ $noticiashome->title }}</p>  
                            </div>
                        </div>
                        <div class="card flip-card-back">
                          <a href="https://www.facebook.com/photo?fbid=728182149311683&set=a.506514441478456" target="_blank">
                            <img src="assets/img/arqmonjaraz.jpg" class="card-img-top" alt="">
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">{{ $noticiashome->autor }}</h5>
                          </div>
                          <div class = "container" style="background-color: #ffff;">
                            <div class = "row">
                                <div class = "col-md-2" >
                                    <img src="assets/img/reloj-de-pared.png" id  = "imgrelogpared" alt="">
                                </div>
                                <div class = "col-md-10"> 
                                  <ul class = "listadocartas" style="background-color: white;margin-left: -35px;line-height: 31px;" >
                                    <li class="calendartext">{{ $noticiashome->date }}</li>
                                    <li class="timetext">{{ $noticiashome->time }}</li>
                                    <li class="localitationtext">{{ $noticiashome->place }}</li>
                                  </ul>  
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                
                @endforeach
                
                <!-- <div class="col-md-4 col-sm-4 col-xl-3">
                  <div class="card">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="card flip-card-front">
                          <img src="assets/img/sede.png" alt="Avatar">
                            <div style="position: absolute;" class="container">
                              <p id="textcardeventos">Asamblea General Ordinaria.</p> 
                              <p id="textcardeventos" style="margin-top: 50px;margin-bottom: -72px;">5 de Julio</p>
                              <p style="text-align: left;color: white !important;font-size: inherit;text-transform: uppercase;padding-left: 2px;padding-right: 2px;">primera convocatoria 9:30
                              segunda convocatoria 10:00 
                              lugar Calzada de los Fuertes y 22 oriente conjunto El Calvario, Barrio El Alto</p>
                            </div>
                        </div>
                        <div class="card flip-card-back" style=" padding: 1px;">
                          <a href="assets/file/CAPAC_Asamblea.pdf" target="_blank">
                            <img src="assets/img/capaccom.jpg" alt="Avatar" style="width: 100%;height: auto; margin-top: 21px;">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-md-4 col-sm-4 col-xl-3">
                  <div class="card">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="card flip-card-front">
                          <img src="assets/img/arquitectura_moderna.png" alt="Avatar">
                            <div style="position: absolute;" class="container">
                              <p id="textcardeventos">Arquitectura Moderna</p>  
                            </div>
                        </div>
                        <div class="card flip-card-back">
                          <a href="https://www.facebook.com/photo?fbid=728182149311683&amp;set=a.506514441478456" target="_blank">
                            <img src="assets/img/arqmonjaraz.jpg" class="card-img-top" alt="">
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">Charla con el Arquitecto Lucio Muniain</h5>
                          </div>
                          <div class="container" style="background-color: #ffff;">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="assets/img/reloj-de-pared.png" id="imgrelogpared" alt="">
                                </div>
                                <div class="col-md-10"> 
                                  <ul class="listadocartas" style="background-color: white;margin-left: -35px;line-height: 31px;">
                                    <li class="calendartext">2023-05-30</li>
                                    <li class="timetext">19:00</li>
                                    <li class="localitationtext">Colegios de Arquitectos de Puebla</li>
                                  </ul>  
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>        
      </div>
      <a class="carousel-control-next" href="#myCarousel3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div id="gremial" class = "gremialmovilcarousel" style="height: 57pc;">
    <div class = "container" id ="myCarousel4" style="margin-top: -167px;">
         <div class = "row">
            <div style="padding-left: 70px;padding-right: 70px;" class="col-md-4  col-xl-6">
                  <h1 id = "titleeventos">Eventos y congresos arquitectura</h1>
                  <p id = "textevents">Ven y construyamos con nuestras propias manos este nuevo inicio.</p>
            </div>
            <div id="myCarousel4" class="carousel slide" style="padding-left: 70px;padding-right: 70px;" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class = "carousel-item active" style="height: 34rem;margin-bottom: 44px;" id="carousel-itemMov ">
                    <div class="card" style="height: 362px;">
                      <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="card flip-card-front">
                            <img src="assets/img/arquitectura_moderna.png" alt="Avatar">
                              <div style="position: absolute;" class = "container">
                              <p id = "textcardeventos">Arquitectura Moderna</p>  
                              </div> 
                          </div>
                          <div class="card flip-card-back">
                            <a href="https://www.facebook.com/photo?fbid=731482378981660&set=a.506514441478456" target="_blank"><img src="assets/img/arqmonjaraz.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                              <h5 class="card-title">Charla con el Arquitecto Rafael Monjaraz</h5>
                            </div>
                            <div class = "container" style="background-color: #ffff;">
                              <div class = "row">
                                  <div class = "col-2 col-md-2" >
                                      <img src="assets/img/reloj-de-pared.png"  id  = "imgrelogpared" >
                                  </div>
                                  <div class = "col-10 col-md-10"> 
                                    <ul class = "listadocartas" style="background-color: white;margin-left: -35px;line-height: 31px;" >
                                      <li class="calendartext">13 junio 2023</li>
                                      <li class="timetext">19:00 hrs.</li>
                                      <li class="localitationtext">Colegio de Arquitectos de Puebla</li>
                                    </ul>  
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                                  
                  </div>
                  <div class = "carousel-item" id="carousel-itemMov">
                    <div class="card" style="height: 362px;">
                      <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="card flip-card-front">
                            <img src="assets/img/arquitectura_moderna.png" alt="Avatar">
                              <div style="position: absolute;" class = "container">
                              <p id = "textcardeventos">Arquitectura Moderna</p>  
                              </div> 
                          </div>
                          <div class="card flip-card-back">
                              <a href="https://www.facebook.com/photo?fbid=728182149311683&set=a.506514441478456" target="_blank"><img src="assets/img/muniain.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                            <h5 class="card-title">Charla con el Arquitecto Lucio Muniain</h5>
                            </div>
                            <div class = "container" style="background-color: #ffff;">
                              <div class = "row">
                                  <div class = "col-2 col-md-2" >
                                      <img src="assets/img/reloj-de-pared.png" style="height: auto;margin-left: 2px;position: sticky;width: 30px;margin-top: 6px;" alt="">
                                  </div>
                                  <div class = "col-10 col-md-10"> 
                                    <ul class = "listadocartas" style="background-color: white;margin-left: -35px;line-height: 31px;" >
                                      <li class="calendartext">13 junio 2023</li>
                                      <li class="timetext">19:00 hrs.</li>
                                      <li class="localitationtext">Colegio de Arquitectos de Puebla</li>
                                    </ul>  
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                                  
                  </div>
                  <div class = "carousel-item" id="carousel-itemMov">
                    <div class="card" style="height: 362px;">
                      <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="card flip-card-front">
                          <img src="assets/img/sede.png" alt="Avatar">
                            <div style="position: absolute;" class="container">
                              <p id="textcardeventos">Asamblea General Ordinaria.</p> 
                              <p id="textcardeventos" style="margin-top: 50px;margin-bottom: 33px;">5 de Julio</p>
                              <p style="text-align: left;color: white !important;font-size: inherit;">primera convocatoria 9:30
                              segunda convocatoria 10:00 
                              lugar Calzada de los Fuertes y 22 oriente conjunto El Calvario, Barrio El Alto</p>
                            </div>
                          </div>
                          <div class="card flip-card-back">
                          <a href="assets/file/CAPAC_Asamblea.pdf" target="_blank">
                            <img src="assets/img/capaccom.jpg" alt="Avatar" style="width: 100%;height: auto; margin-top: 21px;">
                          </a>
                          </div>
                        </div>
                      </div>
                    </div>                                  
                  </div>
               </div>      
            </div>
         </div> 
     </div>
    </div>   
     


    <div  id= "sectmapa">
      <div id="map"></div>
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