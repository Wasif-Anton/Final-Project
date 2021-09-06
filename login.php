<!-- Header -->
<?php
$titel = 'Login';
require_once './includes/header.php'
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
                <a type="button" href="./login.php" class="btn btn-outline-warning me-2">Log-in</a>
                <a type="button" href="./signup.php" class="btn btn-warning">Sign-up</a>
            </form>
        </div>
    </div>
</nav>
<br>

<h1 class="mb-1 text-center">Login to <span class="buy">Buy</span><span class="shop">Shop</span></h1>


<!-- Footer -->
<?php
require_once './includes/footer.php'
?>