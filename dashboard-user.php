<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 text-white min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-700 shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-lg font-bold">PENGADUAN MASYARAKAT</h1>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:underline">Dashboard</a></li>
                <li><a href="#" class="hover:underline">Riwayat Laporan</a></li>
                <li><a href="logout.php" class="hover:underline">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-8">Selamat Datang di Dashboard</h1>

        <!-- Dashboard Overview -->
        <div class="bg-white text-blue-500 rounded-lg p-6 shadow-lg mb-10">
            <h2 class="text-xl font-bold mb-4">Laporan Anda</h2>
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-yellow-400 text-black font-semibold p-6 rounded-lg shadow text-center">
                    <p class="text-2xl font-bold">5</p>
                    <p>Laporan Diproses</p>
                </div>
                <div class="bg-green-500 text-white font-semibold p-6 rounded-lg shadow text-center">
                    <p class="text-2xl font-bold">3</p>
                    <p>Laporan Selesai</p>
                </div>
                <div class="bg-red-500 text-white font-semibold p-6 rounded-lg shadow text-center">
                    <p class="text-2xl font-bold">2</p>
                    <p>Laporan Ditolak</p>
                </div>
            </div>
        </div>

        <!-- Riwayat Laporan -->
        <h2 class="text-2xl font-bold mb-6">Riwayat Laporan</h2>
        <div class="space-y-6">
            <!-- Card Example -->
            <div class="bg-white text-blue-500 rounded-lg p-6 shadow-lg flex justify-between items-center">
                <div>
                    <p><strong>Tanggal:</strong> 2023-03-17</p>
                    <p><strong>Jenis Laporan:</strong> Kesehatan</p>
                    <p><strong>Isi Laporan:</strong> 14 orang terkena COVID-19</p>
                </div>
                <div class="text-yellow-500 font-bold">PROSES</div>
            </div>

            <div class="bg-white text-blue-500 rounded-lg p-6 shadow-lg flex justify-between items-center">
                <div>
                    <p><strong>Tanggal:</strong> 2023-03-15</p>
                    <p><strong>Jenis Laporan:</strong> Lalu Lintas</p>
                    <p><strong>Isi Laporan:</strong> Macet di pasteur 10KM</p>
                </div>
                <div class="text-green-500 font-bold">SELESAI</div>
            </div>

            <div class="bg-white text-blue-500 rounded-lg p-6 shadow-lg flex justify-between items-center">
                <div>
                    <p><strong>Tanggal:</strong> 2023-03-10</p>
                    <p><strong>Jenis Laporan:</strong> Kriminalitas</p>
                    <p><strong>Isi Laporan:</strong> Pelecehan seksual di bawah jembatan layang</p>
                </div>
                <div class="text-red-500 font-bold">DITOLAK</div>
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
