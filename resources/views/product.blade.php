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
        .categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 50px;
            margin-top: 20px;
        }
        .category {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 150px;
        }
        .category i {
            font-size: 50px;
            color: #333;
            
        }
        .category a {
            text-decoration: none;
            color: black;
            display: block;
            margin-top: 5px;
            
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
        <h1 style="color: red">Daftar Kategori :</h1>
        <div class="categories">
            <div class="category">
                <a href="{{ route('fb') }}">
                    <i class="fas fa-utensils"></i>
                    Food & Beverage
                </a>
            </div>
            <div class="category">
                <a href="{{ route('behe') }}">
                    <i class="fas fa-spa"></i>
                    Beauty & Health
                </a>
            </div>
            <div class="category">
                <a href="{{ route('hc') }}">
                    <i class="fas fa-home"></i>
                    Home Care
                </a>
            </div>
            <div class="category">
                <a href="{{ route('bk') }}">
                    <i class="fas fa-baby"></i>
                    Baby & Kid
                </a>
            </div>
        </div>
    </div>
</body>
</html>
