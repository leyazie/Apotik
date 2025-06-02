<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
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
   <style>
      .user-header {
         display: flex;
         justify-content: space-between;
         align-items: center;
         background-color: rgba(0, 0, 0, 0.15);
         padding: 10px 20px;
      }

      .user-info {
         display: flex;
         align-items: center;
      }

      .user-icon {
         width: 30px;
         height: 30px;
         margin-right: 10px;
      }

      .user-text {
         display: flex;
         flex-direction: column;
      }

      .user-name {
         color: red;
         font-size: 20px;
      }

      .user-role {
         color: black;
         font-size: 18px;
         font-weight: bold;
      }

      .user-actions {
         display: flex;
         gap: 20px;
      }

      .action-btn {
         background-color: white;
         border: none;
         border-radius: 50%;
         padding: 10px;
         cursor: pointer;
         width: 40px;
         height: 40px;
         transition: background-color 0.3s ease;
      }

      /* .action-btn img {
         width: 20px;
         height: 20px;
      } */

      .action-btn:hover {
         background-color: #e0e0e0;
      }

      .cart-item {
         margin-bottom: 20px;
      }

      .item {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 10px;
         background-color: #f0f0db;
         border-radius: 8px;
      }

      .item-image {
         width: 100px;
      }

      .item-details {
         display: flex;
         flex-direction: column;
         margin-left: 10px;
         flex-grow: 1;
      }

      .item-name {
         font-size: 20px;
         font-weight: bold;
         margin-bottom: 8px;
      }

      .item-quantity {
         display: flex;
         align-items: center;
      }

      .quantity-btn {
         background-color: #d9534f;
         border: none;
         color: white;
         font-size: 14px;
         padding: 4px 8px;
         margin: 0 5px;
         border-radius: 4px;
         cursor: pointer;
      }

      .text-red-500 {
         font-size: 25px;
      }

      .total-price {
         text-align: right;
         font-size: 18px;
         font-weight: bold;
         margin-bottom: 20px;
      }

      .font-bold {
         font-size: 20px;
      }
   </style>
</head>

<body>
   <!-- header  -->
   <header class="user-header">
      <div class="user-info">
         <!-- <img src="user-icon.png" alt="User Icon" class="user-icon"> -->
         <i class="bi bi-person-circle" style="font-size: 40px; margin-left:10px; margin-right:20px;"></i>
         <div class="user-text">
            <span class="user-name">User</span>
            <span class="user-role">Customer</span>
         </div>
      </div>
      <div class="user-actions">
         <button class="action-btn">
            <!-- <img src="bell-icon.png" alt="Notification Icon"> -->
            <a href="./notifikasi.php"><i class="bi bi-bell"></i></a>
         </button>
         <button class="action-btn">
            <!-- <img src="cart-icon.png" alt="Cart Icon"> -->
            <a href="./keranjang.php"><i class="bi bi-cart"></i></a>
         </button>
      </div>
   </header>

   <div class="flex justify-between items-center p-4">
      <a href="./keranjang.php"><i class="fas fa-arrow-left text-2xl"> Back</i></a>
   </div>

   <main class="p-4">
      <section class="flex space-x-8 bg-white rounded-lg p-4">
         <div class="w-2/3">
            <h2 class="text-xl font-bold mb-4">Details Produk</h2>
            <div class="flex space-x-4">
               <img src="https://placehold.co/150x150" alt="Image of HOT IN CREAM TUBE 30 GR" class="w-36 h-36 object-cover rounded-lg">
               <div>
                  <h3 class="text-lg font-bold">HOT IN CREAM TUBE 30 GR</h3>
                  <p class="text-sm text-gray-600">Terjual 500+ | <i class="fas fa-star text-yellow-500"></i> 5 (150 rating)</p>
                  <p class="text-2xl font-bold text-red-600 mt-2">Rp. 13.860,-</p>
                  <div class="mt-4">
                     <p class="font-bold">Indikasi:</p>
                     <p class="text-sm">Untuk meringankan pegal2, nyeri sendi, nyeri otot, masuk angin, perut kembung dan sakit kepala</p>
                  </div>
                  <div class="mt-4">
                     <p class="font-bold">Komposisi:</p>
                     <p class="text-sm">Tiap gram mengandung:</p>
                     <ul class="text-sm list-disc list-inside">
                        <li>Menthol 70mg</li>
                        <li>Metil Salisilat 25mg</li>
                        <li>Eucalyptus oil 1mg</li>
                        <li>Sereh oil 1mg</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="w-1/3 mt-24">
            <div class="bg-white p-4 rounded-lg shadow-lg">
               <h2 class="text-lg font-bold mb-4">Atur Jumlah & Catatan</h2>
               <div class="flex items-center space-x-2 mb-4">
                  <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                  <span class="text-lg">1</span>
                  <button class="bg-green-500 text-white px-2 py-1 rounded">+</button>
                  <span class="text-sm text-gray-600">Stok: 100</span>
               </div>
               <div class="flex justify-between items-center mb-4">
                  <span class="text-sm">Subtotal</span>
                  <span class="text-lg font-bold">Rp. 13.860,-</span>
               </div>
               <button class="bg-yellow-500 text-white w-full py-2 rounded mb-2"><a href="./pembayaran.php">Beli</a></button>
               <div class="flex justify-between items-center mt-4 text-sm text-gray-600">
                  <span><i class="fas fa-comment"></i> Chat</span>
                  <span><i class="fas fa-heart"></i> Wishlist</span>
                  <span><i class="fas fa-share"></i> Share</span>
               </div>
            </div>
         </div>
      </section>
   </main>


   <!-- Bootstrap 5 JS and Popper.js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>