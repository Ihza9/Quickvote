<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="Css/style.css">


    <title>Homepage</title>
</head>

<body>
  <header class="">
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="index.php">QuickVote</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link active mx-1" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1" href="about.php">Tentang QuickVote</a>
            </li>
            <button type="button" class="btn btn-danger" onclick="window.location.href='pilkert/page/auth/login.php'">Login</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='pilkert/page/auth/register.php'">Register</button>
        </div>
        <button id="btn-mobile"><i class="fa fa-bars"></i></button>
      </div>
    </nav>
  </header>
  <!-- Carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/1.jpg" class="d-block w-100 c-img" alt="First Slide">
        <div class="carousel-caption  d-md-block">
          <h5 class="display-1 fw-bolder text-uppercase">Innovative E-Voting Solutions</h5>
          <p class="mt-5 fs-3 text-capitalize">"Solutions For Your Online Success"</p>
          <button type="button" class="btn px-4 py-2 fs-5 mt-5" onclick="window.location.href='pilkert/page/auth/login.php'">Voting Sekarang</button>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="Images/2.jpg" class="d-block w-100 c-img" alt="Second Slide">
        <div class="carousel-caption  d-md-block">
          <h5 class="display-1 fw-bolder text-uppercase">Stunning With Our Services</h5>
          <p class="mt-5 fs-3 text-capitalize">"Transform Your Ideas"</p>
          <button class="btn px-4 py-2 fs-5 mt-5" onclick="window.location.href='about.php'">Baca Selengkapnya</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/3.jpg" class="d-block w-100 c-img" alt="Third Slide">
        <div class="carousel-caption  d-md-block">
          <h5 class="display-1 fw-bolder text-uppercase">Trusted </h5>
          <p class="mt-5 fs-3 text-capitalize">"Building Your Digital Presence"</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Services -->
  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Syarat<em> Pelaksanaan</em></h2>
            <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <img src="Images/Web.jpg" alt="">
            <div class="down-content">
              <h4>NIK KTP</h4>
              <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.
              </p>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <img src="Images/UI.jpg" alt="">
            <div class="down-content">
              <h4>No.HP</h4>
              <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.
              </p>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="service-item">
            <img src="Images/Cybersecurity.jpg" alt="">
            <div class="down-content">
              <h4>Registrasi Akun</h4>
              <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.
              </p>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About -->
  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="left-content">
            <h2><span class="text-dark">Apa itu</span> <em> QuickVote? </em></h2>
            <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus
              laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue.
              <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut
              posuere ante tortor ut neque.
            </p>
            <a href="about.html" class="filled-button">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQ -->
  <div class="faq" id="faq">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="fw-semibold border-bottom pb-2" data-aos="fade-right" data-aos-duration="1000">
            Pertanyaan <br />
            Yang Bisa di Tanyakan
          </h2>
        </div>
      </div>
      <div class="row row-cols-lg-2 row-cols-1 g-4 pt-4 mb-5">
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Apakah Wajib Membuat Akun?</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam magnam, placeat excepturi
                  quisquam similique mollitia explicabo doloribus nostrum aspernatur quas voluptas non accusantium quia
                  architecto
                  obcaecati et officiis! Dolor.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bagaimana Cara Registrasi Akun?</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam magnam, placeat excepturi
                  quisquam similique mollitia explicabo doloribus nostrum aspernatur quas voluptas non accusantium quia
                  architecto
                  obcaecati et officiis! Dolor.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Apakah Harus Menggunakan NIK KTP?</button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam magnam, placeat excepturi
                  quisquam similique mollitia explicabo doloribus nostrum aspernatur quas voluptas non accusantium quia
                  architecto
                  obcaecati et officiis! Dolor.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Apakah Harus Memakai No.HP</button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam magnam, placeat excepturi
                  quisquam similique mollitia explicabo doloribus nostrum aspernatur quas voluptas non accusantium quia
                  architecto
                  obcaecati et officiis! Dolor.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQ -->
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-item">
          <h4>Media Sosial</h4>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
        <!-- Contact -->
        <div class="col-md-3 footer-item">
          <h4>Kontak</h4>
          <ul class="menu-list">
            <li><a href="#">E-mail : QuickVote@quickVote.co.id</a></li>
            <li><a href="#">Telp. +62 9301 2942</a></li>
            <li><a href="#">Fax. +62 7442 1932</a></li>
          </ul>
        </div>
        <!-- Additional Pages -->
        <div class="col-md-3 footer-item">
          <h4>Additional Pages</h4>
          <ul class="menu-list">
            <li><a href="#">About Us</a></li>
            <li><a href="admin/">Administrator</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Copyright -->
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; 2023 QuickVote Co, All Rights Served.
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="./js/script.js?v=<?= time();?>"></script>
</body>

</html>
