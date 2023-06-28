
  @extends('layouts.head')
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
  <!-- Bootstrap core CSS -->  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/carousel.css" rel="stylesheet"/>
  

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  

  <!-- Custom styles for this template -->
</head>
<body>
  <header>
    @extends('layouts.navbar')
  </header>

  <main style="margin-top: -49px;">
    <div class="container-fluid">
      <div class="row">      
        <div class="col-md-12 col-lg-12 col-xl-12">
          <div id="SliderStatic">
            <div>
              <div class="carousel-item active" style="height: 30rem;background-color: #FF1B21;">                  
                <div class="carousel-caption" id = "titleinterior"> 
                                     
                    <h2 class = "featurette-heading" id = "textmisionCont" style="color:#fff"><a style="font-family: Roboto Medium;">2</a> NOTICIAS</h2>                    
                    <hr id = "linenoticias">
                </div>
                <div class="container">
                  <div id= "banerrigt" class="carousel-caption text-right" style="width: 0%;padding-bottom: 0rem;bottom: 22rem;">
                    <img src="assets/img/logo_CAPAC-BLANCO.png" style="width: 60px;" id = "imgizq"  alt="">                   
                  </div>
                </div>
              </div>          
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
            <div  class="owl-carousel">
                  <div class="card" id = "cardcarouselnoticias">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick.</p>
                        <img src="assets/img/casouseldemo.png" class="card-img-top" alt="...">
                        <div class="card-body">                                
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                  </div>            
                  <div class="card" id = "cardcarouselnoticias">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick.</p>
                        <img src="assets/img/casouseldemo.png" class="card-img-top" alt="...">
                        <div class="card-body">                                
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                  </div>
                  <div class="card" id = "cardcarouselnoticias">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick.</p>
                        <img src="assets/img/casouseldemo.png" class="card-img-top" alt="...">
                        <div class="card-body">                                
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                  </div>
            </div>
    </div>
    <hr class="featurette-divider" style="border-top: none;">   
    <div class="">
      <!-- Footer -->
      @extends('layouts.footer')            
      <!-- Footer -->
    </div>
    <!-- FOOTER -->
  </main>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/carousel.js"></script> 
  <script src="js/script.js"></script>  
  <script src="js/maps.js"></script>    
  <script src="js/nav.js"></script>
</body>
</html>