<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EFDGShop Indonesia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #000000, #333333);
      color: #fff;
      font-family: 'Orbitron', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 150vh;
      margin: 0;
    }

    .container {
      position: relative;
      z-index: 2;
    }
    

    .card {
      background: rgba(0, 0, 0, 0.85);
      border-radius: 1.5rem;
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.7);
      width: 100%;
      max-width: 600px;
      padding: 2rem;
      margin: 1rem;
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .form-control {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid #555;
      color: #fff;
      border-radius: 0.75rem;
      padding: 1rem;
      transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.25);
      border-color: #fff;
      box-shadow: 0 0 0 0.2rem rgba(192, 192, 192, 0.5);
    }

    .btn-primary {
      background: linear-gradient(45deg, #ffd700, #6c757d);
      border: none;
      color: #fff;
      border-radius: 0.75rem;
      padding: 1rem 2rem;
      font-size: 1.2rem;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.6);
      transition: background 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(45deg, #6c757d, #ffd700);
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.7);
      transform: scale(1.05);
    }

    .btn-primary:active {
      transform: scale(0.98);
    }

    a {
      color: #c0c0c0;
      transition: color 0.3s ease;
    }

    a:hover {
      color: #ffffff;
    }

    .offcanvas {
      background: rgba(0, 0, 0, 0.9);
      color: #ffffff;
      width: 100%;
      max-width: 400px;
      margin: 0;
      position: fixed;
      top: 0;
      right: 0;
      transform: translateX(100%);
      height: 100%;
      box-shadow: 0 0 80px rgba(0, 0, 0, 0.8);
      border-radius: 1.5rem;
      overflow-y: auto;
      transition: transform 0.8s ease, opacity 0.7s ease;
    }

    .offcanvas.show {
      transform: translateX(0);
      opacity: 1;
    }

    .offcanvas-header {
      background: linear-gradient(135deg, #ffd700, #6c757d);
      color: #fff;
      padding: 1rem;
      border-bottom: 1px solid #555;
    }

    .offcanvas-body {
      padding: 2rem;
    }

    .offcanvas-body h5 {
      color: #c0c0c0;
      margin-bottom: 1.5rem;
    }

    .offcanvas-body .form-label {
      color: #ffffff;
    }

    .offcanvas-body .form-control {
      border-color: #555;
    }

    .offcanvas-body input, .offcanvas-body button {
      border-radius: 0.75rem;
      transition: box-shadow 0.3s ease;
    }

    .offcanvas-body input:focus, .offcanvas-body button:hover {
      box-shadow: 0 0 20px rgba(192, 192, 192, 0.5);
    }

    .offcanvas-body::-webkit-scrollbar {
      width: 12px;
    }

    @media (max-width: 767.98px) {
      .offcanvas {
        width: 100%;
        max-width: none;
        border-radius: 0;
      }
    }

    @media (min-width: 768px) {
      .offcanvas {
        max-width: 500px;
      }
    }
  </style>
</head>

<body>
  <form action="/auth" method="post">
    @csrf
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <i class="fas fa-gem fa-3x me-3" style="color: #ffd700;"></i>
            <span class="h1 fw-bold mb-0" style="font-style: italic; color: #ffffff;">EFDG DIAMOND</span>
          </div>
          <h5 class="fw-normal mb-4" style="letter-spacing: 1px; color: #ffffff;">Sign into your account</h5>
          <div class="form-outline mb-4">
            <input type="email" id="form2Example17" style="color: #ffd700" class="form-control form-control-lg" name="email" required />
            <label class="form-label" for="form2Example17">Email address</label>
          </div>
          <div class="form-outline mb-4">
            <input type="password" id="form2Example27"  style="color: #ffd700" class="form-control form-control-lg" name="password" required />
            <label class="form-label" for="form2Example27">Password</label>
          </div>
          <div class="pt-1 mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
          </div>
          <p class="mb-5 pb-lg-2">Don't have an account? <a href="#!" data-bs-toggle="offcanvas" data-bs-target="#registerOffcanvas">Register here</a></p>
        </div>
      </div>
    </div>
  </form>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="registerOffcanvas" aria-labelledby="registerOffcanvasLabel">
    <div class="offcanvas-header">
      <h5 id="registerOffcanvasLabel">Register</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <form action="/register" method="post">
        @csrf
        <div class="form-outline mb-4">
          <input type="text" id="name" class="form-control form-control-lg"  style="color: #ffd700" name="name" required />
          <label class="form-label" for="registerName">Name</label>
        </div>
        <div class="form-outline mb-4">
          <input type="email" id="email" class="form-control form-control-lg"  style="color: #ffd700" name="email" required />
          <label class="form-label" for="registerEmail">Email address</label>
        </div>
        <div class="form-outline mb-4">
          <input type="password" id="password" class="form-control form-control-lg"  style="color: #ffd700" name="password" required />
          <label class="form-label" for="registerPassword">Password</label>
        </div>
        <div class="form-outline mb-4">
          <input type="password" id="password_confirm" class="form-control form-control-lg"  style="color: #ffd700" name="password_confirmation" required />
          <label class="form-label" for="registerConfirmPassword">Confirm Password</label>
        </div>
        <div class="pt-1 mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
