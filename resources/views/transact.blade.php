<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
        .table-container {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
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

    <div class="table-container">
        <h2 style="text-align: center;">Detail Transaksi</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Pelanggan</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $transactions = [
                        ['user' => 'Alec Telles', 'product' => 'Beras', 'quantity' => 2, 'price' => 100000],
                        ['user' => 'Dom', 'product' => 'Indomie', 'quantity' => 2, 'price' => 4500],
                        ['user' => 'Michael Jackson', 'product' => 'Kahf Face Wash', 'quantity' => 1, 'price' => 25000]
                    ];
                @endphp

                @foreach ($transactions as $trx)
                    <tr>
                        <td>{{ $trx['user'] }}</td>
                        <td>{{ $trx['product'] }}</td>
                        <td>{{ $trx['quantity'] }}</td>
                        <td>Rp {{ number_format($trx['price'] * $trx['quantity'], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
