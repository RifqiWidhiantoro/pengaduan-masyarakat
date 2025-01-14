<!-- jenis-pelaporan.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Pelaporan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 text-white min-h-screen">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-8">Pilih Jenis Pelaporan:</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $jenis_laporan = ['Bencana Alam', 'Kesehatan', 'Lalu Lintas', 'Konflik Sosial', 'Kriminalitas', 'Pendidikan', 'Lainnya'];
            foreach ($jenis_laporan as $jenis) {
                echo "
                <a href='form-laporan.php?jenis=" . urlencode($jenis) . "' class='block bg-white text-blue-500 rounded-lg shadow-lg overflow-hidden'>
                    <div class='h-32 w-full flex items-center justify-center bg-gray-200'>
                        <span class='font-bold text-lg'>$jenis</span>
                    </div>
                    <div class='p-4 text-center font-semibold'>$jenis</div>
                </a>";
            }
            ?>
        </div>
        <div class="text-center mt-12">
            <h2 class="text-2xl font-bold mb-4">Telepon Darurat</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div><span>Polisi</span><br>221-89237</div>
                <div><span>Pemadam Kebakaran</span><br>022-982836</div>
                <div><span>Ambulan</span><br>311-230992</div>
                <div><span>Lainnya</span><br>211</div>
            </div>
        </div>
    </div>
</body>
</html>
