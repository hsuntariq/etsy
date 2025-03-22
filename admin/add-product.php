<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../boot_css.php' ?>
    <link rel="stylesheet" href="../styles.css">
    <title>Admin || Add Product</title>
    <style>
    body {
        overflow: hidden !important;
    }
    </style>
</head>

<body>


    <?php
    include '../popUp.php';
    displayMessage('product_success', 'green')
    ?>

    <div class="p-0 m-0" style="background-color: #F2EDF3;">
        <?php include './admin-nav.php' ?>
        <div class="row">
            <div class="col-xl-2 p-0 d-xl-block d-none">
                <?php include './admin-sidebar.php' ?>
            </div>
            <div class="col-xl-10  p-5 col-lg-12" style="height: 90vh;overflow-y:scroll">
                <form action="./add-product-data.php" method="POST" enctype="multipart/form-data">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-6 my-2  flex-column">
                            <h3>Add a new Product</h3>
                            <p class="text-secondary">
                                Orders placed across your store
                            </p>
                        </div>
                        <button class="btn mb-2 col-md-3 col-lg-2 col-sm-6 text-white fw-semibold"
                            style="background-color: #F27427;white-space:nowrap"> <i class="bi bi-plus"></i> Publish
                            Product</button>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card p-4 shadow border-0">
                                <h4>Product Information</h4>
                                <input type="text" name="name" placeholder="Product Name" class="form-control">
                                <div class="d-flex gap-2 align-items-center">
                                    <input name="color" type="color" placeholder="Sku"
                                        class="my-3 form-control-color w-100">
                                    <input name="barcode" type="text" placeholder="Product Barcode"
                                        class="my-3 form-control w-100">
                                </div>
                                <label for="">Description (Optional)</label>
                                <div class="card p-1">
                                    <div class="card-header">
                                        <div class="d-flex gap-3" style="width: 98%;overflow-x:scroll">
                                            <button type="button" onclick="handleEditing(this,'bold')"
                                                style="height: 40px;width: 40px;"
                                                class="btn d-flex p-0 options bold justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-type-bold"></i>
                                            </button>
                                            <button type="button" onclick="handleEditing(this,'underline')"
                                                style="height: 40px;width: 40px;"
                                                class="btn d-flex p-0 options underline justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-type-underline"></i>
                                            </button>
                                            <button type="button" onclick="handleEditing(this,'italic')"
                                                style="height: 40px;width: 40px;"
                                                class="btn d-flex p-0 options underline justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-type-italic"></i>
                                            </button>
                                            <button type="button" onclick="handleEditing(this,'strike')"
                                                style="height: 40px;width: 40px;"
                                                class="btn d-flex p-0 options line-through justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-type-strikethrough"></i>
                                            </button>
                                            <button type="button" onclick="handleEditing(this,'justifyLeft')"
                                                style="height: 40px;width: 40px;"
                                                class="btn d-flex p-0 options left justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-text-left"></i>
                                            </button>
                                            <button type="button" onclick="handleEditing(this,'justifyCenter')"
                                                style="height: 40px;width: 40px;"
                                                class="btn d-flex p-0 options center justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-text-center"></i>
                                            </button>
                                            <button type="button" onclick="handleEditing(this,'justifyRight')"
                                                style="height: 40px;width: 40px;"
                                                class="btn d-flex p-0 options right justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-text-right"></i>
                                            </button>
                                            <button type="button" onclick="handleEditing(this,'jusitfy')"
                                                style="height: 40px;width: 40px;"
                                                class="btn d-flex p-0 options justify justify-content-between align-items-center">
                                                <i class=" editor-option bi bi-justify"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <input type="hidden" name="editor" class="editor-input">
                                        <div contenteditable="true"
                                            class="form-control-plaintext editor-text text-gray">Keep your account
                                            secure with authentication step.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-3 p-4 shadow-lg border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6>Product Image</h6>
                                    <h6 class="text-orange">
                                        Add media from URL
                                    </h6>
                                </div>
                                <!-- image upload input -->
                                <input type="file" name="image" style="visibility: hidden;" class="image-input">
                                <div class="rounded-2 p-5 image-div" style="border:2px dashed lightgray;">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <div style="height: 40px;width: 40px;background:#ECEDEE;"
                                            class="d-flex rounded-2 justify-content-center align-items-center">
                                            <i class="bi bi-upload" style="color:#8A8D93"></i>
                                        </div>
                                        <h3 class="text-center">Drag and Drop Your Image Here.</h3>
                                        <p class="text-secondary">
                                            or
                                        </p>
                                        <button type="button" class="btn btn-outline-orange">
                                            Browse Image
                                        </button>
                                    </div>
                                </div>


                                <div
                                    class="image-preview d-none my-3 border p-3 d-flex justify-content-between align-items-center rounded-2 ">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img src="https://cdn3.pixelcut.app/7/20/uncrop_hero_bdf08a8ca6.jpg"
                                            width="50px" height="50px" alt="" class="rounded-2 image-image">
                                        <div class="d-flex flex-column">
                                            <h6 class="image-name m-0">3.avif</h6>
                                            <p class="text-secondary image-size m-0">
                                                15.5kb
                                            </p>
                                        </div>
                                    </div>
                                    <i class="bi bi-x image-close fs-2"></i>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 p-4 border-0 shadow-lg">
                                <h4>Pricing</h4>
                                <input name="base_price" type="number" placeholder="Base Price"
                                    class="form-control my-1">
                                <input name="discount_price" type="number" placeholder="Discounted Price"
                                    class="form-control my-1">
                                <div class="d-flex my-3 gap-1">
                                    <input name="tax" checked='true' style="height:15px;width:15px" type="checkbox"
                                        value="true" class="form-check">
                                    <p class="text-gray m-0">Charge tax on this product</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center ">
                                    <p class="text-gray m-0">
                                        In Stock
                                    </p>
                                    <input value="true" style="visibility:hidden" type="checkbox" name="stock" id="">
                                    <div class="switch">
                                        <div class="switch-btn"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-4 border-0 shadow-lg">
                                <h4>Categories</h4>
                                <select name="category_id" class="form-control" id="">
                                    <option selected disabled>Select Category</option>
                                    <?php
                                    include '../config.php';
                                    $select = "SELECT * FROM category";
                                    $result = mysqli_query($connection, $select);
                                    foreach ($result as $item) {
                                    ?>
                                    <option value="<?php echo $item['id'] ?>">

                                        <?php echo $item['name'] ?>
                                    </option>

                                    <?php } ?>

                                </select>

                                <select name="status" id="" class="form-control my-2">
                                    <option disabled selected>Select Status</option>
                                    <option value="published">Published</option>
                                    <option value="inactive">inactive</option>
                                    <option value="scheduled">scheduled</option>
                                </select>

                                <input name="tags" type="text" placeholder="Tags e.g. Fashion,clothes,summer"
                                    class="form-control">

                            </div>
                        </div>
                    </div>



                </form>



            </div>

        </div>
    </div>


    <?php include '../boot_js.php' ?>


    <script>
    let e_options = document.querySelectorAll('.editor-option')
    let text = document.querySelector('.editor-text')
    let _switch = document.querySelector('.switch')
    let switch_btn = document.querySelector('.switch-btn')
    let stock = document.querySelector('input[name="stock"]')
    let editor_input = document.querySelector('.editor-input')

    stock.setAttribute('checked', true)



    let image_div = document.querySelector('.image-div')
    let image_input = document.querySelector('.image-input')

    let imagePreview = document.querySelector('.image-preview')
    let image_image = document.querySelector('.image-image')
    let image_size = document.querySelector('.image-size')
    let image_name = document.querySelector('.image-name')


    image_div.addEventListener('click', () => {
        image_input.click()
    })




    image_input.addEventListener('change', (e) => {
        imagePreview.classList.remove('d-none')
        let image = e.target.files[0]
        let img_name = image.name;
        // convert into kbs
        let img_size = (image.size / 1024).toFixed(0)

        let img_link = URL.createObjectURL(image)


        image_name.innerHTML = img_name
        image_size.innerHTML = `${img_size} kb`
        image_image.src = img_link



    })




    // switch btn
    _switch.addEventListener('click', () => {
        switch_btn.classList.toggle('move-switch')
        _switch.classList.toggle('inactive-switch')

        stock.checked = !stock.checked;
        if (stock.value == 'true') {
            stock.value = false
        } else {
            stock.value = true
        }

    })



    let tax = document.querySelector('input[name="tax"]')

    tax.addEventListener('change', () => {
        console.log('changes')
        if (tax.value == 'true') {
            tax.value = false
        } else {
            tax.value = true

        }
    })






    // handle Editing

    const handleEditing = (button, styleName) => {
        let child = button.children[0]
        child.classList.toggle('active')

        document.execCommand(styleName, false, null)
        editor_input.value = text.innerHTML


    }


    text.addEventListener('keyup', () => {
        editor_input.value = text.innerHTML
        console.log(editor_input.value)
    })
    </script>



</body>

</html>