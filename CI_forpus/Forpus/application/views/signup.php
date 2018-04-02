<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forpus</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?=base_url()?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/agency.css ">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css ">
<!--===============================================================================================-->
</head>
<body>
  

    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="home.html"><img src="<?=base_url()?>assets/img/logos/logo.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url()?>">Home</a>
            </li>
            <div class="dropdown-content">
                <a href="views/if-books.html">Teknik Informatika</a>
                <a href="#">Teknik Elektro</a>
                <a href="#">Perencanaan Wilayah dan Kota</a>
              </div>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url()?>index.php/Home/login"  style="color: #fed136">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



  <div class="limiter">
    <div class="container-login100" style="background-image: url('<?=base_url()?>assets/img/home/itera.jpg');">
      <div class="wrap-login100 p-t-190 p-b-30">
        <form class="login100-form validate-form">
          <div class="login100-form-avatar">
            <img src="<?=base_url()?>assets/img/logo.png" alt="AVATAR">
          </div>

          <span class="login100-form-title p-t-20 p-b-45">
            Info Perpustakaan
          </span>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Nama Lengkap is required">
            <input class="input100" type="text" name="name" placeholder="Nama Lengkap">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
            <input class="input100" type="text" name="NIM" placeholder="NIM">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
            <input class="input100" type="text" name="username" placeholder="Nama User">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Sandi">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock"></i>
            </span>
          </div>

          <div class="container-login100-form-btn p-t-10">
            <button class="login100-form-btn">
              Mendaftar
            </button>
          </div>


          <div class="text-center w-full p-t-25 p-b-230">
            <a href="#" class="txt1">
             <!--
             < Forgot Username / Password?
            -->
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?=base_url()?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?=base_url()?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>assets/js/agency.min.js"></script>
  

</body>
</html>