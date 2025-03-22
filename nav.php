<div class="col-xl-9 col-lg-10 col-11 mx-auto">
    <div class="d-flex justify-content-between gap-3 align-items-center">
        <img src="https://cdn.iconscout.com/icon/free/png-256/free-etsy-icon-download-in-svg-png-gif-file-formats--logo-brand-world-logos-vol-1-pack-icons-282219.png?f=webp"
            width="80px" alt="logo">
        <div class="position-relative align-items-center hover-categories our-list cursor-pointer">
            <i class="bi bi-list fs-5" style="color: black;"></i>
            <small class="fw-semibold">Categories</small>


            <!-- category section -->

            <div style="background-color: rgba(0,0,0,0.5);z-index:4"
                class="d-none d-lg-block start-0 category-overlay min-vh-100 w-100 position-fixed top-0">
                <div class="col-5 position-absolute col-sm-2 category-list rounded-3" style="top: 8%;left:10%;">
                    <div class="card p-3 shadow border-0">
                        <ul class="list-unstyled cat-list">
                            <li>Technology</li>
                            <li>Health</li>
                            <li>Science</li>
                            <li>Education</li>
                            <li>Sports</li>
                            <li>Entertainment</li>
                            <li>Travel</li>
                            <li>Food</li>
                            <li>Fashion</li>
                            <li>Business</li>
                            <li>Art</li>
                            <li>Music</li>
                            <li>Literature</li>
                            <li>Movies</li>
                            <li>Gaming</li>
                            <li>Photography</li>
                            <li>Politics</li>
                            <li>Environment</li>
                            <li>History</li>
                            <li>DIY</li>
                            <li>Technology</li>
                            <li>Health</li>
                            <li>Science</li>
                            <li>Education</li>
                            <li>Sports</li>
                            <li>Entertainment</li>
                            <li>Travel</li>
                            <li>Food</li>
                            <li>Fashion</li>
                            <li>Business</li>
                            <li>Art</li>
                            <li>Music</li>
                            <li>Literature</li>
                            <li>Movies</li>
                            <li>Gaming</li>
                            <li>Photography</li>
                            <li>Politics</li>
                            <li>Environment</li>
                            <li>History</li>
                            <li>DIY</li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>

        <div style="" class="overflow-hidden p-1 search-bar rounded-pill border border-2 w-75 border-dark">
            <input type="text" placeholder="Search for anything" class="w-100 bg-transparent border-0"
                style="outline: 0;">
            <div style="background-color: #F1641E;width:40px;height:40px;"
                class="bg-search text-white rounded-pill d-flex justify-content-center align-items-center">
                <i class="bi bi-search"></i>
            </div>
        </div>
        <div class="d-flex align-items-center">

            <small class="fw-semibold hover-categories sign-in cursor-pointer text-capitalize"
                style="white-space: nowrap;">


                <?php
                if (isset($_SESSION['user_success'])) {
                    echo $_SESSION['user_success'];
                } else {
                    echo "<a href='./signIn.php' class='text-decoration-none text-orange login'>Sign In</a>";
                }
                ?>




            </small>

            <div class="d-flex">
                <div style="width:40px;height:40px;"
                    class="bg-search hover-blue cursor-pointer  rounded-pill d-flex justify-content-center align-items-center">
                    <i class="bi bi-heart"></i>
                </div>
                <div style="width:40px;height:40px;"
                    class="bg-search hover-blue cursor-pointer  rounded-pill d-flex justify-content-center align-items-center">
                    <i class="bi bi-gift"></i>
                </div>
                <div style="width:40px;height:40px;"
                    class="bg-search hover-blue cursor-pointer  rounded-pill d-flex justify-content-center align-items-center">
                    <i class="bi bi-bag"></i>
                </div>
                <?php
                if (isset($_SESSION['user_success'])) {
                ?>

                <a href="./logout.php" style="width:40px;height:40px;"
                    class="bg-search hover-blue text-danger cursor-pointer  rounded-pill d-flex justify-content-center align-items-center">
                    <i class="bi bi-power"></i>
                </a>
                <?php
                }
                ?>

            </div>
        </div>


    </div>




</div>
<div class="col-11 mx-auto align-items-center gap-2 search-bar-2">
    <div style="width:40px;height:40px;"
        class="bg-search hover-blue cursor-pointer  rounded-pill d-flex justify-content-center align-items-center">
        <i class="bi bi-list-nested"></i>
    </div>
    <div style="" class="d-flex overflow-hidden p-1 search-bar rounded-pill border border-2 w-100 border-dark">
        <input type="text" placeholder="Search for anything" class="w-100 bg-transparent border-0" style="outline: 0;">
        <div style="background-color: #F1641E;width:40px;height:40px;"
            class="bg-search text-white rounded-pill d-flex justify-content-center align-items-center">
            <i class="bi bi-search"></i>
        </div>
    </div>
</div>

<!-- sidebar -->


<div class="underlay min-vh-100 w-100 position-fixed top-0" style="background-color: rgba(0,0,0,0.5);">
    <?php include './sidebar.php' ?>
</div>