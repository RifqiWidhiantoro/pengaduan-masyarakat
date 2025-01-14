<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pengaduan Masyarakat</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #0056b3, #007bff);
        }

        .login-container {
            background: #ffffff;
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 80px;
        }

        .logo h1 {
            font-size: 18px;
            color: #333;
            font-weight: 600;
            margin-top: 10px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group input {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        .btn-login {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .register-link {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                padding: 30px;
            }

            .form-group input {
                font-size: 14px;
            }

            .btn-login {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="https://via.placeholder.com/80" alt="Logo">
            <h1>Pengaduan Masyarakat</h1>
        </div>
        <form action="#" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn-login">Log In</button>
        </form>
        <div class="register-link">
            Belum punya akun? <a href="register.php">Registrasi</a>
        </div>
    </div>
</body>
</html>
