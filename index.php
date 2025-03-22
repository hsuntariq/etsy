<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/256/3984/3984329.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles.css">
    <?php include './boot_css.php' ?>

    <title>Etsy Pakistan - Shop for handmade products</title>
</head>

<body>


    <?php include './nav.php' ?>



    <div class="col-xl-9 col-lg-10 col-11 mx-auto">
        <div class="row py-xl-3 py-2 my-3">
            <div class="col-xl-8 col-12">
                <div class="card rounded-2 overflow-hidden border-0" style="height:100%">
                    <div class="row p-0 position-relative" style="background-color: #FFFBD8; height:100%;">
                        <div class="col-sm-6 text-center d-flex justify-content-center align-items-center  flex-column">
                            <h2>Renew your rooms!</h2>
                            <h4>Shop original home pieces</h4>
                            <button class="btn shop-btn btn-dark rounded-pill">
                                Shop now
                            </button>
                        </div>
                        <div class="col-sm-6 circle-image pe-0">
                            <img height="100%"
                                src="https://i.etsystatic.com/ij/88237b/6516903080/ij_850x675.6516903080_e36vql9i.jpg?version=0"
                                width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-none d-xl-block">
                <div class="card position-relative rounded-2 overflow-hidden border-0" style="height:100%">
                    <img width="100%" height="100%" class="change-image"
                        src="https://i.etsystatic.com/15403269/r/il/cd8445/4100908989/il_600x600.4100908989_d6li.jpg"
                        alt="second image">
                    <div class="overlay-card position-absolute h-100 w-100"
                        style="background:linear-gradient(rgb(255, 255, 255,0),rgb(255, 255, 255,0),rgba(0,0,0,0.8));">
                    </div>
                    <div class="text-overlay text-white position-absolute" style="bottom:10px;left:10px;">
                        <h3 class="img-text "></h3>
                        <h5 class="img-para"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- loading skeletons -->



    <?php include './loader.php' ?>



    <!-- categories section -->
    <?php include './categories.php' ?>
    <!-- products section -->
    <?php include './products.php' ?>



    <?php include './jquery.php' ?>

    <script>
    function loadCategories() {
        $.ajax({
            url: './get-categories-ajax.php',
            type: 'GET',
            data: {},
            beforeSend: function() {
                $('.loading').removeClass('d-none')
                $('.loading').addClass('d-flex')
            },
            success: function(response) {
                $('.my-categories').html(response)
                $('.loading').removeClass('d-flex')
                $('.loading').addClass('d-none')
            }
        })
    }


    loadCategories()
    </script>


    <script src="./app.js">

    </script>








</body>

</html>