<div class="shadow bg-white admin-sidebar" style="height: 90vh;overflow-y:scroll;">
    <div class="d-flex p-3 align-items-center gap-2">
        <div class="user-image">
            <img src="https://media2.dev.to/dynamic/image/width=800%2Cheight=%2Cfit=scale-down%2Cgravity=auto%2Cformat=auto/https%3A%2F%2Fwww.gravatar.com%2Favatar%2F2c7d99fe281ecd3bcd65ab915bac6dd5%3Fs%3D250"
                width="40px" height="40px" class="rounded-circle" alt="User image">
        </div>
        <div class="user-info">
            <h6 class="m-0">User name</h6>
            <p class="text-secondary m-0">
                Project manager
            </p>
        </div>
    </div>

    <ul class="list-group border-0 ">
        <!-- Dashboard Overview -->
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/dashboard" class="text-decoration-none text-secondary-emphasis fw-semibold  ">
                <i class="bi bi-house-door"></i> Dashboard
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <div class="dropdown">
                <span class="text-secondary-emphasis fw-semibold dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bookmark"></i> Categories
                </span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-dark" href="./add-categories.php">Add Category</a></li>
                    <li><a class="dropdown-item text-dark" href="./view-category.php">View Categories</a></li>
                </ul>
            </div>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <div class="dropdown">
                <span class="text-secondary-emphasis fw-semibold dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bookmark"></i> Products
                </span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-dark" href="./add-product.php">Add Products</a></li>
                    <li><a class="dropdown-item text-dark" href="./view-product.php">View Products</a></li>
                </ul>
            </div>
        </li>

        <!-- Orders Section -->
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/orders" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-box"></i> Orders
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/orders/pending" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-clock"></i> Pending Orders
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/orders/completed" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-check-circle"></i> Completed Orders
            </a>
        </li>

        <!-- Products Section -->
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/products" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-gear"></i> Products
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/products/add" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-plus"></i> Add Product
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/categories" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-tags"></i> Categories
            </a>
        </li>

        <!-- Customers Section -->
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/customers" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-person"></i> Customers
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/customers/active" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-person-check"></i> Active Customers
            </a>
        </li>

        <!-- Sales and Analytics Section -->
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/analytics" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-bar-chart-line"></i> Sales Analytics
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/reports" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-file-earmark-text"></i> Reports
            </a>
        </li>

        <!-- Settings Section -->
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/settings" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/settings/payment" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-credit-card"></i> Payment Settings
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/settings/shipping" class="text-decoration-none text-secondary-emphasis fw-semibold ">
                <i class="bi bi-truck"></i> Shipping Settings
            </a>
        </li>

        <!-- Logout -->
        <li class="list-group-item dash-list p-3 border-0">
            <a href="/logout" class="text-decoration-none text-secondary-emphasis fw-semibold  text-danger">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </li>
    </ul>




</div>