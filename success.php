<!-- Header -->
<?php
$titel = 'Success';
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
<h1 class="text-center text-success">You Have Been Registered!</h1>
<br>
<!-- Information Card -->
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_POST['name']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <strong>From the: </strong><?php echo $_POST['region']; ?>
        </h6>
        <p class="card-text">
            <strong>Your ID: </strong><?php echo $_POST['id']; ?>
        </p>
        <p class="card-text">
            <strong>Your phone number: </strong><?php echo $_POST['phone']; ?>
        </p>
        <p class="card-text">
            <strong>Your email: </strong><?php echo $_POST['email']; ?>
        </p>
        <p class="card-text">
            <strong>Your password: </strong><?php echo $_POST['password']; ?>
        </p>
        <a href="./login.php" class="btn btn-primary">Log-in</a>
    </div>
</div>

<!-- Footer -->
<?php
require_once './includes/footer.php'
?>