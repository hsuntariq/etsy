<?php
include './config.php';
$selectCat = "SELECT * FROM category";
$resultCat = mysqli_query($connection, $selectCat);

foreach ($resultCat as $item) {
?>
<a href="./relevent-products.php?id=<?php echo $item['id'] ?>&name=<?php echo $item['name'] ?>"
    class="col-lg-2 text-decoration-none text-dark cursor-pointer col-md-4 flex-shrink-0 col-sm-6 col-2  ">
    <div style="height: 280px;" class="card shadow border-0 rounded-3 overflow-hidden">
        <div style="height: 100%;" class="d-flex   flex-column">

            <img class="rounded-3 object-fit-cover" src="./category_images/<?php echo $item['image'] ?>" width="100%"
                height="100%" alt="">
        </div>
    </div>
    <h6 class="text-start py-3 text-capitalize"> <?php echo $item['name'] ?> </h6>
</a>

<?php } ?>