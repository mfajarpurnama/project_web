<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000; 
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #111; 
            padding: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            border-bottom: 2px solid  #c0c0c0;
        }

        .navbar-brand {
            color: #c0c0c0; 
            font-size: 2em;
            font-weight: bold;
            text-shadow: 0 0 10px  #c0c0c0;
            margin-left: 75%;
        }

        .navbar-nav .nav-link {
            color: #fff; 
            margin-left: 80px;
            transition: color 0.3s, text-shadow 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color:  #c0c0c0; 
            text-shadow: 0 0 10px #c0c0c0;
        }

        .admin ul {
            list-style: none;
            padding: 0;
            margin: 0;
            color: #ff0000; 
        }

        .admin ul li {
            background-color: #222; 
            border: 1px solid #ff0000; 
            padding: 10px;
            margin: 5px 0;
            border-radius: 8px;
        }

        .card {
            background-color: #333;
            border: 1px solid #444; 
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.8);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.02); 
        }

        .card-header {
            background-color: #000;
            color: #c0c0c0;  
            text-shadow: 0 0 8px #c0c0c0; 
            font-size: 1.5em;
            padding: 15px;
            border-bottom: 1px solid #c0c0c0; 
        }

        .card-body {
            padding: 20px;
        }

        .form-control {
            background-color: #222; 
            border: 1px solid #444; 
            color: #fff; 
            border-radius: 6px;
            transition: border-color 0.3s, background-color 0.3s;
        }

        .form-control::placeholder {
            color: #888; 
        }

        .form-control:focus {
            border-color: #c0c0c0;  
            background-color: #333;
            box-shadow: 0 0 5px #c0c0c0;  
            outline: none;
        }

        .btn-secondary {
            background-color: #000;
            border: 1px solid #c0c0c0; 
            color: #c0c0c0;
            font-size: 1em;
            padding: 12px 20px;
            border-radius: 6px;
            transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
        }

        .btn-secondary:hover {
            background-color: #c0c0c0; 
            color: #000; 
            box-shadow: 0 0 12px#c0c0c0; 
            transform: scale(1.05); 
        }

        .btn-block {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <header id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="/index" class="nav-link"><button class="btn btn-secondary">⬅</button></a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <a class="navbar-brand" href="#">EFDG Top-Up</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>       
    </header>

    <div class="container">
        <div class="admin">
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Top Up
                    </div>
                    <div class="card-body">
                        <form action="/user/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="payment_type" class="form-label">User ID</label>
                                <input type="text" class="form-control" name="user_id" placeholder="Masukkan User ID" required>
                            </div>
                            <div class="form-group pt-2">
                                <label for="game_type" class="form-label">Game Type</label>
                                <select id="game_type" name="Game_type" class="form-control" required>
                                    <option value="">Select Game Type</option>
                                    <option value="Mobile Legends">Mobile Legends</option>
                                    <option value="Free Fire">Free Fire</option>
                                    <option value="PUBG Mobile">PUBG Mobile</option>
                                    <option value="Point Blank">Point Blank</option>
                                    <option value="Valorant">Valorant</option>
                                    <option value="Honor of Kings">Honor of Kings</option>
                                </select>
                            </div>
                            <div class="form-group pt-2">
                                <label for="payment_type" class="form-label">Jenis Pembayaran</label>
                                <select id="payment_type" name="jenis_pembayaran" class="form-control" required>
                                    <option value="">Select Payment Type</option>
                                    <option value="Credit Card">Credit Card</option>
                                    <option value="PayPal">Dana</option>
                                    <option value="Bank Transfer">Gopay</option>
                                    <option value="Crypto">Crypto</option>
                                </select>
                            </div>
                            <div class="form-group pt-2">
                                <label for="price" class="form-label">Price</label>
                                <select id="price" name="harga" class="form-control" required>
                                    <option value="">Select Price</option>
                                    <option value="5000">5000 (10 Diamonds)</option>
                                    <option value="10000">10000 (20 Diamonds)</option>
                                    <option value="15000">15000 (30 Diamonds)</option>
                                    <option value="20000">20000 (40 Diamonds)</option>
                                    <option value="25000">25000 (50 Diamonds)</option>
                                    <option value="30000">30000 (60 Diamonds)</option>
                                    <option value="35000">35000 (70 Diamonds)</option>
                                    <option value="40000">40000 (80 Diamonds)</option>
                                </select>
                            </div>
                            <div class="form-group pt-2">
                                <label for="payment_type" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="transaction_date" value="{{ old('transaction_date') }}" required>
                            </div>
                            <input type="submit" class="btn btn-secondary w-100 btn-block mt-5" value="Add Transaction">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
