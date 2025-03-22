<style>
::-webkit-scrollbar {
    height: 2px;
}

::-webkit-scrollbar-thumb {
    background-color: lightgray;
    height: 2px;
}
</style>
<div class="col-xl-9 col-lg-10 col-11 mx-auto">
    <h2>Featured Products</h2>
    <div class="d-flex gap-3 overflow-x-scroll ">
        <?php
        include './config.php';
        $selectPrroduct = "SELECT * FROM product";
        $resultProduct = mysqli_query($connection, $selectPrroduct);

        foreach ($resultProduct as $item) {
        ?>
        <div class="col-lg-2 cursor-pointer col-md-4 flex-shrink-0 col-sm-6 col-2  ">
            <div style="height: 280px;" class="card shadow border-0 rounded-3 overflow-hidden">
                <div style="height: 100%;" class="d-flex   flex-column">

                    <img class="rounded-3 object-fit-cover" src="./product_images/<?php echo $item['image'] ?>"
                        width="100%" height="100%" alt="">
                </div>
            </div>
            <h4 class="text-start py-3 text-capitalize"> <?php echo $item['name'] ?> </h4>
        </div>

        <?php } ?>

    </div>
</div>