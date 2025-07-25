<?php
session_start();

include '../connection.php';

$getAllObat = mysqli_query($conn, "SELECT * FROM obat");

while($row = mysqli_fetch_assoc($getAllObat)) {
   $obats[] = $row;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotik-home</title>
    <!-- Sertakan Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
   <script src="https://cdn.tailwindcss.com"></script>
   <!-- Bootstrap 5 CSS CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- icon bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #faf3e0;
        }

        .container {
            padding: 20px;
            min-height: calc(100vh - 80px);
            padding-bottom: 80px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 10px 0;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-icon {
            font-size: 36px;
            margin-right: 10px;
        }

        .user-text {
            display: flex;
            flex-direction: column;
        }

        .user-text .user {
            color: orange;
            font-weight: bold;
        }

        .user-text .admin {
            color: black;
        }

        .icons {
            display: flex;
            align-items: center;
        }

        .icon-button {
            background-color: transparent;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 20px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .icon-button span {
            font-size: 24px;
            color: #000;
        }

        h1 {
            font-size: 3rem;
            text-align: center;
            margin-top: 50px; 
        }

        .search-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .search-box {
            width: 30%;
            height: 55px;
            padding: 10px 10px 10px 20px;
            font-size: 1rem;
            border: 2px solid #ddd;
            border-radius: 25px;
            outline: none;
            box-shadow: none;
            display: flex;
            align-items: center;
            position: relative;
            background-color: white;
        }

        .search-box input {
            border: none;
            width: 100%;
            outline: none;
            background: transparent;
        }

        .search-box input::placeholder {
            color: #aaa;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            font-size: 24px;
            color: #aaa;
        }

        .categories-title {
            font-size: 1.3rem;
            margin: 30px 0 10px;
            font-weight: bold;
            text-align: left;
        }

        .categories {
            display: flex;
            justify-content: flex-start;
            margin-top: 10px;
        }

        .category {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 15px;
            width: 180px;
            height: 60px;
            margin-right: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 5px;
        }

        .category-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        .category:nth-child(1) .category-icon {
            background-color: green;
        }

        .category:nth-child(2) .category-icon {
            background-color: blue;
        }

        .category:nth-child(3) .category-icon {
            background-color: red;
            color: black;
            font-weight: bold;
            font-size: 24px;
        }

        .category-text {
            font-size: 0.9rem;
            color: #333;
            flex-grow: 1;
        }

        .latest-products-title {
            font-size: 1.3rem;
            margin: 30px 0 10px;
            font-weight: bold;
            text-align: left;
        }

        .latest-products {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .product-box {
            background-color: #fff;
            border-radius: 15px;
            width: 150px;
            margin-right: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
        }

        .product-box img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .product-name {
            font-size: 1rem;
            color: #333;
            margin-bottom: 5px;
        }

        .product-price {
            font-size: 0.9rem;
            color: #777;
        }

        .add-product-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            border-radius: 15px;
            width: 150px;
            height: 200px;
            margin-right: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
            color: black;
            cursor: pointer;
        }

        .add-product-box .material-icons {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .add-product-text {
            font-size: 1rem;
            color: #333;
        }

        .bottom-icons {
            position: fixed;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            background-color: black;
            padding: 10px 20px;
            border-radius: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .bottom-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 15px;
            color: #333;
            cursor: pointer;
        }

        .bottom-icon .material-icons {
            font-size: 24px;
            color: orange;
        }

        .bottom-icon .icon-text {
            font-size: 0.8rem;
            margin-top: 5px;
            color: orange;
        }

        .bottom-icon:nth-child(2) .material-icons,
        .bottom-icon:nth-child(3) .material-icons {
            color: white;
        }

        .bottom-icon:nth-child(2) .icon-text,
        .bottom-icon:nth-child(3) .icon-text {
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <div class="user-info">
             <a href="../logout.php"><i class="bi bi-person-circle" style="font-size: 40px; margin-left:10px; margin-right:20px;"></i>
         </a>
                <div class="user-text">
                    <span class="user">User</span>
                    <span class="admin">Admin</span>
                </div>
            </div>
            <div class="icons">
                <a href="./notifadmin.php"><button class="icon-button">
                    <span class="material-icons">notifications</span>
                </button></a>
                <button class="icon-button">
                    <span class="material-icons">shopping_bag</span>
                </button>
            </div>
        </header>

        <h1 class="text-3xl font-bold mb-4">APOTEKER</h1>

        <div class="search-container">
            <div class="search-box">
                <input type="text" placeholder="Search by your Product">
                <span class="material-icons search-icon">search</span>
            </div>
        </div>

        <div class="categories-title">Categories</div>

        <div class="categories">
            <div class="category">
                <div class="category-icon">U</div>
                <div class="category-text">Umum</div>
            </div>
            <div class="category">
                <div class="category-icon">B</div>
                <div class="category-text">Bebas Terbatas</div>
            </div>
            <div class="category">
                <div class="category-icon">
                    K
                </div> 
                <div class="category-text">Keras</div>
            </div>
        </div>

        <div class="latest-products-title">Latest Products</div>

        <div class="latest-products">
            <?php foreach($obat as $obat): ?>
            <div class="product-box">
                <img src="../img/<?= $obat['gambar'] ?>" alt="Product 1">
                <div class="product-name"><?= $obat['merek'] ?></div>
                <div class="product-price">Rp. <?= $obat['harga'] ?></div>
            </div>
            <?php endforeach; ?>
            <div class="add-product-box" onclick="window.location.href='addadmin.php'">
                <span class="material-icons">add</span>
                <div class="add-product-text">Add Product</div>
            </div>

        </div>
    </div>

    <!-- Kolom Bawah dengan Ikon Home, Orders, Profile -->
    <div class="bottom-icons">
        <div class="bottom-icon" onclick="window.location.href='homeadmin.php'">
            <span class="material-icons">home</span>
            <div class="icon-text">Home</div>
        </div>
        <div class="bottom-icon" onclick="window.location.href='informasiadmin.php'">
            <span class="fas fa-calendar-alt text-2xl text-white "></span>
            <div class="icon-text">Informasi</div>
        </div>
        <div class="bottom-icon" onclick="window.location.href='./profileadmin.php'">
            <span class="material-icons">person</span>
            <div class="icon-text">Profile</div>
        </div>
    </div>

</body>
</html>
