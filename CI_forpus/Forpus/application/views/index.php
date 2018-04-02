<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Info Perpus</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="assets/css/agency.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/flickity.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="home.html"><img src="assets/img/logos/logo.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.html" style="color: #fed136">Home</a>
            </li>
            <li class="dropdown">
              <button class="dropbtn">BOOKS</button>
              <div class="dropdown-content">
                <a href="<?=base_url()?>index.php/info">Teknik Informatika</a>
                <a href="#">Teknik Elektro</a>
                <a href="#">Perencanaan Wilayah dan Kota</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url()?>">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!--Header-->
    <header class="masthead" >
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" style = "max-height:650px">

          <div class="carousel-item active">
            <img class="d-block w-100 " src="assets/img/Home/itera.jpg" alt="First slide">
              <div id="carousel-caption" class="carousel-caption d-none d-md-block">
                 <div id="capt1">WELCOME TO FORPUS!</div>
                 <div id="capt2">SISTEM INFORMASI PERPUSTAKAAN ITERA</div>
              </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100 " src="assets/img/Home/perpus1.jpg" alt="Second slide">
             <div id="carousel-caption" class="carousel-caption d-none d-md-block">
                 <div id="capt1">WELCOME TO FORPUS!</div>
                 <div id="capt2">SISTEM INFORMASI PERPUSTAKAAN ITERA</div>
              </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100 " src="assets/img/Home/perpus5.jpg" alt="Third slide">
              <div id="carousel-caption" class="carousel-caption d-none d-md-block">
                 <div id="capt1">WELCOME TO FORPUS!</div>
                 <div id="capt2">SISTEM INFORMASI PERPUSTAKAAN ITERA</div>
              </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   

    <!-- Buku Terbaru -->
     <section class="bg-light" id="populer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Buku Terbaru</h2>
            <h3 class="section-subheading text-muted">Berikut adalah daftar buku terbaru perpustakaan ITERA.</h3>
          </div>
        </div>

        <div class="carousel" data-flickity='{ "bgLazyLoad": 2 }'>
        
          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>

          <div>
            <a class="populer-link" data-toggle="modal" href="#populerModal1">
              <div class="carousel-cell" data-flickity-bg-lazyload="assets/img/populer/solved-problems-in-geophysics.jpg"></div>
            </a>
            <div id="caption-populer">
                <h4>Bla bla Bla</h4>
                <p>bla bla bla</p>
            </div>
          </div>
        
        </div>

      </div>
    </section>
           
    <!--end of buku terbaru-->

     <!-- Modal 1 -->
    <div class="populer-modal modal fade" id="populerModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Solve problem in geophysics</h2>
                  <p class="item-intro text-muted">emecahan masalah untuk dalam geofisika untuk mahasiswa teknik geofisika.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/populer/geophysics.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Tahun terbit : 2017</li>
                    <li>Penerbit: Explore</li>
                    <li>Pengarang : Pemaw</li>
                    <li>Prodi: Teknik Informatika</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                  Booking</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="populer-modal modal fade" id="populerModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Solve problem in geophysics</h2>
                  <p class="item-intro text-muted">Pemecahan masalah untuk dalam geofisika untuk mahasiswa teknik geofisika.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/populer/geophysics.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Tahun terbit : 2017</li>
                    <li>Penerbit: Explore</li>
                    <li>Pengarang : Pemaw Safitri</>
                    <li>Prodi: Teknik Geofisika</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    Booking</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="populer-modal modal fade" id="populerModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Calculus</h2>
                  <p class="item-intro text-muted">Matematika dasar I untuk mahasiswa Tahap Persiapa Bersama.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/populer/calculus.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Tahun terbit : 2017</li>
                    <li>Penerbit: TPB</li>
                    <li>Pengarang : Pemaw Edwardson</>
                    <li>Prodi: TPB</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    Booking</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="populer-modal modal fade" id="populerModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/populer/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="populer-modal modal fade" id="populerModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/populer/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="populer-modal modal fade" id="populerModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/populer/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    

  <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Kritik dan Saran</h2>
            <h3 class="section-subheading text-muted" style="color:white">Untuk perkembangan Inpus kritik dan saran dari anda akan berguna untuk kami.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nama anda *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email anda *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Nomor Telpon anda *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Masukan Pesan Anda *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Kirim Saran</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

   <!-- Footer -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <span class="copyright">Copyright &copy; Forpus 2018</span>
            </div>
            <div class="col-md-4">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-inline quicklinks">
                <li class="list-inline-item">
                  <a href="#" style="color:#212529">Privacy Policy</a>
                </li>
                <li class="list-inline-item">
                  <a href="#" style="color:#212529">Terms of Use</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/agency.min.js"></script>
    <script src="assets/js/flickity.pkgd.js"></script>
    <script src="assets/js/bg-lazyload.js"></script>

  </body>

</html>
