<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }


        .navbar {
            background: linear-gradient(135deg, #333, #555);
            padding: 10px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            color: #c0c0c0;
            font-size: 1.8em;
            font-weight: 700;
            text-shadow: 0 0 10px rgba(192, 192, 192, 0.8);
        }
        .navbar-nav .nav-link {
            color: #c0c0c0;
            font-size: 1.1em;
            margin-left: 20px;
            transition: color 0.3s, text-shadow 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ffd700;
            text-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
        }


        .container {
            padding-top: 80px;
        }

        .admin-header {
            text-align: center;
            padding: 20px;
            background: #333;
            color: #c0c0c0;
            border-bottom: 4px solid #c0c0c0;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
        }


        .table-responsive {
            background-color: #111;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #c0c0c0;
        }

        th {
            background-color: #000;
            color: #c0c0c0;
            text-shadow: 0 0 10px rgba(192, 192, 192, 0.8);
        }

        td {
            background-color: #111;
            color: #c0c0c0;
        }

        tr:hover td {
            background-color: #555;
            color: #fff;
        }


        .btn-primary {
            background-color: #c0c0c0;
            border-color: #000;
            color: #000;
            font-size: 1em;
            padding: 10px 30px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
            text-align: center;
            margin: 5px;
            /* margin-left: 80%; */
        }

        .btn-primary:hover {
            background-color: #ffd700;
            color: #fff;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(192, 192, 192, 0.4);
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="admin-header">
            <h1>Admin Dashboard</h1>
        </header>

        <div class="table-responsive">
            <div class="text-center mb-4">
                <h2 class="text-center mb-4">Transaction List</h2>
                <img src="storage/image/user.png" alt="">
                <a href="/logout"><button class="btn btn-primary">Logout</button></a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Game Type</th>
                        <th>Jenis_Pembayaran</th>
                        <th>Price</th>
                        <th>Transaction Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $key => $item)
                    <tr>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->Game_type }}</td>
                        <td>{{ $item->jenis_pembayaran }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->transaction_date }}</td>
                        <td>
                            <a href="/user/delete/{{ $item->id }}" onclick="return confirm('Yakin ingin menghapus?')"><button class="btn btn-primary">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>
