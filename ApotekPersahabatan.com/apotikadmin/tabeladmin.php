<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-[#f5f1d6] p-4">
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center">
            <i class="fas fa-user-circle text-blue-500 text-2xl"></i>
            <div class="ml-2">
                <p class="text-red-500 text-sm">User</p>
                <p class="text-black font-bold">Admin</p>
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <i class="fas fa-bell text-black text-xl"></i>
            <i class="fas fa-plus-circle text-black text-xl"></i>
        </div>
    </div>
    <div class="flex items-center mb-4">
        <i class="fas fa-arrow-left text-black text-xl"></i>
    </div>
    <h1 class="text-center text-4xl font-bold mb-2">REPORT</h1>
    <hr class="border-t border-black mb-4">
    <h2 class="text-red-400 text-lg mb-2">SEPTEMBER</h2>
    <table class="w-full mb-4 border-collapse">
        <thead>
            <tr class="bg-[#d9d0a7]">
                <th class="border border-black p-2">No</th>
                <th class="border border-black p-2">Tanggal</th>
                <th class="border border-black p-2">Nama Obat</th>
                <th class="border border-black p-2">Kategori</th>
                <th class="border border-black p-2">Jumlah Terjual</th>
                <th class="border border-black p-2">Harga satuan</th>
                <th class="border border-black p-2">Total Penjualan</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-[#e9e4c9]">
                <td class="border border-black p-2 text-center">1</td>
                <td class="border border-black p-2 text-center">01-09-2024</td>
                <td class="border border-black p-2 text-center">Paracetamol 500mg</td>
                <td class="border border-black p-2 text-center">Obat Umum</td>
                <td class="border border-black p-2 text-center">50 Strip</td>
                <td class="border border-black p-2 text-center">Rp 5.000</td>
                <td class="border border-black p-2 text-center">Rp 250.000</td>
            </tr>
            <tr class="bg-[#e9e4c9]">
                <td class="border border-black p-2 text-center">2</td>
                <td class="border border-black p-2 text-center">02-09-2024</td>
                <td class="border border-black p-2 text-center">Amoxicilin 500mg</td>
                <td class="border border-black p-2 text-center">Antibiotik</td>
                <td class="border border-black p-2 text-center">30 Strip</td>
                <td class="border border-black p-2 text-center">Rp 7.000</td>
                <td class="border border-black p-2 text-center">Rp 210.000</td>
            </tr>
            <tr class="bg-[#e9e4c9]">
                <td class="border border-black p-2 text-center">3</td>
                <td class="border border-black p-2 text-center">03-09-2024</td>
                <td class="border border-black p-2 text-center">Vitamin C 500mg</td>
                <td class="border border-black p-2 text-center">Suplemen</td>
                <td class="border border-black p-2 text-center">40 Botol</td>
                <td class="border border-black p-2 text-center">Rp 20.000</td>
                <td class="border border-black p-2 text-center">Rp 800.000</td>
            </tr>
            <tr class="bg-[#e9e4c9]">
                <td class="border border-black p-2 text-center">4</td>
                <td class="border border-black p-2 text-center">04-09-2024</td>
                <td class="border border-black p-2 text-center">Omeprazole 20mg</td>
                <td class="border border-black p-2 text-center">Obat Lambung</td>
                <td class="border border-black p-2 text-center">25 Strip</td>
                <td class="border border-black p-2 text-center">Rp 12.000</td>
                <td class="border border-black p-2 text-center">Rp 300.000</td>
            </tr>
            <tr class="bg-[#e9e4c9]">
                <td class="border border-black p-2 text-center">5</td>
                <td class="border border-black p-2 text-center">05-09-2024</td>
                <td class="border border-black p-2 text-center">Loratadine 10mg</td>
                <td class="border border-black p-2 text-center">Antihistamin</td>
                <td class="border border-black p-2 text-center">35 Strip</td>
                <td class="border border-black p-2 text-center">Rp 8.000</td>
                <td class="border border-black p-2 text-center">Rp 280.000</td>
            </tr>
        </tbody>
    </table>
    <h2 class="text-black text-lg mb-2">LAPORAN PENGELUARAN</h2>
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-[#d9d0a7]">
                <th class="border border-black p-2">No</th>
                <th class="border border-black p-2">Tanggal</th>
                <th class="border border-black p-2">Kategori Pengeluaran</th>
                <th class="border border-black p-2">Keterangan</th>
                <th class="border border-black p-2">Total pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-[#e9e4c9]">
                <td class="border border-black p-2 text-center">1</td>
                <td class="border border-black p-2 text-center">05-09-2024</td>
                <td class="border border-black p-2 text-center">Pembelian Obat Baru</td>
                <td class="border border-black p-2 text-center">Paracetamol, Amoxicilin</td>
                <td class="border border-black p-2 text-center">Rp 1.500.000</td>
            </tr>
            <tr class="bg-[#e9e4c9]">
                <td class="border border-black p-2 text-center">2</td>
                <td class="border border-black p-2 text-center">12-09-2024</td>
                <td class="border border-black p-2 text-center">Listrik</td>
                <td class="border border-black p-2 text-center">Tagihan Listrik Apotek</td>
                <td class="border border-black p-2 text-center">Rp 500.000</td>
            </tr>
            <tr class="bg-[#e9e4c9]">
                <td class="border border-black p-2 text-center">3</td>
                <td class="border border-black p-2 text-center">18-09-2024</td>
                <td class="border border-black p-2 text-center">Gaji Karyawan</td>
                <td class="border border-black p-2 text-center">Gaji Bulanan Karyawan</td>
                <td class="border border-black p-2 text-center">Rp 2.500.000</td>
            </tr>
        </tbody>
    </table>
</body>
</html>