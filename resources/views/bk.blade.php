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
        <h1 style="color: red">Daftar Produk Baby & Kid:</h1>
        <div class="product-grid">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/101/MTA-131365099/no-brand_no-brand_full01.jpg" alt="Produk 1">
            <img src="https://i0.wp.com/rajasusu.com/wp-content/uploads/2019/04/pampers-premium-care-popok-celana-m-46.jpg?fit=800%2C800&ssl=1" alt="Produk 2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS0E1i9NqrLuEykpwv2Ud8TXjINQU6Tp1Wrg&s" alt="Produk 3">
            <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/08/01052151/Nutribaby-Royal-1-Formula-Bayi-Bubuk.jpg" alt="Produk 4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT22a_K7DuxrE9RqEVmSmuWsroY3Mp04i77xA&s" alt="Produk 5">
        </div>
    </div>
</body>
</html>
