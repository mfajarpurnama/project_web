<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #111;
            padding: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            border-bottom: 2px solid #c0c0c0;
        }

        header .navbar-brand {
            display: flex;
            align-items: center;
            color: #c0c0c0;
            font-size: 1.8em;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 0 0 10px #c0c0c0;
        }

        header .navbar-brand i {
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: #fff;
            margin-left: 20px;
            transition: color 0.3s, text-shadow 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #c0c0c0;
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
            margin-bottom: 15px;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-header {
            background-color: #000;
            color: #c0c0c0;
            text-shadow: 0 0 8px #c0c0c0;
            font-size: 1.5em;
            padding: 20px;
            border-bottom: 1px solid #c0c0c0;
        }

        .card-body {
            padding: 30px;
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
            box-shadow: 0 0 12px #c0c0c0;
            transform: scale(1.05);
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #c0c0c0;
        }

        .card-option, .price-card {
            border: 1px solid #444;
            border-radius: 12px;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .card-option:hover, .price-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.8);
        }

        .card-option input, .price-card input {
            display: none;
        }

        .card-option label, .price-card label {
            display: block;
            padding: 15px;
            margin: 0;
            text-align: center;
            color: #fff;
            background-color: #444;
            border-radius: 12px;
            cursor: pointer;
        }

        .card-option input:checked + label, .price-card input:checked + label {
            background-color: #555;
            border-color: #ffd700;
            box-shadow: 0 0 8px #ffd700;
        }

        .price-card label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .price-card i {
            color: #ffd700;
            font-size: 1.2em;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5em;
            }

            .card-header {
                font-size: 1.2em;
            }

            .form-control, .btn-secondary {
                font-size: 0.9em;
            }

            .card-body {
                padding: 20px;
            }

            .row {
                margin-left: 0;
                margin-right: 0;
            }

            .col-md-6 {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.2em;
            }

            .card-header {
                font-size: 1em;
            }

            .form-control, .btn-secondary {
                font-size: 0.8em;
            }

            .card-body {
                padding: 15px;
            }

            .admin ul li {
                font-size: 0.9em;
            }

            .card-option label, .price-card label {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    @include('sweetalert::alert')
    <header id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="fas fa-gem fa-2x me-2" style="color: #ffd700"></i>
                    EFDG Top-Up
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a href="/index" class="nav-link"><button class="btn btn-secondary">Kembali</button></a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <div class="admin mb-4">
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/user/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header text-center">
                                    User ID
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_id" placeholder="Masukkan User ID" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    Tanggal
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="transaction_date" value="{{ old('transaction_date') }}" required>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="card mt-4">
                                <div class="card-header text-center">
                                    Game Type
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="ml" name="Game_type" value="Mobile Legends" required>
                                                        <label for="ml">Mobile Legends</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="ff" name="Game_type" value="Free Fire" required>
                                                        <label for="ff">Free Fire</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="pubg" name="Game_type" value="PUBG Mobile" required>
                                                        <label for="pubg">PUBG Mobile</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="pb" name="Game_type" value="Point Blank" required>
                                                        <label for="pb">Point Blank</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="valorant" name="Game_type" value="Valorant" required>
                                                        <label for="valorant">Valorant</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="hok" name="Game_type" value="Honor of Kings" required>
                                                        <label for="hok">Honor of Kings</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card mt-4">
                                <div class="card-header text-center">
                                    Jenis Pembayaran
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="cc" name="jenis_pembayaran" value="Credit Card" required>
                                                        <label for="cc">Credit Card</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="paypal" name="jenis_pembayaran" value="PayPal" required>
                                                        <label for="paypal">PayPal</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="dana" name="jenis_pembayaran" value="Dana" required>
                                                        <label for="dana">Dana</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="qris" name="jenis_pembayaran" value="Qris" required>
                                                        <label for="qris">Qris</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="bank" name="jenis_pembayaran" value="Bank Transfer" required>
                                                        <label for="bank">Bank Transfer</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card-option">
                                                        <input type="radio" id="crypto" name="jenis_pembayaran" value="Crypto" required>
                                                        <label for="crypto">Crypto</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header text-center">
                            Price
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="price-card">
                                                <input type="radio" id="price_5000" name="harga" value="5000" required>
                                                <label for="price_5000">
                                                    <i class="fas fa-gem"></i> 5000 (10 Diamonds)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="price-card">
                                                <input type="radio" id="price_10000" name="harga" value="10000" required>
                                                <label for="price_10000">
                                                    <i class="fas fa-gem"></i> 10000 (20 Diamonds)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="price-card">
                                                <input type="radio" id="price_15000" name="harga" value="15000" required>
                                                <label for="price_15000">
                                                    <i class="fas fa-gem"></i> 15000 (30 Diamonds)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="price-card">
                                                <input type="radio" id="price_20000" name="harga" value="20000" required>
                                                <label for="price_20000">
                                                    <i class="fas fa-gem"></i> 20000 (40 Diamonds)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="price-card">
                                                <input type="radio" id="price_25000" name="harga" value="25000" required>
                                                <label for="price_25000">
                                                    <i class="fas fa-gem"></i> 25000 (50 Diamonds)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="price-card">
                                                <input type="radio" id="price_30000" name="harga" value="30000" required>
                                                <label for="price_30000">
                                                    <i class="fas fa-gem"></i> 30000 (60 Diamonds)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-secondary w-100 btn-block mb-5" value="Add Transaction">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
