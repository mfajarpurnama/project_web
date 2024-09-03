<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Transaction</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a; 
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #000; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            color: #ffd700;
            font-weight: bold;
            font-size: 1.5em;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #ffd700; 
        }

        .user {
            padding: 20px;
        }

        .container {
            background: #2a2a2a; 
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            margin: 50px auto;
        }

        h1 {
            color: #ffd700;
            text-align: center;
            text-shadow: 0 0 10px #ffd700; 
            margin-bottom: 30px;
        }

        .form-control {
            background-color: #333;
            color: #fff;
            border: 1px solid #ffd700; 
        }

        .form-control::placeholder {
            color: #ccc; 
        }

        .form-control:focus {
            border-color: #ffd700; 
            box-shadow: 0 0 5px #ffd700;
        }

        input[type="submit"] {
            background-color: #ffd700;
            color: #000; 
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #ffc107; 
            transform: scale(1.05);
        }

        .error-list {
            color: #ff4d4d;
            margin-bottom: 20px;
        }

        .error-list li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">EFDG-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="user">
        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endif

        <div class="container">
            <h1>Create New Transaction</h1>
            <form action="/user/edit/{{$user->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="user_id" value="{{ $user->user_id }}" placeholder="user_id" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="Game_type" value="{{ $user->Game_type }}" placeholder="game_type" required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="harga" value="{{ $user->harga }}" placeholder="harga" required>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" name="transaction_date" value="{{ $user->transaction_date }}" placeholder="transaction_date" required>
                </div>
                <input type="submit" value="ubah">
            </form>
        </div>
    </div>
    
    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
