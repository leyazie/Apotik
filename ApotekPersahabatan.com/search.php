<?php
// Pastikan Anda sudah terkoneksi dengan database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apotek";  // Sesuaikan dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Query untuk mencari produk berdasarkan nama
$sql = "SELECT * FROM produk WHERE nama_produk LIKE '%$searchTerm%'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cure & Care</title>
   <!-- tailwind -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
   <script src="https://cdn.tailwindcss.com"></script>
   <!-- Bootstrap 5 CSS CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- icon bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- header  -->
<header class="user-header">
<div class="absolute top-4 left-4">
        <a href="dashboard.php"><button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg shadow-md">
            <i class="fas fa-arrow-left"></i> Kembali
        </button></a>
    </div>
   </header>
   <br>

    <div class="container mt-5">
        <h6 class="text-3xl font-bold mb-4">Search result for  "<?php echo htmlspecialchars($searchTerm); ?>"</h6>
        <br>
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4">';
                    echo '<img class="card-img-top" src="' . $row['image_url'] . '" alt="' . $row['nama_produk'] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row['nama_produk'] . '</h5>';
                    echo '<p class="card-text">Rp. ' . number_format($row['harga'], 0, ',', '.') . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No results found for "' . htmlspecialchars($searchTerm) . '"</p>';
            }
            ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$conn->close();
?>
