<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cure & Care - Keranjang Obat</title>
   <!-- tailwind -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
   <script src="https://cdn.tailwindcss.com"></script>
   <!-- Bootstrap 5 CSS CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- icon bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   <link rel="stylesheet" href="./css/style.css">
   <style>
      header {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 20px;
         background-color: #fff;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .logo-container {
         display: flex;
         align-items: center;
      }

      .logo {
         width: 50px;
         /* Adjust logo size */
         height: auto;
         margin-right: 10px;
      }

      .text h1 {
         margin: 0;
         font-size: 24px;
         font-weight: bold;
      }

      .text p {
         margin: 0;
         font-size: 14px;
         color: #555;
      }

      nav ul {
         display: flex;
         list-style: none;
      }

      nav ul li {
         margin: 0 15px;
      }

      nav ul li a {
         text-decoration: none;
         color: #333;
         font-size: 16px;
      }

      nav ul li a:hover {
         text-decoration: none;
         color: #FF9A62;
         font-size: 16px;
         position: relative;
      }

      nav ul li a:hover::after {
         content: '';
         position: absolute;
         left: 0;
         bottom: -2px;
         /* Jarak garis dari teks */
         width: 100%;
         height: 2px;
         /* Ketebalan garis */
         background-color: #FF9A62;
         /* Warna garis */
      }

      .search input {
         padding: 8px;
         border-radius: 5px;
         border: 1px solid #ddd;
      }

      .search button {
         background-color: transparent;
         border: none;
         cursor: pointer;
      }


      .hero {
         display: flex;
         justify-content: space-between;
         align-items: center;
         /* background: linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.5)), url('your-image'); */
         padding: 50px;
         /* background-color: rgba(0, 0, 0, 0.5); */
      }

      .hero-content {
         max-width: 50%;
      }

      .hero-content h1 {
         font-size: 2.5em;
         color: #333;
         margin-bottom: 20px;
      }

      .hero-content p {
         font-size: 1.2em;
         color: #777;
      }

      .container {
         background-color: #fff;
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         width: 800px;
         margin-top: 50px;
      }

      h1,
      h3 {
         text-align: center;
         color: #000;
         margin-bottom: 20px;
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

      .bc-ttl {
         display: flex;
         align-items: center;
         padding: 20px;
      }

      .total-harga {
         background-color: blue;
         padding: 10px;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
         justify-content: space-between;
         font-size: 16px;
         font-weight: bold;
      }

      .lanjut-bayar {
         background-color: #4CAF50;
         color: white;
         padding: 10px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         margin-left: 856px;
      }
   </style>
</head>

<body>
   
   <!-- Navbar -->
   <header>
      <div class="logo-container">
         <img src="./img/logo.png" alt="ACC Logo" class="logo">
         <div class="text">
            <h1>ACC</h1>
            <p>Apotik Cure and Care</p>
         </div>
      </div>
      <nav>
         <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="sediaan.php">Sediaan</a></li>
            <li><a href="contact.php">Contact</a></li>
         </ul>
      </nav>
      <div class="search">
         <input type="text" placeholder="Cari Kebutuhanmu...">
         <button>🔍</button>
      </div>
   </header>
   <a href="sediaan.php" class="absolute top-15px left-4 text-[#7a6e5d] hover:underline">
        <i class="fas fa-arrow-left"></i> Back</a>

   <main class="p-4">
      <h1 class="text-3xl font-bold text-center mb-6">
         CURE &amp; CARE
      </h1>
      <section>
         <h2 class="text-xl font-bold flex items-center mb-4">
            <i class="fas fa-shopping-bag mr-2">
            </i>
            Keranjang Obat
         </h2>
         <hr class="border-t border-black mb-4" />

         <!-- item 1 -->
         <div class="cart-item">
            <div class="item">
               <img src="./img/insto.png" alt="Bodrex" class="item-image">
               <div class="item-details">
                  <span class="item-name">INSTO</span>
                  <div class="item-quantity">
                     <button class="quantity-btn">-</button>
                     <span>2</span>
                     <button class="quantity-btn">+</button>
                  </div>
               </div>
               <div class="text-right">
                  <p class="font-bold">
                     Rp. 23.906/strip
                  </p>
                  <button class="text-red-500 mt-2"><i class="bi bi-trash"></i></button>
               </div>
            </div>
         </div>

         <!-- item 2 -->
         <div class="cart-item">
            <div class="item">
               <img src="./img/insto.png" alt="Bodrex" class="item-image">
               <div class="item-details">
                  <span class="item-name">INSTO</span>
                  <div class="item-quantity">
                     <button class="quantity-btn">-</button>
                     <span>2</span>
                     <button class="quantity-btn">+</button>
                  </div>
               </div>
               <div class="text-right">
                  <p class="font-bold">
                     Rp. 23.906/strip
                  </p>
                  <button class="text-red-500 mt-2"><i class="bi bi-trash"></i></button>
               </div>
            </div>
         </div>

         <!-- item 3 -->
         <div class="cart-item">
            <div class="item">
               <img src="./img/insto.png" alt="Bodrex" class="item-image">
               <div class="item-details">
                  <span class="item-name">INSTO</span>
                  <div class="item-quantity">
                     <button class="quantity-btn">-</button>
                     <span>2</span>
                     <button class="quantity-btn">+</button>
                  </div>
               </div>
               <div class="text-right">
                  <p class="font-bold">
                     Rp. 23.906/strip
                  </p>
                  <button class="text-red-500 mt-2"><i class="bi bi-trash"></i></button>
               </div>
            </div>
         </div>

      </section>
   </main>


</body>

</html>