<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Info Perpus</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/books.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/agency.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
    <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?=base_url()?>assets/home.html"><img src="<?=base_url()?>assets/img/logos/logo.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url()?>">Home</a>
            </li>
            <li class="dropdown">
              <button class="dropbtn" style="color: #fed136">BOOKS</button>
              <div class="dropdown-content">
                <a href="<?=base_url()?>index.php/Category/informatika">Teknik Informatika</a>
                <a href="<?=base_url()?>index.php/Category/elektro">Teknik Elektro</a>
                <a href="<?=base_url()?>index.php/Category/pwk">Perencanaan Wilayah dan Kota</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url()?>index.php/Home/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!--Header-->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Forpus!</div>
          <div class="intro-heading text-uppercase">Sistem Informasi Perpustakaan ITERA</div>
          <!-- The form -->
              <form class="example" action="action_page.php">
                <input type="text" placeholder="Temukan Buku Yang Kamu Cari Disini.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
              </form>
        </div>
      </div>
    </header>

    <!-- books Grid -->
    <section class="bg-light" id="books">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">TEKNIK INFORMATIKA</h2>
            <h3 class="section-subheading text-muted">Berikut adalah daftar buku Prodi Teknik Informatika.</h3>
          </div>
        </div>

        <div class="row">

          <div class="col-md-4 col-sm-6 books-item">
            <a class="books-link" data-toggle="modal" href="#booksModal1">
              <div class="books-hover">
                <div class="books-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?=base_url()?>assets/img/books/IF/IF_180324_0020.jpg" alt="">
            </a>
            <div class="books-caption">
              <h4>Algoritma & Pemrograman dalam bahasa Pascal dan C</h4>
              <p class="text-muted">Rinaldi Munir</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 books-item">
            <a class="books-link" data-toggle="modal" href="#booksModal2">
              <div class="books-hover">
                <div class="books-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?=base_url()?>assets/img/books/IF/IF_180324_0018.jpg" alt="">
            </a>
            <div class="books-caption">
              <h4>Rekayasa Perangkat Lunak</h4>
              <p class="text-muted">Rosa A. S & M. Shalahuddin</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 books-item">
            <a class="books-link" data-toggle="modal" href="#booksModal3">
              <div class="books-hover">
                <div class="books-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?=base_url()?>assets/img/books/IF/IF_180324_0016.jpg" alt="">
            </a>
            <div class="books-caption">
              <h4>DATA MINING Mengolah Data Menjadi Informasi Menggunakan Matlab</h4>
              <p class="text-muted">Eko Prasetyo</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 books-item">
            <a class="books-link" data-toggle="modal" href="#booksModal1">
              <div class="books-hover">
                <div class="books-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?=base_url()?>assets/img/books/IF/IF_180324_0020.jpg" alt="">
            </a>
            <div class="books-caption">
              <h4>Algoritma & Pemrograman dalam bahasa Pascal dan C</h4>
              <p class="text-muted">Rinaldi Munir</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 books-item">
            <a class="books-link" data-toggle="modal" href="#booksModal2">
              <div class="books-hover">
                <div class="books-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?=base_url()?>assets/img/books/IF/IF_180324_0018.jpg" alt="">
            </a>
            <div class="books-caption">
              <h4>Rekayasa Perangkat Lunak</h4>
              <p class="text-muted">Rosa A. S & M. Shalahuddin</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 books-item">
            <a class="books-link" data-toggle="modal" href="#booksModal3">
              <div class="books-hover">
                <div class="books-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?=base_url()?>assets/img/books/IF/IF_180324_0016.jpg" alt="">
            </a>
            <div class="books-caption">
              <h4>DATA MINING Mengolah Data Menjadi Informasi Menggunakan Matlab</h4>
              <p class="text-muted">Eko Prasetyo</p>
            </div>
          </div>
        </div>

          <div class="btn-group">
            <button class="btn"> 1 </button>
            <button class="btn"> 2 </button>
            <button class="btn"> 3 </button>
          </div>
          
      </div>
    </section>
    <!--eof books-->

    <!--Modal 1-->
    <div class="populer-modal modal fade" id="booksModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Algoritma & Pemrograman dalam bahasa Pascal dan C</h2>
                  <p class="item-intro text-muted">Rinaldi Munir</p>
                  <img class="img-fluid d-block mx-auto" src="<?=base_url()?>assets/img/books/IF/IF_180324_0020.jpg" alt="">
                  <p>Buku Algoritma dan Pemrograman dalam bahasa Pascal dan C merupakan penggabungan dari dua buah buku sebelumnya, yaitu Algoritma dan Pemrograman dalam Bahasa Pascal dan C (Buku 1) dan Algoritma dan Pemrograman dalam Bahasa Pascal dan C (Buku 2)
                  Materi yang dibahas di dalam Buku ini meliputi :
                  - Konsep dasar algoritma
                  - Tipe, Operator, dan Ekspresi
                  - Struktur dasar pembangunan algoritma: runtunan, pemilihan, pengulangan.
                  - Pemrograman modular: Fungsi dan prosedur
                  - Larik (array)
                  - Matriks 
                  - Algoritma pencarian (searching)
                  - Algoritma pengurutan (sorting)
                  - Arsip beruntun (sequential file)
                  - Algoritma rekursif
                  </p>
                  <ul class="list-inline">
                    <li>Tahun terbit : 2017</li>
                    <li>Penerbit: Informatika</li>
                    <li>Pengarang : Rinaldi Munir</li>
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
    <div class="populer-modal modal fade" id="booksModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Rekayasa Perangkat Lunak</h2>
                  <p class="item-intro text-muted">Rosa A. S & M. Shalahuddin</p>
                  <img class="img-fluid d-block mx-auto" src="<?=base_url()?>assets/img/books/IF/IF_180324_0018.jpg" alt="">Pada buku ini akan membahas tentang analisis dan desain sistem dengan disertai suatu studi kasus untuk memudahkan dalam pemahaman. Analisis dan desain sistem itu dimulai dengan analisis desain basis data, analisis dan desain sistem untuk pemrograman terstruktur dengan menggunakan DFD, dan analisis dan sistem untuk pemrograman berorientasi objek dengan menggunakan UML.
                  Setelah membaca studi kasus tersebut, pembaca diharapkan dapat memahami bagaimana melakukan analisis dan desain sistem untuk pemrograman terstruktur maupun pemrograman berorientasi objek. Untuk menghasilkan analisis dan desain perangkat lunak yang baik, seorang analis seharusnya memahami konsep pemrograman. Tanpa pemahaman konsep pemrograman yang baik, analis tidak mungkin menghasilkan perancangan perangkat lunak yang baik.
                  Pada buku ini juga dijelaskan mengenai tahapan-tahapan yang harus dilakukan dalam rekayasa perangkat lunak serta penjelasan secara umum dalam memanajemen proyek perangkat lunak.
                  </p>
                  <ul class="list-inline">
                    <li>Tahun terbit : 2017</li>
                    <li>Penerbit: Informatika</li>
                    <li>Pengarang : Rosa A. S & M. Shalahuddin</>
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

    <!-- Modal 3 -->
    <div class="populer-modal modal fade" id="booksModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">DATA MINING Mengolah Data Menjadi Informasi Menggunakan Matlab</h2>
                  <p class="item-intro text-muted">Eko Prasetyo</p>
                  <img class="img-fluid d-block mx-auto" src="<?=base_url()?>assets/img/books/IF/IF_180324_0016.jpg" alt="">
                  <p>Meskipun riset ilmu data mining masih terbilang muda, tetapi penerapan dan manfaat yang didapat sangat luas dan besar. Bidang-bidang seperti bisnis, medis, pendidikan, astronomi, meteorologi, dan sebagainya merupakan bidang-bidang yang sangat membutuhkan data mining. Jumlah data yang besar sebagai hasil transaksi dari waktu ke waktu menjadi alasan untuk membongkar informasi apa yang yang dapat dibuka dari bongkahan data yang begitu besar. Karena biaya peawatan rutin dikeluarkan, maka akan menjadi sebuah kerugian jika data tersebut hanya disimpan dan tidak diolah untuk mendapatkan informasi yang berguna demi kemajuan instantsi.
                  Untuk itulah buku ini dibuat agar menjadi panduan yang jelas, lengkap, sistematis, disertai contoh aplikasi MATLAB yang mudah pula untuk diikuti. Buku ini dapat menjadi penambah dan penyempurna secara komperhensif buku kaya penulis sebelumnya, yaitu Data Mining – Konsep dan Aplikasi Menggunakan MATLAB, sehingga pembaca akan merasakan gaya bahasa penyampaian yang sederhana, mudah dimengerti, sama seperti buku sebelumnya. Buku ini cocok digunakan baik oleh mahasiswa, dosen, peneliti, ataupun praktisi yang ingin segera menerapkan ilmu data mining hasil karya para peneliti-peneliti sebelumnya.
                  </p>
                  <ul class="list-inline">
                    <li>Tahun terbit : 2017</li>
                    <li>Penerbit: andi</li>
                    <li>Pengarang : Eko Prasetyo</>
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