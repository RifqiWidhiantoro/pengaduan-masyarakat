<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simpan laporan di database atau proses lainnya
    $jenis = $_POST['jenis'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];
    $foto = $_FILES['foto'];

    // Simpan file foto ke folder uploads
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . basename($foto['name']);
    move_uploaded_file($foto['tmp_name'], $upload_file);

    // Redirect atau tampilkan pesan berhasil
    echo "<script>alert('Laporan berhasil dibuat!'); window.location.href = 'jenis-pelaporan.php';</script>";
    exit;
}

$jenis_laporan = isset($_GET['jenis']) ? $_GET['jenis'] : 'Lainnya';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Laporan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 text-white min-h-screen">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-8">FORM LAPORAN PENGADUAN</h1>
        <form action="form-laporan.php" method="POST" enctype="multipart/form-data" class="bg-white text-blue-500 rounded-lg p-6 shadow-lg">
            <div class="mb-4">
                <label for="jenis" class="block font-semibold mb-2">Jenis Pengaduan</label>
                <input type="text" id="jenis" name="jenis" value="<?= htmlspecialchars($jenis_laporan) ?>" class="w-full border border-blue-300 rounded-lg p-2" readonly>
            </div>
            <div class="mb-4">
                <label for="tanggal" class="block font-semibold mb-2">Tanggal Pengaduan</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full border border-blue-300 rounded-lg p-2" required>
            </div>
            <div class="mb-4">
                <label for="isi" class="block font-semibold mb-2">Isi Pengaduan</label>
                <textarea id="isi" name="isi" rows="4" class="w-full border border-blue-300 rounded-lg p-2" required></textarea>
            </div>
            <div class="mb-4">
                <label for="foto" class="block font-semibold mb-2">Unggah Bukti Foto</label>
                <input type="file" id="foto" name="foto" class="w-full border border-blue-300 rounded-lg p-2" required>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">Buat Laporan</button>
            </div>
        </form>
    </div>
</body>
</html>
