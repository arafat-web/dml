<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('admin/images/logo.png') }}" type="image/x-icon">
    <title>Login to Dashboard</title>
    <!----======== Google Fonts ======== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body,
        html {
            height: 100%;
            background-color: #f8f9fa;
        }

        .login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .login__container {
            background: #ffffff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login__container__logo img {
            width: 120px;
            margin-bottom: 1rem;
        }

        .login__container__logo h1 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: #343a40;
        }

        .login__container__form .form__group {
            margin-bottom: 1rem;
            text-align: left;
            position: relative;
        }

        .login__container__form .form__group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #495057;
        }

        .login__container__form .form__group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .login__container__form .form__group .toggle-password {
            position: absolute;
            top: 75%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #495057;
            font-size: 1.2rem;
        }

        .login__container__form .form__group button {
            width: 100%;
            padding: 0.5rem;
            border: none;
            border-radius: 0.25rem;
            background-color: #007bff;
            color: #ffffff;
            font-size: 1rem;
            cursor: pointer;
        }

        .login__container__form .form__group button:hover {
            background-color: #0056b3;
        }

        .text-danger {
            color: #dc3545;
        }

        .font-12 {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <main class="login">
        <div class="login__container">
            <div class="login__container__logo">
                <img src="{{ asset('client/imgs/template/logo.png') }}" alt="logo">
                <h1>Admin Panel</h1>
            </div>
            <div class="login__container__form">
                <form action="{{ route('admin.login.post') }}" method="POST">
                    @csrf
                    <div class="form__group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                        <span class="text-danger font-12">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form__group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                        <span class="toggle-password mt-3" onclick="togglePassword()">
                            <i class="uil uil-eye"></i>
                        </span>
                    </div>
                    <div class="form__group">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var togglePassword = document.querySelector(".toggle-password i");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.classList.remove("uil-eye");
                togglePassword.classList.add("uil-eye-slash");
            } else {
                passwordField.type = "password";
                togglePassword.classList.remove("uil-eye-slash");
                togglePassword.classList.add("uil-eye");
            }
        }
    </script>
</body>

</html>
