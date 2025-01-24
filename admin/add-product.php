<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../boot_css.php' ?>
    <link rel="stylesheet" href="../styles.css">
    <title>Admin || Add Product</title>
</head>

<body>


    <div class="p-0 m-0" style="background-color: #F2EDF3;">
        <?php include './admin-nav.php' ?>
        <div class="row">
            <div class="col-xl-2 p-0 col-lg-3 col-md-4 col-sm-4">
                <?php include './admin-sidebar.php' ?>
            </div>
            <div class="col-xl-10  p-5 col-lg-9 col-sm-8 col-md-8">
                <form action="./add-product-data.php" method="POST" enctype="multipart/form-data">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column">
                            <h3>Add a new Product</h3>
                            <p class="text-secondary">
                                Orders placed across your store
                            </p>
                        </div>
                        <button class="btn text-white fw-semibold" style="background-color: #F27427;"> <i
                                class="bi bi-plus"></i> Publish Product</button>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card p-4 shadow border-0">
                                <h4>Product Information</h4>
                                <input type="text" placeholder="Product Name" class="form-control">
                                <div class="d-flex gap-2 align-items-center">
                                    <input type="color" placeholder="Sku" class="my-3 form-control-color w-100">
                                    <input type="text" placeholder="Product Barcode" class="my-3 form-control w-100">
                                </div>
                                <label for="">Description (Optional)</label>
                                <div class="card p-1">
                                    <div class="card-header">
                                        <div class="d-flex gap-3">
                                            <div style="height: 40px;width: 40px;"
                                                class="d-flex bold justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-type-bold"></i>
                                            </div>
                                            <div style="height: 40px;width: 40px;"
                                                class="d-flex underline justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-type-underline"></i>
                                            </div>
                                            <div style="height: 40px;width: 40px;"
                                                class="d-flex line-through justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-type-strikethrough"></i>
                                            </div>
                                            <div style="height: 40px;width: 40px;"
                                                class="d-flex left justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-text-left"></i>
                                            </div>
                                            <div style="height: 40px;width: 40px;"
                                                class="d-flex center justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-text-center"></i>
                                            </div>
                                            <div style="height: 40px;width: 40px;"
                                                class="d-flex right justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-text-right"></i>
                                            </div>
                                            <div style="height: 40px;width: 40px;"
                                                class="d-flex justify justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-justify"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>



                </form>



            </div>

        </div>
    </div>


    <?php include '../boot_js.php' ?>

</body>

</html>