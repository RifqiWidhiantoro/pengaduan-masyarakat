<?php
// Konfigurasi koneksi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengaduan_masyarakat";

// Membuat koneksi ke MySQL
$conn = mysqli_connect($servername, $username, $password);

// Periksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Membuat database jika belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database '$dbname' berhasil dibuat atau sudah ada.<br>";
} else {
    die("Error membuat database: " . mysqli_error($conn));
}

// Pilih database yang akan digunakan
mysqli_select_db($conn, $dbname);

// Membuat tabel masyarakat
$sql = "CREATE TABLE IF NOT EXISTS masyarakat (
    nik CHAR(16) PRIMARY KEY,
    nama VARCHAR(35) NOT NULL,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(255) NOT NULL,
    telp CHAR(13) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Tabel 'masyarakat' berhasil dibuat.<br>";
} else {
    die("Error membuat tabel masyarakat: " . mysqli_error($conn));
}

// Membuat tabel pengaduan
$sql = "CREATE TABLE IF NOT EXISTS pengaduan (
    id_pengaduan INT(11) AUTO_INCREMENT PRIMARY KEY,
    tgl_pengaduan DATE NOT NULL,
    nik CHAR(16),
    isi_laporan TEXT NOT NULL,
    foto VARCHAR(255),
    status ENUM('0', 'proses', 'selesai') NOT NULL,
    FOREIGN KEY (nik) REFERENCES masyarakat(nik)
)";
if (mysqli_query($conn, $sql)) {
    echo "Tabel 'pengaduan' berhasil dibuat.<br>";
} else {
    die("Error membuat tabel pengaduan: " . mysqli_error($conn));
}

// Membuat tabel petugas
$sql = "CREATE TABLE IF NOT EXISTS petugas (
    id_petugas INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_petugas VARCHAR(35) NOT NULL,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(255) NOT NULL,
    telp CHAR(13) NOT NULL,
    level ENUM('admin', 'petugas') NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Tabel 'petugas' berhasil dibuat.<br>";
} else {
    die("Error membuat tabel petugas: " . mysqli_error($conn));
}

// Membuat tabel tanggapan
$sql = "CREATE TABLE IF NOT EXISTS tanggapan (
    id_tanggapan INT(11) AUTO_INCREMENT PRIMARY KEY,
    id_pengaduan INT(11),
    tgl_tanggapan DATE NOT NULL,
    tanggapan TEXT NOT NULL,
    id_petugas INT(11),
    FOREIGN KEY (id_pengaduan) REFERENCES pengaduan(id_pengaduan),
    FOREIGN KEY (id_petugas) REFERENCES petugas(id_petugas)
)";
if (mysqli_query($conn, $sql)) {
    echo "Tabel 'tanggapan' berhasil dibuat.<br>";
} else {
    die("Error membuat tabel tanggapan: " . mysqli_error($conn));
}

// Data seeder untuk admin
$admins = [
    [
        'nama_petugas' => 'Admin Satu',
        'username' => 'admin1',
        'password' => password_hash('password123', PASSWORD_BCRYPT), // Password terenkripsi
        'telp' => '081234567890',
        'level' => 'admin'
    ],
    [
        'nama_petugas' => 'Admin Dua',
        'username' => 'admin2',
        'password' => password_hash('password123', PASSWORD_BCRYPT), // Password terenkripsi
        'telp' => '081234567891',
        'level' => 'admin'
    ],
    [
        'nama_petugas' => 'Admin Tiga',
        'username' => 'admin3',
        'password' => password_hash('password123', PASSWORD_BCRYPT), // Password terenkripsi
        'telp' => '081234567892',
        'level' => 'admin'
    ]
];

// Menambahkan data ke tabel petugas
foreach ($admins as $admin) {
    $sql = "INSERT INTO petugas (nama_petugas, username, password, telp, level) 
            VALUES ('{$admin['nama_petugas']}', '{$admin['username']}', '{$admin['password']}', '{$admin['telp']}', '{$admin['level']}')";

    if (mysqli_query($conn, $sql)) {
        echo "Admin '{$admin['username']}' berhasil ditambahkan.<br>";
    } else {
        echo "Error menambahkan admin '{$admin['username']}': " . mysqli_error($conn) . "<br>";
    }
}

// Tutup koneksi
mysqli_close($conn);
?>