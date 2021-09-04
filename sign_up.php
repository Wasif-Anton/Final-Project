<!-- Header -->
<?php
$titel = 'Sign-up';
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
                <a type="button" href="#" class="btn btn-outline-warning me-2">Login</a>
                <a type="button" href="./sign_up.php" class="btn btn-warning">Sign-up</a>
            </form>
        </div>
    </div>
</nav>

<p>&nbsp</p>

<!-- Form  -->
<form class="row g-3">
    <h1 class="mb-1 text-center">Sign up to <span class="buy">Buy</span><span class="shop">Shop</span></h1>
    <!-- Input - ID -->
    <div class="col-md-4">
        <label for="" class="form-label">ID</label>
        <input type="text" class="form-control" id="id">
    </div>
    <!-- Input - Name -->
    <div class="col-md-4">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name">
    </div>
    <!-- Input - Email -->
    <div class="col-md-4">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <!-- Input - Password -->
    <div class="col-md-6">
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">
    </div>
    <!-- Input - Password -->
    <div class="col-md-6">
        <label for="" class="form-label">Retype Password</label>
        <input type="password" class="form-control" id="retype_password">
    </div>
    <!-- Input - Phone  -->
    <div class="col-md-6">
        <label for="" class="form-label">Contact Number</label>
        <input type="tel" class="form-control" id="phone">
        <small id="phoneHelp" class="form-text text=muted">We will never share your phone number with anyone else</small>
    </div>
    <!-- Input - Location  -->
    <div class="col-md-4">
        <label for="" class="form-label">Location</label>
        <select id="location" class="form-select">
            <option value="" disabled selected required>Select Your Location</option>
            <option value="North">North</option>
            <option value="Center">Center</option>
            <option value="South">South</option>
        </select>
    </div>
    <br><br><br><br><br><br><br><br>
    <!-- Sign Up  -->
    <button type="submit" class="btn btn-outline-warning me-2 btn-block">Sign Up</button>
    <p class="text-gray-soft text-center small mb-2">Already have an account? <a href="./sign_in.php">Sign in</a></p>
</form>


<!-- Footer -->
<?php
require_once './includes/footer.php'
?>