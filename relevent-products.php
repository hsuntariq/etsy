<?php
$name = $_GET['name'];
$id = $_GET['id'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/256/3984/3984329.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles.css">


    <?php
    include './boot_css.php'
    ?>

    <title>
        <?php echo $name ?>
    </title>
</head>

<body>
    <?php include './nav.php';

    ?>

    <?php include './loader.php' ?>


    <div class="col-xl-9 relevent-prods row col-lg-10 col-11 mx-auto">


    </div>






    <?php include './jquery.php' ?>

    <script>
    $.ajax({
        url: './get-my-products.php',
        type: 'GET',
        data: {
            id: <?php echo $id ?>
        },
        beforeSend: function() {
            $('.loading').removeClass('d-none')
            $('.loading').addClass('d-flex')
        },
        success: function(response) {
            $('.relevent-prods').html(response)

            $('.loading').addClass('d-none')
            $('.loading').removeClass('d-flex')

        }
    })
    </script>



</body>

</html>