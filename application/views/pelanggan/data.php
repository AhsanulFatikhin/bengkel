<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" >

    <style>
        body {
            min-height: 1000px;
            background-color: black;
        }
    </style>

    <section class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col text-center"> 
                        <img src="<?php echo base_url('assets/img/logo.jpg') ?>" alt="Logo"  class="center" width="200" style="margin-top: 40px;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-4">
                        <h5 style="color: white;">all field need to be filled in</h5>
                    </div>
                </div>
                <div class="row">
                    <form class="row g-3 justify-content-center">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label" style="color:white">Number Plate</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6 text-end">
                            <label for="inputEmail4" class="form-label" style="color:white">Apply Date</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label" style="color:white">Name Customer</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-12">
                             <label for="inputEmail4" class="form-label" style="color:white">Email Address Customer</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label" style="color:white">HP Number Customer</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-12 text-center mt-4">
                            <h5 style="color: white;">Coating Instaled</h5>
                         </div>
                        <div class="col-md-2 mt-4">
                            <label for="inputEmail4" class="form-label" style="color:white">SI01</label>
                            <input type="email" class="form-control" id="inputEmail4">
                            <h5 class="fs-6" style="color: white; margin-top: 10px">1 Year</h5>
                        </div>
                        <div class="col-md-2 mt-4">
                            <label for="inputEmail4" class="form-label" style="color:white">SI03</label>
                            <input type="email" class="form-control" id="inputEmail4">
                            <h5 class="fs-6" style="color: white; margin-top: 10px">3 Year With SIBC</h5>
                        </div>
                        <div class="col-md-2 mt-4">
                            <label for="inputEmail4" class="form-label" style="color:white">SI05</label>
                            <input type="email" class="form-control" id="inputEmail4">
                            <h5 class="fs-6" style="color: white; margin-top: 10px">5 Year With SIBC</h5>
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="inputEmail4" class="form-label" style="color:white">Lain-lain</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12 mt-4 mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label" style="color:white">Keterangan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>