<style>
.product-card-skeleton {
    background: #f0f0f0;
    border-radius: 8px;
    padding: 16px;
    width: 200px;
}

.image-skeleton {
    width: 100%;
    height: 150px;
    background: #e0e0e0;
    border-radius: 4px;
    margin-bottom: 12px;
}

.title-skeleton {
    width: 80%;
    height: 16px;
    background: #e0e0e0;
    border-radius: 4px;
    margin-bottom: 8px;
}

.price-skeleton {
    width: 40%;
    height: 16px;
    background: #e0e0e0;
    border-radius: 4px;
    margin-bottom: 12px;
}

.button-skeleton {
    width: 100%;
    height: 40px;
    background: #e0e0e0;
    border-radius: 4px;
}

@keyframes shimmer {
    0% {
        background-position: -200% 0;
    }

    100% {
        background-position: 200% 0;
    }
}

.image-skeleton,
.title-skeleton,
.price-skeleton,
.description-skeleton,
.button-skeleton {
    background: linear-gradient(90deg, #e0e0e0 25%, #f0f0f0 50%, #e0e0e0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}
</style>


<div class="col-xl-9 loading d-none justify-content-between col-lg-10 col-11 mx-auto">
    <?php
    for ($i = 0; $i < 5; $i++) {
    ?>
    <div class="product-card-skeleton">
        <div class="image-skeleton"></div>
        <div class="title-skeleton"></div>
        <div class="price-skeleton"></div>
        <div class="button-skeleton"></div>
    </div>

    <?php } ?>
</div>