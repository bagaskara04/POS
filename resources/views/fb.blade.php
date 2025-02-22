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
        <h1 style="color: red">Daftar Produk Food & Beverage:</h1>
        <div class="product-grid">
            <img src="https://www.indomie.com/uploads/product/indomie-mi-goreng-special_detail_094906814.png" alt="Produk 1">
            <img src="https://www.sariroti.com/storage/app/media/03-product/rotitawar/roti_tawar_kupas.jpg" alt="Produk 2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5fkVQoDg4wvrf3fxGiT9Lh6bgsxrD7e9eQ&s" alt="Produk 3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwzM8EdY2YVlT5yH2q1o5KoH43WJVMy69MHw&s" alt="Produk 4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKJkIiOTKcLDHkIWQ6vpMt5s1jrIR2Bb0_Dg&s" alt="Produk 5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqyYJarWmR2tLiK_sf_tGIKZ7KzTyKU_UmoQ&s" alt="Produk 6">
            <img src="https://www.urc.co.id/wp-content/uploads/2019/04/Piattos-Sapi-Panggang.png" alt="Produk 7">
            <img src="https://www.masakapahariini.com/wp-content/uploads/2018/04/kecap-bango-manis-kemasan-isi-ulang-600ml-300x300.png" alt="Produk 8">
            <img src="https://vivregourmet.com/wp-content/uploads/2020/07/ABC-Tomat-335-mL.png" alt="Produk 9">
        </div>
    </div>
</body>
</html>
