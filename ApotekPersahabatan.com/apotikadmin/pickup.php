<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotik-pickup</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Style reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #faf3e0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 800px;
            padding: 20px;
            min-height: calc(100vh - 80px);
            padding-bottom: 80px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .logout-section {
            display: flex;
            align-items: center;
        }

        .logout-icon {
            font-size: 36px;
            color: black;
            margin-right: 10px;
            cursor: pointer;
        }

        .logout-button {
            background-color: white;
            color: red;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        h1 {
            font-size: 3rem;
            text-align: center;
            margin-top: 50px;
            font-weight: bold; /* Menebalkan teks */
        }

        .data-profile {
            background-color: #E9E9B4;
            width: 100%;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .order-header {
            background-color: #e0e0e0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            margin-top: 20px;
            font-weight: bold;
        }

        .order-box {
            background-color: white;
            padding: 15px;
            margin-top: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            align-items: center;
        }

        .status-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <div class="user-info">
                <i class="fas fa-user user-icon"></i>
                <div class="user-text">
                    <span class="user">User</span>
                    <span class="admin">Admin</span>
                </div>
            </div>
            <div class="logout-section">
                <i class="fas fa-sign-out-alt logout-icon"></i>
                <button class="logout-button">Log Out</button>
            </div>
        </header>

        <h1>PICK UP</h1>

        <div class="data-profile">
            <button class="back-button">
                <i class="material-icons">arrow_back</i>
            </button>
            <h2>NO PESANAN</h2>
        </div>

        <div class="order-header">
            <span>No Pesanan</span>
            <span>Username</span>
            <span>Waktu</span>
        </div>

        <div class="order-box">
            <div>
                <strong>01</strong>
            </div>
            <div>
                <strong>Rahmawati</strong>
            </div>
            <div>
                <strong>Pukul: 12.00 - 14.00</strong>
            </div>
            <div class="status-buttons">
                <button class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600">Sudah</button>
                <button class="bg-orange-500 text-white px-4 py-1 rounded hover:bg-orange-600">Belum</button>
            </div>
        </div>

        <div class="order-box">
            <div>
                <strong>02</strong>
            </div>
            <div>
                <strong>Hermawan</strong>
            </div>
            <div>
                <strong>Pukul: 12.20 - 14.20</strong>
            </div>
            <div class="status-buttons">
                <button class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600">Sudah</button>
                <button class="bg-orange-500 text-white px-4 py-1 rounded hover:bg-orange-600">Belum</button>
            </div>
        </div>

        <div class="order-box">
            <div>
                <strong>03</strong>
            </div>
            <div>
                <strong>Hauna</strong>
            </div>
            <div>
                <strong>Pukul: 12.30 - 14.30</strong>
            </div>
            <div class="status-buttons">
                <button class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600">Sudah</button>
                <button class="bg-orange-500 text-white px-4 py-1 rounded hover:bg-orange-600">Belum</button>
            </div>
        </div>
    </div>

    <footer class="fixed bottom-4 left-0 right-0 z-100 bg-black text-white rounded-full py-2 px-8 flex justify-around mx-auto max-w-md">
        <div class="bottom-icon text-center" onclick="window.location.href='homeadmin.php'">
            <i class="fas fa-home text-2xl"></i>
            <p class="mt-1">Home</p>
        </div>
        <div class="text-center">
            <i class="fas fa-calendar-alt text-2xl text-orange-500"></i>
            <p class="mt-1 text-orange-500">Informasi</p>
        </div>
        <div class="bottom-icon text-center" onclick="window.location.href='./profileadmin.php'">
            <i class="fas fa-user text-2xl"></i>
            <p class="mt-1">Profile</p>
        </div>
    </footer>

</body>
</html>
