<?php
$url  = "http://localhost:8080/wedding/";
$data = file_get_contents('assets/js/list.json');
$list = json_decode($data, true);
$list = $list["list"];

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  if(empty($_POST['nama']))
  {
    header('Location: ' . $url. 'dashboard.php');
    exit();
  }

  if(file_exists('assets/js/list.json'))
  {
    $message = [
      'nama' => $_POST['nama'],
      // 'alamat' => $_POST['alamat'],
      'pesan' => $_POST['pesan'],
    ];

    $list[] = $message;

    if(file_put_contents('assets/js/list.json', json_encode(['list' => $list])))
    {
      header('Location: ' . $url. 'dashboard.php');
      exit();
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wedding Ceremony Desy & Sofyan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.webp" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

    <audio id="playAudio"autoplay loop>
        <source src="sound/Di_Sepertiga_Malam.mp3">
    </audio>

    <div class="audio-button">
      <button onclick="stopAudio()" type="button" class="btn btn-outline-danger small" id="stopButton"><i class="bx bx-volume-mute"></i></button>
      <button onclick="playAudio()" type="button" class="btn btn-outline-primary small" id="playButton"><i class="bx bxs-volume-full"></i></button>
    </div>

      <!-- <h1 class="logo mr-auto"><a href="index.html"><img src="assets/img/weding.webp" class="img-fluid" alt=""></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#hero" class="logo mr-auto"><img src=""></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
		 <li>
			  <audio autoplay>
				<source src="" type="audio/mpeg">
			  </audio>
		  </li>
          <li class="active"><a href="#hero">Home</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Buku Tamu</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <div> 
    <!-- <marquee direction="up" scrollamount= "10" onstart='this.start()' onmouseover='this.stop()' onmouseout='this.start()' > -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center text-white">
    <div class="container position-relative">
      <div class="row">
        <div class="col-md-4 col-12 d-flex align-items-stretch  text-align-center">
          
        </div>
        <div class="col-md-4 col-12 d-flex align-items-stretch  justify-content-center">
          <img src="assets/img/weding.webp" class="img-fluid mb-3" width="50%" alt="">
        </div>
        <div class="col-md-4 col-12 d-flex align-items-stretch  text-align-center">
          
        </div>
      </div>
      <h1 class="mb-3">Wedding Invitation</h1>
      <p>Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri dan menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?</p>
      <p>QS. An Nahl ayat 72</p>
      <!-- <a href="#services" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services team section-bg">
      <div class="container">

          <div class="section-title">
            <h2>The wedding Of</h2>
          </div>

            <div class="row mt-5">
              <div class="col-lg-4 col-md-8 d-flex align-items-stretch mx-auto d-block" data-aos="zoom-in" data-aos-delay="100">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/ds.webp" class="img-fluid " alt="">
                    <div class="social">
                      <!-- <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a> -->
                      <a href="https://www.instagram.com/desylindaw/" target="_blank"><i class="icofont-instagram"></i></a>
                      <!-- <a href=""><i class="icofont-linkedin"></i></a> -->
                    </div>
                  </div>
                  <div class="member-info">
                    <h1 class="wedding">Desy Lindawati</h1>
                    <span>Putri Dari Bapak Suliman dan Ibu Sutinah</span>
                    <!-- <span>Ngebung Rt 003 / RW 002 Ngebung, Kalijambe, Sragen</span> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-8 d-flex align-items-stretch mx-auto d-block" data-aos="zoom-in" data-aos-delay="100">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/sd.webp" class="img-fluid" alt="">
                    <div class="social">
                      <!-- <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a> -->
                      <a href="https://www.instagram.com/sofyanardy12/" target="_blank"><i class="icofont-instagram"></i></a>
                      <!-- <a href=""><i class="icofont-linkedin"></i></a> -->
                    </div>
                  </div>
                  <div class="member-info">
                    <h1 class="wedding">Sofyan Ardi Wibowo</h1>
                    <span>Putra Dari Bapak Pariyo dan Ibu Wagiyem</span>
                    <!-- <span>Nanggulan Rt 002 / Rw 007 Gentan, Bendosari, Sukoharjo</span> -->
                  </div>
              </div>
            </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>SAVE DATE</h2>
          <p>Dengan memohon Ridho dan rahmat Allah SWT, kami bermaksud menyelenggarakan Akad Nikah dan Resepsi Pernikahan kami yang InsyaAllah akan dilaksanakan pada :</p>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-12 d-flex align-items-stretch justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <h1 class="wedding">Akad</h1>
              <h5> <b> Hari Ahad, 17 Oktober 2021 </b> </h5>
              <h5> <b>Pukul 08.00 WIB s/d Selesai </b></h5>
              <p>Desa Ngebung Rt 003 / RW 002 Ngebung, Kalijambe, Sragen </p>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 d-flex align-items-stretch mt-4 mt-md-0 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <h1 class="wedding">Resepsi</h1>
              <h5> <b> Hari Ahad, 17 Oktober 2021 </b> </h5>
              <h5> <b>Pukul 10.00 WIB s/d Selesai </b></h5>
              <p>Desa Ngebung Rt 003 / RW 002 Ngebung, Kalijambe, Sragen </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

      <div class="section-title text-white">
        <h2>Amplop Digital</h2>
      </div>

        <div class="text-center">
          <!-- <h3>Call To Action</h3> -->
          <!--<p class="ucapan_thx"> Merupakan Suatu Kehormatan bagi kami apabila Bapak/Ibu/Saudara/i, berkenan hadir untuk memberikan doa restu kepada kedua mempelai. Atas kehadiran dan doa restu Bapak/ibu/sdaura/i kami ucapkan terima kasih</p> -->
		  
		    <p class="ucapan_thx"> Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</p>
          <img src="assets/img/font_footer.webp" class="img-fluid mb-5" width="15%">
            <div class="row">
              <div class="col-md-4 col-12 d-flex align-items-stretch justify-content-center">
                  <!-- <img src="assets/img/dana.webp" class="img-fluid mb-3" width="20%" alt=""> -->
              </div>
              <div class="col-md-4 col-12 d-flex align-items-stretch justify-content-center mt-5">
                  <img src="assets/img/dana.webp" class="img-fluid mb-3" width="20%" alt="">
              </div>
              <div class="col-md-4 col-12 d-flex align-items-stretch justify-content-center">
                  <!-- <img src="assets/img/dana.webp" class="img-fluid mb-3" width="20%" alt=""> -->
              </div>
            </div>
            <img src="assets/img/font_footer.webp" class="img-fluid mb-4" width="15%">
          <h6 class="ucapan_thx"> Scan QRIS DANA dibawah dengan e-Wallet anda</h6>
          <div class="row">
            <div class="col-md-4 col-12 d-flex align-items-stretch  justify-content-center">
              <!-- <img src="assets/img/qris_bca.png" class="img-fluid mb-3" width="50%" alt=""> -->
            </div>

            <div class="col-md-4 col-12 d-flex align-items-stretch  justify-content-center mb-3">
                <img src="assets/img/qris_dana.png" class="img-fluid mb-5" width="50%" alt="">
            </div>
        
            <div class="col-md-4  d-flex align-items-stretch  justify-content-center">
              <!-- <img src="assets/img/qris_dana.png" class="img-fluid mb-3" width="50%" alt=""> -->
            </div>
          </div>

          <div class="row">
              <div class="col-md-4 col-12 d-flex align-items-stretch justify-content-center">
                  <!-- <img src="assets/img/dana.webp" class="img-fluid mb-3" width="20%" alt=""> -->
              </div>
              <div class="col-md-4 col-12 d-flex align-items-stretch justify-content-center">
                  <img src="assets/img/bca.webp" class="img-fluid mb-3" width="20%" alt="">
              </div>
              <div class="col-md-4 col-12 d-flex align-items-stretch justify-content-center">
                  <!-- <img src="assets/img/dana.webp" class="img-fluid mb-3" width="20%" alt=""> -->
              </div>
            </div>
          <img src="assets/img/font_footer.webp" class="img-fluid mb-4" width="15%">
          <div class="text-center">
              <h6 class="ucapan_thx"> No. Rekening </h6>
              <div class="col-lg-3 mx-auto d-block">
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control " id="pilih" placeholder="Alamat" value="1530476321" readonly/>
                </div>
              </div>
              <h6 class="ucapan_thx"> A/n Desy Lidawati</h6>
              <button type="button" class="btn btn-outline-warning mt-3" onclick="copy_text()">Copy Rekening</button>
          </div>
        </div> 

      </div>
    </section><!-- End Cta Section -->
  </main><!-- End #main -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Buku Tamu</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d494.52606054791926!2d110.836378!3d-7.4421704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0f4c7f281967%3A0xe383af98f0cc2b29!2sWedding%20Desy%20dan%20Sofyan!5e0!3m2!1sid!2sid!4v1620099377350!5m2!1sid!2sid" width="90%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  <p>Kebayanan II, Ngebung, Kec. Kalijambe, Kabupaten Sragen, Jawa Tengah 57275</p>
                  <a href="https://goo.gl/maps/cn5HPhVDXAfDeS6y7" class="btn btn-outline-warning mt-3" target="_blank"> Location</a>
                  <!-- <a href="#services" class="btn-get-started scrollto">Get Started</a> -->
                  <!-- <img src="assets/img/hero.webp" class="image_fluid" width="90%" alt=""> -->
                </div>
              </div>
              
            </div>

          </div>

          <div class="col-lg-6 mx-auto d-block">
            <form id="myform" action="<?= $url . 'dashboard.php'; ?>" method="POST" class="php-email-form">
              <h4>Isi Pesan Disini</h4>
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                </div>
                <!-- <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" data-msg="Please enter a valid email" required/>
                </div> -->
              </div>
              <div class="form-group text-center">
                <textarea class="form-control" name="pesan" rows="7" data-rule="required" data-msg="Please write something for us" placeholder="Pesan Buat Mempelai" required></textarea>
              </div>
              <div class="text-center submit">
                <!-- <button class="btn btn-outline-warning mt-3" type="submit" onClick='inputdata()'>Send Message</button> -->
                <!-- <input type="submit" class="btn btn-outline-warning mt-3" id="bth" name="btn" value="Send Message"> -->
                <button type="submit" class="btn btn-outline-warning mt-3">Kirim Pesan</button>
              </div>
            </form>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="owl-carousel testimonials-carousel">
        <?php if(!empty($list)) : ?>
          <?php foreach ($list as $row) : ?>
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?= $row["pesan"]; ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-6.png" class="testimonial-img" alt="">
              <h3><?= $row["nama"]; ?></h3>
              <!-- <h4><?= $row["alamat"]; ?></h4> -->
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center justify-content-center">
          <!-- <h3>Call To Action</h3> -->
          <!--<p class="ucapan_thx"> Merupakan Suatu Kehormatan bagi kami apabila Bapak/Ibu/Saudara/i, berkenan hadir untuk memberikan doa restu kepada kedua mempelai. Atas kehadiran dan doa restu Bapak/ibu/sdaura/i kami ucapkan terima kasih</p> -->
		  
		    <p class="ucapan_thx"> Dikarenakan sedang dalam masa pandemi, tanpa mengurangi rasa hormat, diharapkan seluruh tamu dapat mengikuti protokol kesehatan yang dianjurkan oleh pemerintah</p>
          <img src="assets/img/font_footer.webp" class="img-fluid " width="15%"></br></br>
        
        <div class="col-md-12 col-12 d-flex">
          <!-- <img src="assets/img/weding.webp" class="img-fluid mb-3" width="50%" alt=""> -->
          <img src="assets/img/corona.webp" class="img-fluid " width="100%">
        </div>
          <!-- <a class="cta-btn" href="#">Call To Action</a> -->
        </div>

      </div>
    </section><!-- End Cta Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

      <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          <strong><span>Desy & Sofyan</span></strong>  &copy; 2021. Wedding Ceremony
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
            <!-- Designed by <a href="https://wa.me/6281375142009" target="_blank">Support Developer</a> -->
          </div>
      </div>
      <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </footer><!-- End Footer -->   
<!-- </marquee> -->
</div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/auto_scroll.js"></script>

  <script type="text/javascript">
    function copy_text() {
        document.getElementById("pilih").select();
        document.execCommand("copy");
        // alert("Text berhasil dicopy");
    }
</script>

  <script>

        $("#bukaTombol").click(function () {
            $("#content").fadeIn(3000);
            $('#bukaUndangan').modal("hide");
            var x = document.getElementById("playAudio");
            var y = document.getElementById("playButton");
            var z = document.getElementById("stopButton");
            x.play();
            y.style.display = "none";
            z.style.display = "block";
        });

    var x = document.getElementById("playAudio");
        var y = document.getElementById("playButton");
        var z = document.getElementById("stopButton");
        z.style.display = "none";
        function playAudio() {
            x.play();
            y.style.display = "none";
            z.style.display = "block";
        }

        function stopAudio() {
            x.pause();
            y.style.display = "block";
            z.style.display = "none";
        }
    </script>
    

</body>

</html>