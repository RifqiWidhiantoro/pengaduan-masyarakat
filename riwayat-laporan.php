<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 text-white min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-700 shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-lg font-bold">PENGADUAN MASYARAKAT</h1>
            <ul class="flex space-x-6">
                <li><a href="dashboard-user.php" class="hover:underline">Dashboard</a></li>
                <li><a href="#" class="hover:underline">Riwayat Laporan</a></li>
                <li><a href="logout.php" class="hover:underline">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <!-- Header -->
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-8">HISTORY PENGADUAN</h1>

        <!-- Laporan Cards -->
        <div class="space-y-6">
            <!-- Card Example -->
            <div class="bg-white text-blue-500 rounded-lg shadow-lg flex items-center p-6">
                <img src="https://via.placeholder.com/100" alt="Laporan" class="w-24 h-24 object-cover rounded-lg mr-6">
                <div class="flex-1">
                    <p><strong>Tanggal:</strong> 2023-03-17</p>
                    <p><strong>Jenis Laporan:</strong> Kesehatan</p>
                    <p><strong>Isi Laporan:</strong> 14 orang terkena COVID-19</p>
                </div>
                <div class="text-yellow-500 font-bold">PROSES</div>
            </div>

            <div class="bg-white text-blue-500 rounded-lg shadow-lg flex items-center p-6">
                <img src="https://via.placeholder.com/100" alt="Laporan" class="w-24 h-24 object-cover rounded-lg mr-6">
                <div class="flex-1">
                    <p><strong>Tanggal:</strong> 2023-03-17</p>
                    <p><strong>Jenis Laporan:</strong> Lalu Lintas</p>
                    <p><strong>Isi Laporan:</strong> Macet di pasteur 10KM</p>
                </div>
                <div class="text-yellow-500 font-bold">PROSES</div>
            </div>

            <div class="bg-white text-blue-500 rounded-lg shadow-lg flex items-center p-6">
                <img src="https://via.placeholder.com/100" alt="Laporan" class="w-24 h-24 object-cover rounded-lg mr-6">
                <div class="flex-1">
                    <p><strong>Tanggal:</strong> 2023-03-17</p>
                    <p><strong>Jenis Laporan:</strong> Kriminalitas</p>
                    <p><strong>Isi Laporan:</strong> Pelecehan seksual terhadap wanita di bawah jembatan layang</p>
                </div>
                <div class="text-green-500 font-bold">SELESAI</div>
            </div>
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
