<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            padding: 10px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .product-grid img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('product') }}">Product</a>
        <a href="{{ route('users', ['id' => 10, 'name' => 'Fachry Akbar Bagaskara']) }}">User</a>
        <a href="{{ route('transact') }}">Transaction</a>
    </div>
    <div class="container">
        <h1 style="color: red">Daftar Produk Beauty & Health:</h1>
        <div class="product-grid">
            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/7/27/c26e0c28-57e7-4ab5-aaf0-e20011f37066.png" alt="Produk 1">
            <img src="https://skintific.com/cdn/shop/files/1_12.png?v=1713959027&width=2048" alt="Produk 2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRieqgihzlTiS69ZtmhSjW7Xk7kikpuAeOrcQ&s" alt="Produk 3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj4FREoWF7tJ5Xw7TtgS7vaV3Z2sLYwt8nLQ&s" alt="Produk 4">
            <img src="https://nihonmart.id/pub/media/catalog/product/cache/8a3fa81d90974d9a7299f2eff309979f/a/c/acne_and_pore_cleanser_scrub-min.png" alt="Produk 5">
            <img src="https://www.garnier.co.id/-/media/project/loreal/brand-sites/garnier/apac/id/products/bright-complete-anti-acne/bright-complete-anti-acne-serum/bright_complete_anti_acne_serum_t1.jpg?w=1200&rev=ca13449f7b104d54a1cc29dff1dd7a2e&hash=195BBDAB80DC1B0E6EA81815DC95FFA3" alt="Produk 6">
        </div>
    </div>
</body>
</html>
