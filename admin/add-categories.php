<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/256/3984/3984329.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles.css">
    <?php include '../boot_css.php' ?>
    <title>Admin Dashboard || Categories</title>
    <style>
    body {
        overflow-x: hidden !important;
    }
    </style>
</head>

<body>

    <?php
    include '../popUp.php';
    displayMessage('success_category', 'green');
    ?>




    <div class="p-0 m-0" style="background-color: #F2EDF3;">
        <?php include './admin-nav.php' ?>
        <div class="row">
            <div class="col-xl-2 p-0 col-lg-3 col-md-4 col-sm-4">
                <?php include './admin-sidebar.php' ?>
            </div>
            <div class="col-xl-10 d-flex justify-content-center align-items-center p-5 col-lg-9 col-sm-8 col-md-8">
                <form class="p-5 col-lg-6 mx-auto shadow bg-white rounded-3" action="./add-category-data.php"
                    method="POST" enctype="multipart/form-data">
                    <h2 class="text-center  display-5">
                        Add Category
                    </h2>
                    <div class="form-group">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" name="name" placeholder="Enter category..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Category Image</label>
                        <input type="file" name="image" placeholder="Enter category..." class="form-control">
                    </div>
                    <button class="btn w-100 my-3 text-white fw-semibold" style="background-color: #F27427;">
                        Add Category
                    </button>
                </form>
            </div>
        </div>
    </div>




    <?php include '../boot_js.php' ?>






</body>

</html>