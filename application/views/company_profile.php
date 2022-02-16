<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" >

    <section class="jumbotron text-center conten-box">
      <img src="<?php echo base_url('assets/img/logo.jpg') ?>" alt="Logo" width="200" style="margin-top: 40px;"/>
         <div class="container col-md-4" style="background-color: white; border-radius: 25px; border: 2px solid #F1DA68;">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-10">
                    <form role="form" method="post" action="<?php echo site_url();?>/pelanggan/proses_login">
                        <div class="mb-3 mt-5">
                            <h4 style="color: #95642D;">SIGN IN</h4>
                        </div>
                        <div class="input-group mb-3 mt-5">
                        <div class="input-group-text" style="background-color: #F1DA68;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #95642D;" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                        </div>
                          <input type="text" class="form-control" placeholder="ID Pelanggan" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 mt-4">
                        <div class="input-group-text" style="background-color: #F1DA68;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #95642D;" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </div>
                          <input type="text" class="form-control" placeholder="No. Hanphone" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" class="btn mb-5 mt-3" style="background-color: #F1DA68; color: #95642D; padding: 5px 70px;">LOGIN</button>
                    </form>
                </div>
            </div>
         </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>