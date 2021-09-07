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
<form class="row g-3" method="post" action="success.php">
    <h1 class="mb-1 text-center">Sign up to <span class="buy">Buy</span><span class="shop">Shop</span></h1>
    <br><br>
    <!-- Input - ID -->
    <div class="col-md-4">
        <label for="id" class="form-label"><strong>Identity</strong></label>
        <input type="text" class="form-control" id="id" name="id" placeholder="Your Identity" required>
        <small id="idHelp" class="form-text text=muted">This will be your login ID</small>
    </div>
    <!-- Input - Name -->
    <div class="col-md-4">
        <label for="name" class="form-label"><strong>Name</strong></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
    </div>
    <!-- Input - Email -->
    <div class="col-md-4">
        <label for="email" class="form-label"><strong>Email</strong></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
    </div>
    <!-- Input - Password -->
    <div class="col-md-6">
        <label for="password" class="form-label"><strong>Password</strong></label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <!-- Input - Password -->
    <div class="col-md-6">
        <label for="confirm_password" class="form-label"><strong>Confirm Password</strong></label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
    </div>
    <!-- Input - Phone  -->
    <div class="col-md-6">
        <label for="phone" class="form-label"><strong>Phone Number</strong></label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone number" required>
    </div>
    <!-- Input - Region  -->
    <div class="col-md-4">
        <label for="region" class="form-label"><strong>Region</strong></label>
        <select id="region" class="form-select" name="region" required>
            <option value="" disabled selected required>Select your region</option>
            <option value="North">North</option>
            <option value="Center">Center</option>
            <option value="South">South</option>
        </select>
    </div>
    <br><br><br><br><br><br><br>
    <!-- Sign Up  -->
    <button type="submit" class="btn btn-outline-warning me-2 btn-block"><strong>Create Your Account</strong></button>
    <p class="text-gray-soft text-center small mb-2"><strong>Already have an account? </strong><a href="./login.php">Login</a></p>
</form>
<br><br><br><br><br><br><br><br><br><br>

<!-- Footer -->
<?php
require_once './includes/footer.php'
?>