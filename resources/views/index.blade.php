<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Top Up - Futuristic</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            background: #0d0d0d;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        header {
            background: rgba(0, 0, 0, 0.9);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
            transition: background 0.3s;
        }

        header.scrolled {
            background: #000;
        }

        header .navbar-brand {
            color: #c0c0c0; /* Silver */
            font-size: 2em;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 0 0 15px #c0c0c0, 0 0 25px #c0c0c0; 
        }

        header .navbar-nav {
            margin-left: 70%;
        }

        header .navbar-nav .nav-link {
            color: #c0c0c0; 
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        header .navbar-nav .nav-link:hover {
            color: #ffd700;
            transform: scale(1.1);
            text-shadow: 0 0 15px #ffd700;
        }

        .hero {
            background: url('futuristic-bg.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 200px 20px;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        .hero h2 {
            font-size: 3.5em;
            margin-bottom: 20px;
            text-shadow: 0 0 15px #ffd700, 0 0 30px #ffd700, 0 0 45px #ffd700; 
            animation: glowText 2s infinite alternate;
        }

        @keyframes glowText {
            from {
                text-shadow: 0 0 15px #ffd700, 0 0 30px #ffd700, 0 0 45px #ffd700;
            }
            to {
                text-shadow: 0 0 25px #ffd700, 0 0 40px #ffd700, 0 0 55px #ffd700;
            }
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 40px;
            animation: fadeIn 2s ease-in;
            text-shadow: 0 0 10px #ffd700;
        }

        .btn-primary {
            background: #c0c0c0;
            border-color: #c0c0c0; 
            color: #000;
            font-size: 1.2em;
            padding: 15px 30px;
            border-radius: 50px;
            transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 0 10px #c0c0c0;
        }

        .btn-primary:hover {
            background: #ffd700; 
            transform: scale(1.1);
            box-shadow: 0 0 20px #ffd700; 
        }

        .featured-games, .featured-products {
            padding: 60px 20px;
            background: #1a1a1a;
            position: relative;
            z-index: 1;
        }

        .featured-games::before, .featured-products::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, transparent, #c0c0c0, transparent); 
            transform: translateX(-50%);
            box-shadow: 0 0 10px #c0c0c0;
        }

        .featured-games h2, .featured-products h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5em;
            color: #c0c0c0;
            text-shadow: 0 0 15px #c0c0c0, 0 0 30px #c0c0c0;
        }

        .game-item, .product-item {
            background: #2a2a2a;
            border: 2px solid #c0c0c0; 
            border-radius: 20px; 
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
        }

        .game-item:hover, .product-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
        }

        .game-item img, .product-item img {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover; 
            border-radius: 10px; 
            transition: transform 0.3s, filter 0.3s;
            box-shadow: 0 0 10px #c0c0c0;
        }

        .game-item img:hover, .product-item img:hover {
            transform: scale(1.05);
            filter: brightness(1.2); 
            box-shadow: 0 0 15px #c0c0c0; 
        }

        .game-item h3, .product-item h3 {
            margin: 20px 0;
            font-size: 1.5em;
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffd700;
        }

        footer {
            background: rgba(0, 0, 0, 0.9);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-top: 2px solid #c0c0c0; 
        }

        footer a {
            color: #c0c0c0; 
            text-decoration: none;
            transition: text-shadow 0.3s;
            text-shadow: 0 0 10px #c0c0c0; 
        }

        footer a:hover {
            text-shadow: 0 0 15px #c0c0c0; 
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    
    <header id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">EFDG Top-Up</a>
                <button class="navbar-toggler" type="button" data -toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Games</a>
                        </li>
                        <li class="nav-item">
                           <a href="/" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>       
    </header>

    <main>
        <section class="hero d-flex align-items-center justify-content-center">
            <div class="hero-content text-center">
                <h2>Selamat Datang di EFDG Top-up</h2>
                <p>Segera isi ulang game favorit Anda dengan platform</p>
            </div>
        </section>

        <section class="featured-games">
            <div class="container">
                <h2>Game Populer</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image.png" alt="Game Title 1">
                            <h3>Mobile Legends</h3>
                            <p>Brief description of Game 1.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image2.png" alt="Game Title 2">
                            <h3>Free Fire</h3>
                            <p>Brief description of Game 2.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image1.png" alt="Game Title 3">
                            <h3>PUBG Mobile</h3>
                            <p>Brief description of Game 3.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="game-item">
                            <img src="storage/image/image3.png" alt="Game Title 1">
                            <h3>Point blank</h3>
                            <p>Brief description of Game 1.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="game-item">
                            <img src="storage/image/image4.png" alt="Game Title 1">
                            <h3>Valorant</h3>
                            <p>Brief description of Game 1.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="game-item">
                            <img src="storage/image/image5.png" alt="Game Title 1">
                            <h3>Honor of Kings</h3>
                            <p>Brief description of Game 1.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-products">
            <div class="container"> 
                <h2>Rekomendasi</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-item">
                            <img src="storage/image/image3.png" alt="Product 1">
                            <h3>Point Blank</h3>
                            <p>Brief description of Product 1.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <img src="storage/image/image4.png" alt="Product 2">
                            <h3>Valorant</h3>
                            <p>Brief description of Product 2.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <img src="storage/image/image5.png" alt="Product 3">
                            <h3>Honor of Kings</h3>
                            <p>Brief description of Product 3.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <img src="storage/image/image2.png" alt="Product 4">
                            <h3>Honor of Kings</h3>
                            <p>Brief description of Product 4.</p>
                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Game Top Up. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

  
    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   
    <script>
      
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 50) {
                $('#navbar').addClass('scrolled');
            } else {
                $('#navbar').removeClass('scrolled');
            }
        });

        $('a[href^="#"]').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 800);
        });
    </script>
</body>
</html>
