<!DOCTYPE html>
<html lang="en">

<head>
  <title>INFO COVID-19</title>
  <link rel="icon" href="https://i.ibb.co/YW3JfYj/dxxoo-logo.png" type="image/gif" sizes="32x32">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Import Spectre CSS -->
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css" />

  <!-- import the webpage's stylesheet -->
  <link rel="stylesheet" href="style.css" />

</head>

<body>
  <section class="container">
    <div class="head">
      <h1>INFO COVID - 19
      </h1>
    </div>
    <!-- Data Global-->
    <div>
      <h4 class="data-title dt-global">
        Global 🌐
      </h4>
    </div>
    <div class="columns data data-global">
      <div class="card data-terjangkit column col-mx-auto" data-tilt>
        <div class="card-header">
          <div class="card-title h5">Total Terjangkit</div>
          <div class="card-subtitle h5">
            🤢
          </div>
        </div>
        <div class="card-body">
          <h6 id="jumlah-terjangkit" class="text-warning"></h6>
        </div>
      </div>
      <div class="card data-sembuh column col-mx-auto" data-tilt>
        <div class="card-header">
          <div class="card-title h5 ">Total Sembuh</div>
          <div class="card-subtitle h5">
            😃
          </div>
        </div>
        <div class="card-body">
          <h6 id="jumlah-sembuh" class="text-success"></h6>
        </div>
      </div>
      <div class="card data-meninggal column col-mx-auto" data-tilt>
        <div class="card-header">
          <div class="card-title h5">Total Meninggal</div>
          <div class="card-subtitle h5">
            💀
          </div>
        </div>
        <div class="card-body">
          <h6 id="jumlah-meninggal" class="text-error"></h6>
        </div>
      </div>
    </div>
    <!-- Data Indonesia-->
    <div>
      <h4 class="data-title dt-indo">
        Indonesia
      </h4>
    </div>
    <div class="columns data data-global">
      <div class="card data-terjangkit column col-mx-auto" data-tilt>
        <div class="card-header">
          <div class="card-title h5">Total Terjangkit</div>
          <div class="card-subtitle h5">
            🤢
          </div>
        </div>
        <div class="card-body">
          <h6 id="jt-indo" class="text-warning"></h6>
        </div>
      </div>
      <div class="card data-sembuh column col-mx-auto" data-tilt>
        <div class="card-header">
          <div class="card-title h5 ">Total Sembuh</div>
          <div class="card-subtitle h5">
            😃
          </div>
        </div>
        <div class="card-body">
          <h6 id="js-indo" class="text-success"></h6>
        </div>
      </div>
      <div class="card data-meninggal column col-mx-auto" data-tilt>
        <div class="card-header">
          <div class="card-title h5">Total Meninggal</div>
          <div class="card-subtitle h5">
            💀
          </div>
        </div>
        <div class="card-body">
          <h6 id="jm-indo" class="text-error"></h6>
        </div>
      </div>
    </div>
    <div class="head">
      <h6>Tetap menjaga kesehatan & Mengikuti Protokol Kesehatan 3M (Memakai Masker, Menjaga Jarak Aman, dan Mencuci
        Tangan.)
      </h6>
      <!-- Footer -->
      <div class="footer">
        <button class="btn btn-danger" onclick="goBack()"><i class="fas fa fw fa-arrow-left"></i> Back</button>
      </div>
  </section>
</body>

<!-- import the webpage's javascript file -->
<script src="main.js" defer></script>
<!--- Import tilt.javascript  -->
<script src="tilt.js"></script>
<script>
  function goBack() {
    window.history.back();
  }
</script>

</html>