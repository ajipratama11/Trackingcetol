<?php 
// mengaktifkan session php
session_start();
require'fungsi.php';
if(isset($_SESSION["login"])) {
  header("location: indexlogin.php");
  exit;
}
if(isset($_SESSION["loginadmin"])) {
  header("location: location:ci319/assets/adminlte24/pages/forms/welcome.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BABOOK</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


   

 

    <!-- Custom styles for this template -->
    <link href="./css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Babook</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">ARTIKEL</a>
            <!--</li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Tentang Babook</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Status Gizi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="text-left">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bayi Book</div>
          <div class="intro-heading text-uppercase">Cara mudah pantau kondisi anak</div>
           <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#user">Login</button>
           
          <!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"></a>-->

        </div>
      </div>
      </div>
    </header>


<!-- admin-->
     <div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelby="myLargeModalLabel" aria-hidden="true">
     
      <div class="modal-dialog modal-col" role="document">
       <div class="modal-content">
            
            <div class="modal-body">
            <form action="loginadmin.php" style="margin: 20px 40px " align="center" method="post" class="navbar-form">
              <button align="left-0" type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             <h2 class="text-uppercase text-center">LOGIN Admin</h2><br><br>
             <p style=" font-size: 15px" >Login sebagai <a class="portfolio-link" href="#user" data-toggle="modal" data-dismiss="modal">User</a></p>
             <div class="input-group">
               <span class="input-group-addon"><i class="fas fa-user" style="margin-right: 10px; margin-top: 3px"></i></span>
                <input type="text" name="username" class="form-control" value="" placeholder="username" required autofocus="">
             </div>
             <br/>
              <div class="input-group">
               <span class="input-group-addon"><i class="fas fa-lock" style="margin-right: 10px; margin-top: 3px"></i></span>
                <input type="password" name="password" class="form-control" value="" placeholder="password" required autofocus="">
             </div>
             <br/>
              <br/>
              <input class="btn btn-primary btn-xl" data-toggle="modal" type="submit" value="Kirim">
          
          </form>
            <?php 
                    if(isset($_GET['pesanadmin'])){
                      if($_GET['pesanadmin'] == "gagal"){
                        echo "<script>
                    alert('Gunakan username/password yang sudah ditetapkan Dinas Kesehatan');
                  </script>" ;
                     }
                    }?> 
          
          </div>
          </div>
          </div>
       </div>

        
<!-- user-->
    <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelby="myLargeModalLabel" aria-hidden="true">
     
      <div class="modal-dialog modal-col" role="document">
       <div class="modal-content">
            
            <div class="modal-body">
            <form action="loginuser.php" style="margin: 20px 40px " align="center" method="post" class="navbar-form">
              <button align="left-0" type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             <h2 class="text-uppercase text-center">LOGIN USER</h2><br><br>
           <p style=" font-size: 15px" >Login sebagai <a class="portfolio-link" href="#admin" data-toggle="modal" data-dismiss="modal">Admin</a></p>
             <div class="input-group">
               <span class="input-group-addon"><i class="fas fa-user" style="margin-right: 10px; margin-top: 3px"></i></span>
                <input type="text" name="nama" class="form-control" value="" placeholder="" required autofocus="">
             </div>
             <br/>
              <div class="input-group">
               <span class="input-group-addon"><i class="fas fa-lock" style="margin-right: 10px; margin-top: 3px"></i></span>
                <input type="password" name="sandi" class="form-control" value="" placeholder="password" required autofocus="">
             </div>
             <br/>
          
             <p style=" font-size: 15px" >Belum punya akun? <a class="portfolio-link" href="#daftar" data-toggle="modal" data-dismiss="modal">Daftar</a></p>
              <br/>
              <input class="btn btn-primary btn-xl" data-toggle="modal" type="submit" value="Kirim">
               
          </form>
          <?php 
                    if(isset($_GET['pesan'])){
                      if($_GET['pesan'] == "gagal"){
                        echo "<script>
                    alert('username/sandi salah, silahkan ulangi login');
                  </script>" ;
                     }
                    }?> 
          </div>
          </div>
          </div>
       </div>

<!-- daftar-->
<div>
<?php 


if (isset($_POST["daftar"])) {
  
  if (daftar($_POST)>0) {
    echo "<script>
    alert('Selamat Bergabung!');
    </script>";

    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}

 ?> 
  <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-col" role="document">
       <div class="modal-content">
            <div class="modal-body">
            <form action="" style="margin: 20px 40px " align="center" method="post" class="navbar-form">
              <button align="left-0" type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             <h2 class="text-uppercase text-center">DAFTAR</h2><br><br>
           
            <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 20px">Nama Anda : </label>
                  <input type="text" name="nama" class="form-control" placeholder="nama lengkap" required autofocus="">
                </div><br>
             <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 60px">No HP : </label>
                  <input type="text" name="no_hp" class="form-control" placeholder="nomor telepon" required autofocus="">
                </div><br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 63px">Email : </label>
                  <input type="text" name="email" class="form-control" placeholder="email" required autofocus="">
                </div><br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 53px">Alamat : </label>
                  <input type="text" name="alamat" class="form-control" placeholder="alamat" required autofocus="">
                </div><br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 63px">Sandi : </label>
                  <input type="password" name="sandi" class="form-control" placeholder="sandi" required autofocus="">
                </div><br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 10px">Ulangi sandi : </label>
                  <input type="password" name="sandi2" class="form-control" placeholder="sandi" required autofocus="">
                </div>
                  <p style=" font-size: 15px" >Sudah punya akun? Silahkan <a class="portfolio-link" href="#user" data-toggle="modal" data-dismiss="modal">Login</a></p>
              <div>
              <input class="btn btn-primary" data-toggle="modal" type="submit" value="DAFTAR" name="daftar">
              </div>
            </form>
            </div>
          </div>
          </div>
        </div>
        </div>




<div class="login-modal modal fade mt-5" id="editdulu" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto mt-5">
                <div class="modal-body">
               <p>Harap Login Terlebih Dahulu</p> 
                     
                </div>
              </div>
        </div>
    </div>
</div>
</div>
</div>

      
    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">AYO! CEK KONDISI BALITA ANDA</h2>
            <h3 class="section-subheading text-muted">daftar mudah, informasi terjamin dari Dinas Kesehatan</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <a href="#editdulu" data-toggle="modal" data-dismiss="modal"><img class="mx-auto rounded-circle" src="img/team/kalender.jpg" alt=""></a>
              <h4>Jadwal Imunisasi</h4>
              <p class="text-muted">Jadwal teratur vaksin dan PPI balita</p>
              <ul class="list-inline social-buttons">
                              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <a href="#editdulu" data-toggle="modal" data-dismiss="modal"><img class="mx-auto rounded-circle" src="img/team/menu.jpg" alt=""></a>
              <h4>Menu Sehat Balita</h4>
              <p class="text-muted">Pastikan Balita mendapat asupan yang sesuai</p>
              <ul class="list-inline social-buttons">
          
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <a href="#editdulu" data-toggle="modal" data-dismiss="modal"><img class="mx-auto rounded-circle" src="img/team/grafik.jpg" alt=""></a>
              <h4>Perhitungan serta Pantauan Perkembangan Balita</h4>
              <p class="text-muted">Memuat kondisi balita serta pantauan Perkembangan Balita melalui Grafik</p>
              <ul class="list-inline social-buttons">
                
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
             <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#user">Login/Daftar</button>
           
          </div>
        </div>
      </div>
    </section>
    

       

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">ARTIKEL</h2>
            <h3 class="section-subheading text-muted">Baca artikel untuk menambah pengetahuan</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <a href="hiburan.php"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-smile fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Hiburan</h4>
            <p class="text-muted">Berbagai hiburan untuk balita.<br>Untuk mengembangkan motorik anak.</p>
          </div>
          <div class="col-md-4">
            <a href="tips.php"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-info fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Tips</h4>
            <p class="text-muted">Tips dan trik agar lebih efisien.</p>
          </div>
          <div class="col-md-4">
            <a href="penyakit.php"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-user-md fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Penyakit</h4>
            <p class="text-muted">Dapatkan pengetahuan tentang penyakit.<br>Serta, penanganan untuk penyakit.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Threads</h4>
              <p class="text-muted">Illustration</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Explore</h4>
              <p class="text-muted">Graphic Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Finish</h4>
              <p class="text-muted">Identity</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Lines</h4>
              <p class="text-muted">Branding</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Southwest</h4>
              <p class="text-muted">Website Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Tentang BABOOK</h2>
            <h3 class="section-subheading text-muted">Babook adalah Sistem Informasi multiplatfrom berbasis web yang berguna membantu para ibu untuk memantau perkembangan balitanya agar dapat tumbuh sehat. Dengan informasi yang diberikan oleh Dinas Kesehatan langsung, maka akan membuat ibu merasa terjamin dalam memmantau perkembangan anak. </h3>
          </div>
        </div>
      </div>
    </section>
       <!-- <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div> -->
     




    <!-- Contact -->
    <div>
      <div>
<?php 


if (isset($_POST["kontak"])) {
  
  if (kontak($_POST)>0) {
    echo "<script>
    alert('Terimakasih!');
    </script>";

    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}

 ?> 
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Kontak kami</h2>
            <h3 class="section-subheading text-muted">kirim Kritik dan Saran</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" name="nama" type="text" placeholder="Nama" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email " required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="telpon" type="tel" placeholder="Telepon" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" name="pesan" placeholder="Pesan" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                   <div class="input-group">     
                  
                  
                  <input type="hidden" name="tanggal_cek" class="form-control"  placeholder="" required autocomplete="off" value=<?php date ("Y-m-d")  ?>>
               </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" name="kontak" class="btn btn-primary btn-xl text-uppercase" type="submit">Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    </div>
  </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
