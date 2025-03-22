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
                                        <td>Product</td>
                                        <td>Category</td>
                                        <td>stock</td>
                                        <td>color</td>
                                        <td>discounted price</td>
                                        <td>base price</td>
                                        <td>Status</td>
                                        <td>actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- get the data from the backend -->

                                    <?php
                                    include '../config.php';

                                    $select = "SELECT * FROM product";
                                    $result = mysqli_query($connection, $select);
                                    foreach ($result as $item) {
                                    ?>


                                    <tr>
                                        <td><input type="checkbox" name="" class="form-check" id=""></td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <img style="object-fit: contain;" width="50px" height="50px"
                                                    src="../product_images/<?php echo $item['image'] ?>"
                                                    class="border p-1 rounded-2" alt="category image">
                                                <div class="d-flex flex-column">
                                                    <h6> <?php echo $item['name'] ?> </h6>
                                                    <p class="text-secondary m-0 text-sm">
                                                        <?php echo $item['tags'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-secondary">
                                            <?php echo $item['category_id'] ?>
                                        </td>
                                        <td class="text-secondary">

                                            <?php
                                                if ($item['stock']) {
                                                ?>
                                            <div class="switch">
                                                <div class="switch-btn"></div>
                                            </div>
                                            <?php
                                                } else {
                                                ?>
                                            <div class="switch inactive-switch">
                                                <div style="transform:translateX(-20px)" class=" switch-btn"></div>
                                            </div>
                                            <?php
                                                }
                                                ?>

                                        </td>
                                        <td class="">
                                            <div class="rounded-circle"
                                                style="height:30px;width:30px;background-color:<?php echo $item['color'] ?>">
                                            </div>
                                        </td>
                                        <td class="text-secondary">
                                            $<?php echo $item['discounted_price'] ?>
                                        </td>
                                        <td class="text-secondary">
                                            $<?php echo $item['base_price'] ?>
                                        </td>
                                        <td class="" style="vertical-align:middle">
                                            <?php
                                                if ($item['status'] == 'published') {
                                                    echo "<div style='width:max-content' class='alert  m-0 px-2 py-1 text-sm rounded alert-success'>
                                                        Active
                                                    </div>";
                                                } else if ($item['status'] == 'inactive') {
                                                    echo "<div style='width:max-content' class='alert m-0  px-2 py-1 text-sm rounded alert-danger'>
                                                        inactive
                                                    </div>";
                                                } else {
                                                    echo "<div style='width:max-content' class='alert m-0  px-2 py-1 text-sm rounded alert-warning'>
                                                        scheduled
                                                    </div>";
                                                }
                                                ?>
                                        </td>
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