<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inside Spector</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .product-image {
        background-color: #f8f9fa;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .product-image img {
        max-width: 100%;
        max-height: 100%;
    }

    .price-info {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .btn-custom {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-align: center;
        display: inline-block;
        margin-top: 10px;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>INSIDE SPECTORES</h1>
                <p>Multiple packing components for clothing, toiletries, devices and more.</p>
                <h2>Narrative | Find Out!</h2>
                <div class="product-image">
                    <!-- Placeholder for product image -->
                    <img src="http://localhost:3000/product_images/game1.jpg" alt="Product Image">
                </div>
                <h3>Tripcomp Harbside Luggage Set, Carry-on, Lightweight Suitcase Set of 3 Piece with Spinner Wheels,
                    TSA Lock, 20inch/25inch/29inch (Purple)</h3>
                <div class="price-info">
                    <span class="original-price">$80.50</span>
                    <span class="discounted-price">$80.50</span>
                </div>
                <p>HIGH QUALITY LUGGAGE SETS. The luggage sets are made of thick materials for handheld, which makes
                    them more durable, lighter, and improved resistant to rising travel. The relaxed finish is not only
                    a fast-loaded but also a cushion-resistant. The 3-inch carry-on medium size US - based and
                    international airline carry-on rate requirements, and the 4-inch work is not well suited for checked
                    luggage, making them the best choice for long trips and business trips.</p>
                <p>ENFORDSIZE SPINERY WHEELS. Our luggage set has double-wheels that make it simple distribution, making
                    it very smooth and quiet when moving. Each substrate...</p>
                <a href="#" class="btn-custom">Add to cart</a>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Now $80.50 ($1000m)</h5>
                        <p class="card-text">You see $120.40</p>
                        <p>You can use purchased online.</p>
                        <ul>
                            <li>Achieve $150mm on your own self-firm! Local Code</li>
                            <li>Free Shipping</li>
                            <li>Free Shop Home</li>
                        </ul>
                        <a href="#" class="btn-custom">Add a replacement bottle</a>
                        <div class="form-group">
                            <label for="shippingOption">How do you want your item?</label>
                            <select class="form-control" id="shippingOption">
                                <option>I want shipping & delivery savings with Walmart</option>
                                <option>Other options</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>