<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../boot_css.php' ?>
    <link rel="stylesheet" href="../styles.css">
    <title>Admin || View Category</title>

</head>

<body>
    <div class="p-0 m-0" style="background-color: #F2EDF3;">
        <?php include './admin-nav.php' ?>
        <div class="row">
            <div class="col-xl-2 p-0 col-lg-3 col-md-4 col-sm-4">
                <?php include './admin-sidebar.php' ?>
            </div>
            <div class="col-xl-10  p-5 col-lg-9 col-sm-8 col-md-8">
                <div class="container">
                    <div class="card shadow-lg p-4 border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <form>
                                <input type="search" class="form-control" placeholder="Search">
                            </form>
                            <a href="./add-categories.php" class="btn text-white fw-semibold"
                                style="background-color: #F27427;"> <i class="bi bi-plus"></i> Add Category</a>
                        </div>
                        <div class="table-responsive my-4 fw-semibold" style="height: 65vh;overflow-y:scroll;">
                            <table class="table text-capitalize table-striped">
                                <thead>
                                    <tr class="">
                                        <td> <input type="checkbox" name="" class="form-check" id=""> </td>
                                        <td>Categories</td>
                                        <td>total products</td>
                                        <td>total earning</td>
                                        <td>actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- get the data from the backend -->

                                    <?php
                                    include '../config.php';

                                    $select = "SELECT * FROM category";
                                    $result = mysqli_query($connection, $select);
                                    foreach ($result as $item) {
                                    ?>


                                    <tr>
                                        <td><input type="checkbox" name="" class="form-check" id=""></td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <img style="object-fit: contain;" width="50px" height="50px"
                                                    src="../category_images/<?php echo $item['image'] ?>"
                                                    class="border p-1 rounded-2" alt="category image">
                                                <div class="d-flex flex-column">
                                                    <h6> <?php echo $item['name'] ?> </h6>
                                                    <p class="text-secondary m-0 text-sm">
                                                        Lorem ipsum dolor sit Lorem, ipsum dolor.
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-secondary">
                                            12,586
                                        </td>
                                        <td class="text-secondary">$98,495</td>
                                        <td class="text-secondary">
                                            <div class="d-flex gap-3">
                                                <i class="bi bi-pencil-square"></i>
                                                <i class="bi bi-three-dots"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include '../boot_js.php'
    ?>


</body>

</html>