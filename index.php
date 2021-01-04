<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ABSEN</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://mhsonline.bsi.ac.id/aset1/css/tiwen.css' rel='stylesheet' type='text/css'>
  <link href="http://mhsonline.bsi.ac.id/aset1/css/style.css" rel="stylesheet">
  <link href="http://mhsonline.bsi.ac.id/aset1/css/style-responsive.css" rel="stylesheet">

  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



</head>

<body>

  <div class="page-content">

    <div class="col-md-12">
      <h2>Halaman Login Absensi</h2>
    </div>
    <!--/col-md-12-->

    <div class="row">

      <div class="col-md-4">
        <div class="block-web">
          <div id="dynamic-table_wrapper" class="dataTables_wrapper ">

            <div class="row">
              <div class="col-md-12">

                <div class="porlets-content">
                  <form action="http://mhsonline.bsi.ac.id/login/cek" method="post" parsley-validate novalidate>
                    <div class="header" style="background:#2e3236 !important;">
                      <div class="actions"> <a class="minimize" href="#"></a> </div>
                      <h3 class="content-header" style="color:#FFFFFF;">Form Login</h3>
                    </div>
                    <!-- </form> -->
                </div>
                <br>

                <div class="porlets-content">

                  <div class="form-group">
                    <label>NIM</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" name="username" parsley-trigger="change" required placeholder="No Induk Mahasiswa, ex: 12191960" class="form-control">
                    </div>
                  </div>
                  <!--/form-group-->
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input id="pass1" type="password" name="password" placeholder="Password, ex: 2002-02-02" required class="form-control">
                    </div>
                  </div>
                  <!--/form-group-->
                  <button class="btn btn-primary" type="submit">Login</button>
                  <!-- <h5>*silahkan gunakan password <mark>2018-09-17</mark> bagi mahasiswa baru yang tidak dapat login
                    menggunakan tanggal lahir</h5> -->
                  </form>
                </div>
                <!--/porlets-content-->

              </div>
              <!--/col-md-12-->
            </div>
            <hr>

            <div style="text-align: center;" class="mb-2">
              <a class="btn btn-primary" href="bayarkuliah">Bayar Kuliah</a>
              <a class="btn btn-primary" href="ektm">Login EKTM</a>

            </div>

            <div style="text-align: center;" class="mb-2">

              <a class="btn btn-success" href="jadwal/uas.php">Jadwal UAS 2020/2021 <span class="badge bg-danger" style="color:white;">New!</span></a>
              <a class="btn btn-secondary" href="ujian.php">Login UJIAN <span class="badge bg-danger" style="color:white;">New!</span></a>

            </div>


            <div style="text-align: center;">

              <a href="https://api.whatsapp.com/send?phone=%2B6283128734012&text="><img src="https://www.freepnglogos.com/uploads/whatsapp-logo-light-green-png-0.png" width="50" alt="wa"></a>
              <a href="https://instagram.com/ariffb.id"><img src="https://www.pinclipart.com/picdir/big/33-337425_instagram-clipart-psd-instagram-logo-png-hd-download.png" width="30" alt="ig"></a>
              <a class="ml-3" href="https://www.facebook.com/ariffb755"><img src="https://img.pngio.com/facebook-logo-png-transparent-background-1024x1024-basement-facebook-png-transparent-1024_1024.png" width="30" alt="ig"></a>

            </div>

          </div>

        </div>
      </div>
      <!--/block-web-->
    </div>
    <!--/col-md-4-->
  </div>
  <!--/tab-content-->




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>