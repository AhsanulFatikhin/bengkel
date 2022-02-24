<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <!-- CSS W3School -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- CSS Custom -->

    <link href="<?php echo base_url('assets/css/company_profile.css') ?>" rel="stylesheet">

    <title>AT Auto detailing</title>

  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: black;">
      <div class="container">
        <!-- <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/logo.jpg') ?>" alt="Logo" width="180" height="50"/></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('company_profile/compro') ?>">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Image Slider -->

    <section class="jumbotron text-center">
      <img src="<?php echo base_url('assets/img/logo.jpg') ?>" alt="Ahsanul Fatikhin" width="400" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">AT Auto Detailing</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L48,117.3C96,107,192,85,288,96C384,107,480,149,576,149.3C672,149,768,107,864,90.7C960,75,1056,85,1152,101.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- About -->

    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col fs-5 text-justify">
            Nama saya Ahsanul Fatikhin yang merupakan anak pertama dari dua bersaudara. Saya lahir di Gresik, 03 September 1997. Saya menempuh pendidikan tinggi di Universitas Internasional Semen Indonesia dengan program study Informatika
            pada tahun 2015 dan lulus pada tahun 2019. Setelah lulus pada tahun 2019 sampai saat ini saya bekerja di PT Sinergi Informatika Semen Indonesia sebagai staff SAP Master Data Specialist.
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc72c" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,154.7C672,128,768,96,864,101.3C960,107,1056,149,1152,165.3C1248,181,1344,171,1392,165.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    
    <!-- Galery -->

    <section id="galery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Galery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-4 text-justify">
            <div class="card" style="height: 400px">
              <img src="<?php echo base_url('assets/img/contoh1.jpg') ?>" class="card-img-top" alt="Galery 1" />
              <div class="card-body">
                <p class="card-text">Coating adalah lapisan penutup yang diterapkan pada permukaan sebuah benda dengan tujuan dekoratif maupun untuk melindungi benda tersebut dari kontak langsung dengan lingkungan</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 text-justify">
            <div class="card" style="height: 400px">
              <img src="<?php echo base_url('assets/img/contoh2.jpg') ?>" class="card-img-top" alt="Galery 2" />
              <div class="card-body">
                <p class="card-text">
                Auto detailing, adalah teknik untuk merawat dan mempercantik penampilan kendaraan, baik mobil atau motor, agar tampil sempurna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 text-justify">
            <div class="card" style="height: 400px">
              <img src="<?php echo base_url('assets/img/contoh3.jpg') ?>" class="card-img-top" alt="Galery 3" />
              <div class="card-body">
                <p class="card-text">Bekleed adalah cara untuk melapisi atau melindungi jok mobil anda dari kotoran. Selain itu fungsi bekleed juga bisa untuk mempercantik interior mobil anda. </p>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-4">
            <div class="card">
              <img src="img/galery/3.jpg" class="card-img-top" alt="Galery 3" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/galery/3.jpg" class="card-img-top" alt="Galery 3" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#FFffff"
          fill-opacity="1"
          d="M0,64L48,69.3C96,75,192,85,288,106.7C384,128,480,160,576,165.3C672,171,768,149,864,154.7C960,160,1056,192,1152,213.3C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Map -->

    <section id="alamat">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2>Alamat</h2>
                </div>
            <div class="row justify-content-center">
              <div class="col-md-8 mb-3">
                <div class="container" style="background-color: white">
                <div id="map" style="width:100%x;height: 300px;background:green"></div> 
                </div>
               </div>
            </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc72c" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,165.3C672,149,768,139,864,133.3C960,128,1056,128,1152,144C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <section id="contact">
      <div class="container mb-4">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>My Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="list-group col-6">
            <a href="#" target="_blank" class="list-group-item list-group-item-action" style="background-color: #ffc72c;"><i class="bi bi-instagram"></i> Instagram </a>
            <a href="#" target="_blank" class="list-group-item list-group-item-action" style="background-color: #ffc72c;"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="https://api.whatsapp.com/send?phone=+6285257826950 &text=Assalamualaikum" target="_blank" class="list-group-item list-group-item-action" style="background-color: #ffc72c;"><i class="bi bi-whatsapp"></i> Whatsapp</a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00000" fill-opacity="1" d="M0,224L48,229.3C96,235,192,245,288,240C384,235,480,213,576,181.3C672,149,768,107,864,112C960,117,1056,171,1152,181.3C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <footer class="text-white text-center pb-5" style="background-color: black;">
      <p>
        Create By
        <a href="https://instagram/ahsanulfatikhin" class="text-white fw-bold">AT Auto Detailing</a>
      </p>
    </footer>

    <script>  
        function Map123() {  
        var mapOptions = {  
            center:new google.maps.LatLng(51.508742,-0.120850),  
            zoom: 10,  
            mapTypeId: google.maps.MapTypeId.HYBRID  
        }  
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);  
        }  
    </script>  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB52N03XVTDkT9ubCHfdiRG6FJIWmSI9ek&callback=Map123">
    </script>  
    <script src="<?php echo base_url('assets/js/company_profile.js') ?>"></script>
  </body>

</html>
