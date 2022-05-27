<?php
include_once 'Views/Layouts/header.php';
?>

<!--Todo el codigo Main de aqui (Ya se ha iniciado etiqueta body)-->

<div class="main-container">
  <img src="media/image (1).png">
  <div class="banner-container ">
  </div>
</div>

<section class="container p-5 mb-0 text-center d-flex justify-content-between">
  <div class="row">
    <div class="col-sm-4">
      <i class="bi bi-brightness-high-fill icons2"></i>
      <p class="fs-4 fw-bold">Primera Compra: 15% de Descuento</p>
      <p>Subscribe to our mailing list for 15% off your first order.</p>
    </div>
    <div class="col-sm-4">
      <i class="bi bi-truck icons2"></i>
      <p class="fs-4 fw-bold">Devolución en caso de daños</p>
      <p>Shop with certainty with a 30 day returns policy.</p>
    </div>
    <div class="col-sm-4">
      <i class="bi bi-globe icons2"></i>
      <p class="fs-4 fw-bold">Compras Región Tierra Caliente</p>
      <p>Free worldwide shipping on all orders over $95</p>
    </div>
  </div>
</section>

<!--cards rendered in index.js-->
<section class="container contt pb-5 mb-5">
  <p class="collections pb-1 text-dark text-center mb-0">Populares</p>
  <div class="row justify-content-center" id="newArrivals">

  </div>
</section>
<!--cards rendered in index.js-->

<section class="container-fluid">
  <p class="collections pb-1 text-dark text-center mb-0">Download Catalogo</p>

  <div class="main row fw-bold fs-2 sectionContainer">
    <a href="views/men.php" class="col-sm-6 col-lg-6 d-flex align-items-center justify-content-center main1 text-decoration-none">
      <p>Hombre</p>
    </a>
    <a href="women.php" class="col-sm-6 col-lg-6 d-flex align-items-center justify-content-center main2 text-decoration-none">
      <p>Mujer</p>
    </a>
  </div>
</section>





<?php
include_once 'Views/Layouts/footer.php';
?>