<!-- Header -->
<?php
$titel = 'Sign up';
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
<!-- Form  -->
<form class="row g-3">
    <h1 class="mb-1 text-center">Sign up to <span class="buy">Buy</span><span class="shop">Shop</span></h1>
    <br><br>
    <!-- Input - ID -->
    <div class="col-md-4">
        <label for="" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" placeholder="Your ID">
        <small id="idHelp" class="form-text text=muted">This will be your login ID</small>
    </div>
    <!-- Input - Name -->
    <div class="col-md-4">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your name">
    </div>
    <!-- Input - Email -->
    <div class="col-md-4">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <!-- Input - Password -->
    <div class="col-md-6">
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <!-- Input - Password -->
    <div class="col-md-6">
        <label for="" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm password">
    </div>
    <!-- Input - Phone  -->
    <div class="col-md-6">
        <label for="" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" placeholder="Your phone number">
    </div>
    <!-- Input - Location  -->
    <div class="col-md-4">
        <label for="" class="form-label">Region</label>
        <select id="region" class="form-select">
            <option value="" disabled selected required>Select your region</option>
            <option value="North">North</option>
            <option value="Center">Center</option>
            <option value="South">South</option>
        </select>
    </div>
    <br><br><br><br><br><br><br>
    <!-- Sign Up  -->
    <button type="submit" class="btn btn-outline-warning me-2 btn-block">Create Your Account</button>
    <p class="text-gray-soft text-center small mb-2">Already have an account? <a href="./login.php">Login</a></p>
</form>


<!-- Footer -->
<?php
require_once './includes/footer.php'
?>