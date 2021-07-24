<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Covid</title>
    <style type="text/css">
      .judulnya{
        text-align: center;
        margin-top: 200px;
        font-weight: bold;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
        font-size: 40px;
      }
      .card-header{
        text-align: center;
      }
    </style>
  </head>
  <body class="warna bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand text-dark font-weight-bold" href="#">Data Covid</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link text-dark mr-3 font-weight-bold" href="#indonesia">Indonesia</a>
            <a class="nav-item nav-link text-dark mr-3 font-weight-bold" href="#global">Global</a>
            <a class="nav-item nav-link text-dark mr-3 font-weight-bold" href="#provinsi">Provinsi</a>
            <a class="nav-item nav-link text-dark mr-3 font-weight-bold" href="https://saweria.co/mirryusuf">Donasi</a>
            <div id="tombol">
              <button type="button" class="btn btn-outline-dark font-weight-bold">Mode Gelap</button>
            </div>
          </div>
        </div>
      </nav>  
      </div>
      

    <div class="container">
      <h1 class="judulnya text-dark">Data seputar COVID-19 secara tepat dan akurat.</h1>
      <?php 
        $urlindo = file_get_contents('https://api.kawalcorona.com/indonesia');
        $dataindo = json_decode($urlindo, true);
       ?>
      <div id="indonesia"></div>
      <h2 class="judul text-dark" style="margin-top: 100px;">Jumlah Kasus di Indonesia Saat Ini</h2>
      <div class="row" style="margin-top: 30px;">
        <div class="col-lg-6">
          <div class="card mb-3">
            <div class="card-header text-dark">Terkonfirmasi</div>
            <div class="card-body">
              <h5 class="card-title text-center text-dark" style="font-size: 50px;"><?php echo $dataindo[0]["positif"]; ?></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-3" >
            <div class="card-header">Dalam Perawatan</div>
            <div class="card-body">
              <h5 class="card-title text-center" style="font-size: 50px;"><?php echo $dataindo[0]["dirawat"]; ?></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-3" >
            <div class="card-header">Sembuh</div>
            <div class="card-body">
              <h5 class="card-title text-center" style="font-size: 50px;"><?php echo $dataindo[0]["sembuh"]; ?></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-3" >
            <div class="card-header">Meninggal</div>
            <div class="card-body">
              <h5 class="card-title text-center" style="font-size: 50px;"><?php echo $dataindo[0]["meninggal"]; ?></h5>
            </div>
          </div>
        </div>
      </div>
      <div id="global"></div>
      <h2 class="judul text-dark" style="margin-top: 50px;">Jumlah Kasus Global Saat Ini</h2>
      <div class="row" style="margin-top: 30px;">
        <div class="col-lg-4">
          <div class="card mb-3" >
            <div class="card-header">Terkonfirmasi</div>
            <div class="card-body">
              <?php 
                $urlglobalpositif = file_get_contents('https://api.kawalcorona.com/positif');
                $dataglobalpositif = json_decode($urlglobalpositif, true);
               ?>
              <h5 class="card-title text-center" style="font-size: 50px;"><?php echo $dataglobalpositif["value"]; ?></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-3" >
            <div class="card-header">Meninggal</div>
            <div class="card-body">
              <?php 
                $urlglobalmeninggal = file_get_contents('https://api.kawalcorona.com/meninggal');
                $dataglobalmeninggal = json_decode($urlglobalmeninggal, true);
               ?>
              <h5 class="card-title text-center" style="font-size: 50px;"><?php echo $dataglobalmeninggal["value"]; ?></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-3" >
            <div class="card-header">Sembuh</div>
            <div class="card-body">
              <?php 
                $urlglobalsembuh = file_get_contents('https://api.kawalcorona.com/sembuh');
                $dataglobalsembuh = json_decode($urlglobalsembuh, true);
               ?>
              <h5 class="card-title text-center" style="font-size: 50px;"><?php echo $dataglobalsembuh["value"]; ?></h5>
            </div>
          </div>
        </div>
      </div>
      <?php 
        $urlprovinsi = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
        $dataprovinsi = json_decode($urlprovinsi, true);
       ?>
       <div id="provinsi"></div>
      <h2 class="judul text-dark" style="margin-top: 50px;">Jumlah Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h2>
      <table class="table" style="margin-top: 30px;">
        <thead class="thead">
          <tr style="text-align: center;">
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $a = 1;
            foreach ($dataprovinsi as $prv) :
           ?>
          <tr style="text-align: center;">
            <th scope="row"><?php echo $a++; ?></th>
            <td><?php echo $prv['attributes']['Provinsi']; ?></td>
            <td><?php echo $prv['attributes']['Kasus_Posi']; ?></td>
            <td><?php echo $prv['attributes']['Kasus_Semb']; ?></td>
            <td><?php echo $prv['attributes']['Kasus_Meni']; ?></td>
          </tr>
          <?php 
            endforeach;
           ?>
        </tbody>
      </table>
    </div>
    
    <footer class="page-footer font-small blue" style="margin-top: 100px;" >
       <div class="footer-copyright text-center py-3" style="font-weight: bold;">© 2021 Copyright | built by.
          <a href="http://instgram.com/mirryusuf" style="color: #05386B; ">Muhamad Amir Rudin Yusup</a>
       </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>