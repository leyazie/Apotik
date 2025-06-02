<?php
session_start();

include '../connection.php';

$getKategori = mysqli_query($conn, "SELECT * FROM kategori");

while ($row = mysqli_fetch_assoc($getKategori)) {
    $kategori[] = $row;
}

if (isset($_POST['kirim'])) {
    $merek = $_POST['merek'];
    $kategori_id = $_POST['kategori_id'];
    $stok = $_POST['stok'];
    $tgl_produksi = $_POST['tgl_produksi'];
    $tgl_exp = $_POST['tgl_exp'];
    $komposisi = $_POST['komposisi'];
    $harga = $_POST['harga'];

    $gambar = upload($_FILES['gambar']);

    if(!isset($gambar)) {
        die("ERROR");
    }

    $sql = "INSERT INTO `obat` (`merek`, `fid_kategori`, `stok_obat`, `tanggal_produksi`, `tanggal_eks`, `komposisi`, `harga`, `gambar`, `fid_admin`) VALUES ('$merek', $kategori_id, '$stok', '$tgl_produksi', '$tgl_exp', '$komposisi', '$harga', '$gambar', ".$_SESSION['id'].")";

    if(mysqli_query($conn, $sql)) {
        header("Location: homeadmin.php");
        exit();
    }

    echo "ERROR";
    
}

function upload($file)
{
    //upload gambar
    $namaFile = $file['name'];
    $ukuranFile = $file['size'];
    $tmpName = $file['tmp_name'];

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('yang ada masukan bukan gambar')
        </script>";
        exit();
    }

    //cek ukuran gambar besar
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran gambar teralu besar')
        </script>";
        exit();
    }

    //nama file duplicate
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    // var_dump($namaFileBaru);
    // die();

    //gambar siap di upload
    if(!move_uploaded_file($tmpName, "../img/$namaFileBaru")) {
        die("gagal upload");
    }

    return $namaFileBaru;
}

?>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-yellow-50">
    <div class="p-8">
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center">
                <i class="fas fa-user-circle text-blue-500 text-2xl"></i>
                <div class="ml-2">
                    <p class="text-sm text-red-500">User</p>
                    <p class="text-sm">Admin</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <i class="fas fa-bell text-xl"></i>
                <i class="fas fa-plus-circle text-xl text-red-500"></i>
            </div>
        </div>
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold">CURE & CARE</h1>
        </div>
        <div class="flex items-center mb-4">
            <i class="fas fa-plus text-xl"></i>
            <p class="ml-2 text-lg">Add New Product</p>
        </div>
        <hr class="border-gray-400 mb-8">
        <div class="flex">
            <div class="w-1/3 flex justify-center items-center">
                <div class="w-32 h-32 bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-image text-4xl"></i>
                    <i class="fas fa-plus-circle text-2xl text-black absolute"></i>
                </div>
            </div>
            <div class="w-2/3">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="block text-lg">Merk</label>
                        <input type="text" name="merek" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-lg">Kategori</label>
                        <!-- <input type="text" class="w-full p-2 bg-gray-200 rounded-md"> -->
                        <select name="kategori_id" id="" class="w-full p-2 bg-gray-200 rounded-md">
                            <?php foreach ($kategori as $k): ?>
                                <option value="<?= $k['id'] ?>"><?= $k['kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-lg">Stok</label>
                        <input type="number" name="stok" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-lg">Tanggal Produksi</label>
                        <input type="date" name="tgl_produksi" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-lg">Tanggal Exp</label>
                        <input type="date" name="tgl_exp" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-lg">Komposisi</label>
                        <input type="text" name="komposisi" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-lg">Harga</label>
                        <input type="number" name="harga" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-lg">Gambar</label>
                        <input type="file" name="gambar" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                    <div class="flex space-x-4">
                        <button type="submit" name="kirim" class="bg-yellow-600 text-black px-6 py-2 rounded-full">ADD</button>
                        <button class="bg-yellow-600 text-black px-6 py-2 rounded-full tracking-widest">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>