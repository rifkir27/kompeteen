<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Kompeteen</title>

    <!-- Google Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #4b0082;
            height: 100vh;
        }

        .register-box {
            max-width: 420px;
            width: 100%;
            background-color: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .brand {
            color: white;
            font-weight: 700;
            font-size: 2rem;
        }

        .brand span {
            color: orange;
        }

        input.form-control {
            border: 1px solid orange;
        }

        .btn-register {
            background-color: #4b0082;
            color: white;
            font-weight: 600;
        }

        .btn-register:hover {
            background-color: #3a006d;
        }

        .form-check-label {
            font-size: 13px;
        }

        a {
            text-decoration: underline;
            color: #333;
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center justify-content-center">

    <!-- Kompeteen logo -->
    <div class="text-center mb-3 brand">Kompe<span>teen</span></div>

    <!-- Register Box -->
    <div class="register-box">
        <h5 class="text-center mb-4">create an account</h5>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label>Enter your name</label>
                <input type="text" class="form-control" name="name" placeholder="your name" required>
            </div>

            <div class="mb-3">
                <label>Make username</label>
                <input type="text" class="form-control" name="username" placeholder="username" required>
            </div>

            <div class="mb-3">
                <label>Enter your Email</label>
                <input type="email" class="form-control" name="email" placeholder="your email" required>
            </div>

            <div class="mb-3">
                <label>Enter your Password</label>
                <input type="password" class="form-control" name="password" placeholder="your password" required>
            </div>

            <div class="mb-3">
                <label>Confirm password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" required>
                <label class="form-check-label">
                    I agree all statements in <a href="#">Terms of service</a>
                </label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-register">sign up</button>
            </div>
        </form>
    </div>

</body>
</html>
