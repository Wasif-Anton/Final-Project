<!-- Header - Dynamic Title -->
<?php
$titel = 'Home Page';
require_once 'includes/header.php'
?>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><span class="buy">Buy</span><span class="shop">Shop</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <!-- Login, Sign-up -->
      <form class="d-flex">
        <button type="button" class="btn btn-outline-warning me-2">Login</button>
        <button type="button" class="btn btn-warning">Sign-up</button>
      </form>
    </div>
  </div>
</nav>

<!-- Welcome -->
<section class="pt-4 pt-md-11">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-5 col-lg-6 order-md-2">
        <!-- Right Image -->
        <img src="img/main_page/img1.jpeg" class="rounded img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
      </div>
      <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">
        <!-- Heading -->
        <h1 class="display-3 text-center text-md-start">
          Welcome to <span class="buy">Buy</span><span class="shop">Shop</span>.<br>
          <span class="buy">Buy</span> anything.
        </h1>
        <!-- Text -->
        <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
          <span class="buy">Buy</span> it with Love.
        </p>
      </div>
    </div>
  </div>
</section>

&nbsp

<!-- Images -->
<section class="container-fluid pb-5 px-0">
  <!-- On large screen we have 3 columns of imgs, On medium and small screen we have 2 colums of imgs-->
  <div class="row p-0">
    <!-- First Row - -->
    <div class="col-lg-4 col-sm-6 p-0">
      <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-sm-6 p-0">
      <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-sm-6 p-0">
      <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1542744095-291d1f67b221?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-thumbnail">
    </div>
    <!-- Second Row - -->
    <div class="col-lg-4 col-sm-6 p-0">
      <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-sm-6 p-0">
      <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-sm-6 p-0">
      <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-thumbnail">
    </div>
  </div>
</section>

<!-- Footer -->
<?php
require_once 'includes/footer.php'
?>