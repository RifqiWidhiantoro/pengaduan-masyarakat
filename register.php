<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #007bff;
        }

        .container {
            display: flex;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .form-container {
            flex: 1;
            padding: 40px;
        }

        .form-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333333;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container input {
            margin-bottom: 15px;
            padding: 10px 15px;
            border: 2px solid #007bff;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container input:focus {
            outline: none;
            border-color: #0056b3;
        }

        .form-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .form-container a {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        .image-container {
            flex: 1;
            background: url('https://via.placeholder.com/450') no-repeat center center/cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Registrasi Akun</h2>
            <form action="" method="POST">
                <input type="number" name="nik" placeholder="Masukkan NIK" required>
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required>
                <input type="text" name="username" placeholder="Masukkan Username" required>
                <input type="password" name="password" placeholder="Masukkan Password" required>
                <input type="tel" name="telp" placeholder="Nomor Telepon" required>
                <button type="submit">DAFTAR</button>
                <a href="login.php">Sudah punya akun? LOGIN</a>
            </form>

            <?php
            // Koneksi ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pengaduan_masyarakat";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Periksa koneksi
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Proses form saat disubmit
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nik = $_POST['nik'];
                $nama = $_POST['nama'];
                $username = $_POST['username'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Enkripsi password
                $telp = $_POST['telp'];

                // Query untuk menyimpan data ke tabel
                $sql = "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES ('$nik', '$nama', '$username', '$password', '$telp')";

                if ($conn->query($sql) === TRUE) {
                    echo "<p style='color: green;'>Registrasi berhasil! <a href='login.php'>Login sekarang</a>.</p>";
                } else {
                    echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
            }

            // Tutup koneksi
            $conn->close();
            ?>
        </div>
        <div class="image-container"></div>
    </div>
</body>
</html>
