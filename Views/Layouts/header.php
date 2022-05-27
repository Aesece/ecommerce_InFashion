<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Not just fashion, but design. Everything we do in Unfamiliar is meant to be remembered. It’s all about style. We create clothing with minimal designs and maximum impact.">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
  <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
  <link rel="stylesheet" href="bootstrapCompiled/css/bootstrap.css">
  <link rel="stylesheet" href="js/pushbar/pushbar.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>In-Fashion</title>
</head>

<body>

  <nav class="navbarFont navbar sticky-top navbar-expand-sm navbar-light bg-white">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--logo mobile visible version-->
      <a class="navbar-brand" href="index.php">
        <img class="logo d-sm-none d-sm-block" src="media/logo.svg" alt="Unfamiliar Logo">
      </a>

      <!--logo desktop visible version-->
      <a class="navbar-brand d-none d-sm-block mx-auto" href="index.php">
        <img class="logo" src="media/in-fashion.png" alt="Unfamiliar Logo">
      </a>
      <!--logo desktop visible version-->
      <!--logo mobile visible version-->

      <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="views/men.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hombre
            </a>
            <ul class="dropdown-menu navbarFont" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="views/men.php">Nueva Mercancia</a></li>
              <li><a class="dropdown-item" href="views/men.php">Playeras</a></li>
              <li><a class="dropdown-item" href="views/men.php">Pantalones</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mujer
            </a>
            <ul class="dropdown-menu navbarFont" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="views/women.php">New Arrivals</a></li>
              <li><a class="dropdown-item" href="views/women.php">T-shirts</a></li>
              <li><a class="dropdown-item" href="views/women.php">Pants</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Niño
            </a>
            <ul class="dropdown-menu navbarFont" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="views/boy.php">New Arrivals</a></li>
              <li><a class="dropdown-item" href="views/boy.php">T-shirts</a></li>
              <li><a class="dropdown-item" href="views/boy.php">Pants</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Niña
            </a>
            <ul class="dropdown-menu navbarFont" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="views/girl.php">New Arrivals</a></li>
              <li><a class="dropdown-item" href="views/girl.php">T-shirts</a></li>
              <li><a class="dropdown-item" href="views/girl.php">Pants</a></li>
            </ul>
          </li>
        </ul>


      </div> <!-- navbar-collapse.// -->
      <ul class="navbar-nav customNavbar navbarCollapse">
        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#wishlistModal" href="#"><i class="bi bi-heart icons"></i></a></li>
        <!--  <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#accountModal" href="#"><i class="bi bi-person icons"></i></a></li>  -->
        <li class="nav-item cart-btn" data-pushbar-target="pushbar-cart">
          <span class="nav-link">
            <i class="bi bi-cart icons"></i>
          </span>
          <div class="cart-items">0</div>
        </li>
        <li class="nav-item" id="nav_register">
          <a class="nav-link" href="Views\register.php" role="button">
            <i class="fas fa-user-plus"></i> Registrarse
          </a>
        </li>
        <li class="nav-item" id="nav_login">
          <a class="nav-link" href="Views\login.php" role="button">
            <i class="far fa-user"></i> Iniciar Sesion
          </a>
        </li>
        <li class="nav-item dropdown" id="nav_usuario">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="avatar_nav" src="" width="30" height="30" class="img-circle">
            <span id="usuario_nav"> Usuario Logueado</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="Views/mi_perfil.php"><i class="fas fa-user-cog"></i> Mi perfil</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-basket"></i> Mis Pedidos</a></li>
            <li><a class="dropdown-item" href="Controllers/logout.php"><i class="fas fa-user-times"></i> Cerrar sesion</a></li>
          </ul>
        </li>


      </ul>
    </div> <!-- container-fluid.// -->
  </nav>
  <div data-pushbar-id="pushbar-cart" data-pushbar-direction="right" class="pushbar pushbar-cart">
    <div class="btn-cerrar">
      <button data-pushbar-close><i class="bi bi-x-lg"></i></button>
    </div>
    <p class="pushbar__title">Shopping cart</p>
    <div id="cartContainer">

      <!--Items added in cart-->
    </div>

    <div class="pushbar__total">
      <p>Total:</p>
      <p>$<span class="pushbar__totalPrice text-light"></span></p>
    </div>
    <div id="pushbarButtons">
      <button class="button button--hyperion pushbar__clearCart"><span><span>Clear Cart</span></span></button>
      <a href="checkout.html"><button class="button button--greip pushbar__checkout"><span><span>Checkout</span></span></button></a>
    </div>
  </div>

  <!--Modals start-->
  <div id="modalContainer">
    

    <!--MODAL wishlist start-->
    <div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mx-auto fs-4" id="exampleModalLabel">Add to wishlist</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            Debes de  tener una cuenta in-Fashion y estar logueado para guardar items en tu lista de favoritos
          
          </div>
          <div class="modal-footer d-flex flex-column">
            <button  href="Views\login.php"  class="button button--hyperion mb-2" data-bs-toggle="modal" data-bs-dismiss="modal"><span><span>Sign in</span></span></button>
            <button href="Views\register.php" class="button button--greip" data-bs-toggle="modal" data-bs-dismiss="modal"><span><span>Create an account</span></span></button>
          </div>
        </div>
      </div>
    </div>
    <!--MODAL wishlist end-->
    <!--MODAL account start-->
    <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mx-auto fs-4" id="exampleModalLabel">My account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            Crea una cuenta in-Fashion o inicia sesion para ver tus pedidos o editar informacion personal
           
          </div>
          <div class="modal-footer d-flex flex-column">
            <button class="button button--hyperion mb-2"><span><span>Sign in</span></span></button>
            <button class="button button--greip" ><span><span>Create an account</span></span></button>
          </div>
        </div>
      </div>
    </div>
    <!--MODAL account end-->
    <!--MODAL WorkInProgress start-->
    <div class="modal fade" id="WIPModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mx-auto fs-4" id="exampleModalLabel"> Work in progress</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center d-flex flex-column align-items-center">
            This feature is not yet available
            <img src="media/smile.jpg" class="smileFace" alt="Smiley face">
          </div>
        </div>
      </div>
    </div>
    <!--MODAL WorkInProgress end-->

  </div>
  <!--Modals end-->

