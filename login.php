<!-- Header -->
<?php
$titel = 'Login';
require_once './includes/header.php'
?>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light ">
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
<br><br>

<section class="container-fluid">
    <section class="row justify-content-center">
        <section class="col-8 col-sm-8 col-md-6 col-lg-4 col-xl-4">
            <!-- Form  -->
            <form class="login-form-container" action="./includes/login.inc.php">
                <!-- ID -->
                <div class="mb-3">
                    <label for="id" class="form-label"><strong>Identity</strong></label>
                    <input type="id" class="form-control" id="id" placeholder="Your identity">
                </div>
                <br>
                <!-- Password  -->
                <div class="mb-3">
                    <label for="password" class="form-label"><strong>Password</strong></label>
                    <input type="password" class="form-control" id="password" placeholder="Your password">
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning">Login</button>
                </div>
            </form>
        </section>
    </section>
</section>

<!-- Error Messages -->
<div>
    <?php
    // Error check, if there is an error what it the error
    if (isset($_GET["error"])) {
        // Empty input
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        // ID - Invalid ID
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
    }
    ?>
</div>


<!-- Footer -->
<?php
require_once './includes/footer.php'
?>