<?php
include './popUp.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/256/3984/3984329.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles.css">
    <?php include './boot_css.php' ?>
    <style>
    body {
        overflow: hidden;
    }
    </style>
    <title>Sign In</title>
</head>

<body>

    <?php
    if (isset($_SESSION['user_success'])) {
        header("Location: /");
    }


    displayMessage('invalid_credentials', 'red');

    ?>

    <div class="row min-vh-100 overflow-y-hidden">
        <div style="background-image: url(https://demos.themeselection.com/marketplace/materio-mui-nextjs-admin-template/demo-1/images/pages/auth-v2-mask-light.png);background-size:cover;background-position:bottom bottom"
            class="col-md-9 position-relative d-flex justify-content-center align-items-center">
            <img src="https://demos.themeselection.com/marketplace/materio-mui-nextjs-admin-template/demo-1/images/illustrations/objects/tree-3.png"
                width="200px" class="position-absolute bottom-0 start-0" alt="">
            <img width="50%"
                src="https://demos.themeselection.com/marketplace/materio-mui-nextjs-admin-template/demo-1/images/illustrations/auth/v2-login-light.png"
                alt="">
        </div>
        <div class="col-md-3 min-vh-100 d-flex flex-column justify-content-center">
            <form action="./login.php" method="POST" class="p-2">
                <h2>Welcome to Etsy!👋🏻</h2>
                <p class="text-gray">
                    Please sign-in to your account and start the adventure
                </p>
                <input type="email" placeholder="Enter email..." name="email" class="p-3  form-control w-100 my-">
                <input type="password" placeholder="Enter password..." name="password"
                    class="p-3 form-control w-100 my-2">

                <div class="d-flex align-items-center gap-2">
                    <input type="checkbox" name="consent" id="">
                    <p class="text-gray m-0">I agree to privacy policy & terms</p>
                </div>


                <button class="btn my-2 bg-orange w-100 text-white fw-semibold">
                    Sign In
                </button>

                <p class="text-secondary">
                    New to our platform ? <a href="/signUp.php" class="text-orange text-decoration-none">
                        Create an account</a>
                </p>

            </form>
        </div>
    </div>



</body>

</html>