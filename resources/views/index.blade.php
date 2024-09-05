<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Game Top Up - Futuristic</title>
        <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

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
            background: rgba(0, 0, 0, 0.8);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
            transition: background 0.3s, box-shadow 0.3s;
        }

        header.scrolled {
            background: rgba(0, 0, 0, 1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 1);
        }

        header .navbar-brand {
            display: flex;
            align-items: center;
            color: #c0c0c0;
            font-size: 1.8em;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 0 0 10px #c0c0c0;
            transition: color 0.3s, text-shadow 0.3s;
        }

        header .navbar-brand:hover {
            color: #ffd700;
            text-shadow: 0 0 15px #ffd700;
        }

        header .navbar-nav {
            margin-left: auto;
        }

        header .navbar-nav .nav-link {
            color: #c0c0c0;
            font-weight: bold;
            transition: color 0.3s, text-shadow 0.3s;
        }

        header .navbar-nav .nav-link:hover {
            color: #ffd700;
            text-shadow: 0 0 10px #ffd700;
        }

        .hero {
            background: url('futuristic-bg.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 200px 20px;
            position: relative;
            z-index: 1;
            overflow: hidden;
            background-attachment: fixed;
            background-size: cover;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .hero h2 {
            font-size: 4em;
            margin-bottom: 20px;
            text-shadow: 0 0 20px #ffd700, 0 0 40px #ffd700;
            animation: glowText 2s infinite alternate;
        }

        .hero p {
            font-size: 1.5em;
            margin-bottom: 40px;
            animation: fadeIn 2s ease-in;
            text-shadow: 0 0 15px #ffd700;
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

        .carousel-inner img {
            transition: filter 0.5s ease-in-out;
            filter: brightness(0.8);
            margin-bottom: 70px;
            border-radius: 30px;
        }

        .carousel-item:hover img {
            filter: brightness(1);
        }

        .carousel-caption {
            bottom: 20%;
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 10px;
            font-size: 1.2em;
            text-shadow: 0 0 10px #ffd700;
        }

        .carousel-indicators li {
            background-color: #ffd700;
            border-radius: 50%;
        }

        .carousel-indicators .active {
            background-color: #c0c0c0;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }

        .featured-games, .featured-products {
            padding: 60px 20px;
            background: #1a1a1a;
            position: relative;
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
            text-shadow: 0 0 15px #c0c0c0;
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
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.8);
        }

        .game-item img, .product-item img {
            width: 100%;
            height: auto;
            max-height: 300px;
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
            text-shadow: 0 0 10px #ffd700;
        }

        footer {
            background: rgba(0, 0, 0, 0.9);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-top: 2px solid #c0c0c0;
            font-size: 1em;
        }

        footer a {
            color: #c0c0c0;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #ffd700;
        }

        @media (max-width: 768px) {
            .hero {
                padding: 150px 10px;
            }

            .carousel-inner img {
                height: 50vh;
            }

            .game-item img {
                max-height: 200px;
            }
        }

        @keyframes glowText {
            from {
                text-shadow: 0 0 10px #ffd700;
            }
            to {
                text-shadow: 0 0 30px #ffd700;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
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
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Games</a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">Logout</a>
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
                <p>Segera isi ulang game favorit Anda</p>
                <a href="#featured-games" class="btn btn-primary">Explore Now</a>
            </div>
        </section>
        <section id="carouselSection" class="container mt-5">
            <div id="carouselExampleAutoplay" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/image/iklan1.jpg') }}" class="d-block w-100" style="height: 70vh; object-fit: cover" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/image/iklan2.jpg') }}" class="d-block w-100" style="height: 70vh; object-fit: cover" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/image/iklan3.jpg') }}" class="d-block w-100 " style="height: 70vh; object-fit: cover" alt="Slide 3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/image/iklan4.jpg') }}" class="d-block w-100 " style="height: 70vh; object-fit: cover" alt="Slide 4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/image/iklan5.jpg') }}" class="d-block w-100 " style="height: 70vh; object-fit: cover" alt="Slide 5">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/image/iklan6.jpg') }}" class="d-block w-100 " style="height: 70vh; object-fit: cover" alt="Slide 6">
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="4"></li>
                    <li data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="5"></li>

                </ol>
            </div>
        </section>

        <section id="featured-games" class="featured-games">
            <div class="container">
                <h2>Game Populer</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image.png" alt="Game Title 1">
                            <h3>Mobile Legends</h3>

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image2.png" alt="Game Title 2">
                            <h3>Free Fire</h3>

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image1.png" alt="Game Title 3">
                            <h3>PUBG Mobile</h3>

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="game-item">
                            <img src="storage/image/image3.png" alt="Game Title 4">
                            <h3>Point Blank</h3>

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="game-item">
                            <img src="storage/image/image4.png" alt="Game Title 5">
                            <h3>Valorant</h3>

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="game-item">
                            <img src="storage/image/image5.png" alt="Game Title 6">
                            <h3>Honor of Kings</h3>

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

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <img src="storage/image/image4.png" alt="Product 2">
                            <h3>Valorant</h3>

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <img src="storage/image/image5.png" alt="Product 3">
                            <h3>Honor of Kings</h3>

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <img src="storage/image/image2.png" alt="Product 4">
                            <h3>Honor of Kings</h3>

                            <a href="/user/viewcreate" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 EFDG Top-Up. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        var myCarousel = document.querySelector('#carouselExampleAutoplay');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
            ride: 'carousel'
        });
    </script>

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
    <script>
        var myCarousel = document.querySelector('#carouselExampleAutoplay')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 5000,
            ride: 'carousel'
        });
    </script>

</body>
</html>
