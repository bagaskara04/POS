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
        <h1 style="color: red">Daftar Home Care</h1>
        <div class="product-grid">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHTzSJet0iGv-dI2jJK9VcakvtjCJ4ADyAyg&s" alt="Produk 1">
            <img src="https://kpriundip.com/wp-content/uploads/2024/08/0104118.jpg" alt="Produk 2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4M3VMZ4tYNOBPxEiFGv96SfdsIifVzikWpw&s" alt="Produk 3">
            <img src="https://www.electrolux.co.id/globalassets/appliances/vacuum/z931-fr-1500x1500.png?width=1200&height=630" alt="Produk 4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb5WFK5qsQv0uODp3dpTSmZrKz93xTdeO-og&s" alt="Produk 5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcuDPaNQHxNl-Hl2KQqiLWd_o0te5lv8bdqQ&s" alt="Produk 6">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHwBDPtjIbj0f0fin4kCTWLD3BqD-02aH_Bg&s" alt="Produk 7">
        </div>
    </div>
</body>
</html>
