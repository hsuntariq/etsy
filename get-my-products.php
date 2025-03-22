<?php
include './config.php';
$id = $_GET['id'];
$select = "SELECT * FROM product WHERE category_id = $id";
$result = mysqli_query($connection, $select);
foreach ($result as $item) {
?>

<div class="col-xl-3 my-2 col-lg-3 col-md-4 col-sm-6">
    <div class="card border-0 bg-white">

        <div class="card border-0 p-0 shadow">
            <img width="100%" height="250px" class="object-fit-cover"
                src="./product_images/<?php echo $item['image'] ?>" alt="">
        </div>
        <div class="card-body bg-white shadow">
            <h6><?php echo $item['name'] ?></h6>
            <div class="d-flex gap-2">

                <h6 class="text-orange">$<?php echo $item['discounted_price'] ?></h6>
                <small
                    class="text-secondary fw-semibold text-decoration-line-through">$<?php echo $item['base_price'] ?></small>
                <small class="text-sm text-success fw-bold">
                    <?php
                        $base = $item['base_price'];
                        $discount = $item['discounted_price'];
                        $percetange = (($base - $discount) / $base) * 100;
                        echo "(" .  floor($percetange) . "%)"
                        ?>
                </small>

            </div>
        </div>
    </div>
</div>

<?php } ?>