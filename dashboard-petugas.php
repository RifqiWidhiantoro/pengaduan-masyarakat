<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 text-white min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-700 shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-lg font-bold">PENGADUAN MASYARAKAT</h1>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:underline">Data Pengaduan</a></li>
                <li><a href="#" class="hover:underline">Data Tanggapan</a></li>
                <li><a href="#" class="hover:underline">Data Masyarakat</a></li>
                <li><a href="#" class="hover:underline">Data Petugas</a></li>
                <li><a href="logout.php" class="hover:underline">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-8">DATA PENGADUAN</h1>

        <!-- Data Pengaduan -->
        <div class="space-y-6">
            <!-- Card Example -->
            <div class="bg-white text-blue-500 rounded-lg p-6 shadow-lg flex justify-between items-center">
                <div>
                    <p><strong>Tanggal:</strong> 2023-03-17</p>
                    <p><strong>Jenis Laporan:</strong> Kesehatan</p>
                    <p><strong>Isi Laporan:</strong> 14 orang terkena COVID-19</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-yellow-400 text-black font-semibold py-2 px-4 rounded-lg">Tanggapi</button>
                    <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg">Cetak</button>
                </div>
                <div class="text-yellow-500 font-bold">PROSES</div>
            </div>

            <div class="bg-white text-blue-500 rounded-lg p-6 shadow-lg flex justify-between items-center">
                <div>
                    <p><strong>Tanggal:</strong> 2023-03-17</p>
                    <p><strong>Jenis Laporan:</strong> Lalu Lintas</p>
                    <p><strong>Isi Laporan:</strong> Macet di pasteur 10KM</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-yellow-400 text-black font-semibold py-2 px-4 rounded-lg">Tanggapi</button>
                    <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg">Cetak</button>
                </div>
                <div class="text-yellow-500 font-bold">PROSES</div>
            </div>
        </div>

        <h1 class="text-3xl font-bold text-center mt-12 mb-8">DATA SELESAI TERTANGGAPI</h1>

        <!-- Data Selesai Tertanggapi -->
        <div class="bg-white text-blue-500 rounded-lg p-6 shadow-lg flex justify-between items-center">
            <div>
                <p><strong>Tanggal:</strong> 2023-03-17</p>
                <p><strong>Jenis Laporan:</strong> Kriminalitas</p>
                <p><strong>Isi Laporan:</strong> Pelecehan seksual terhadap wanita di bawah jembatan layang</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg">Cetak</button>
            </div>
            <div class="text-green-500 font-bold">SELESAI</div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-700 py-4 mt-10">
        <div class="text-center text-white">
            Pengaduan Masyarakat by "Yourname/Company"
        </div>
    </footer>
</body>
</html>
