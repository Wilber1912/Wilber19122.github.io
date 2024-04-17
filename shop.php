<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_wishlist'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);

   $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_wishlist_numbers->rowCount() > 0){
      $message[] = 'already added to wishlist!';
   }elseif($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{
      $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
      $insert_wishlist->execute([$user_id, $pid, $p_name, $p_price, $p_image]);
      $message[] = 'added to wishlist!';
   }

}

if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$p_name, $user_id]);

      if($check_wishlist_numbers->rowCount() > 0){
         $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
         $delete_wishlist->execute([$p_name, $user_id]);
      }

      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = 'added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylessss.css">
   <style>
      .tienda-conteiner{
         background-image: linear-gradient(
           rgba(0,0,0,0.2),
           rgba(0,0,0,0.2)),
           url(images/mision.jpg);
           background-position: center bottom;
           background-repeat: no-repeat;
           background-size: cover;
           min-height: 100vh;
           display: flex;
           align-items: center;
      }

      .p-category {
         display: flex;
         justify-content: center;
         gap: 20px;
         margin-top: 50px;
      }

      .category-card {
         background-color: #fff;
         border-radius: 10px;
         overflow: hidden;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s ease;
      }

      .category-card:hover {
         transform: translateY(-5px);
      }

      .category-card img {
         width: 100%;
         height: auto;
         border-radius: 10px 10px 0 0;
      }

      .category-card a {
         display: block;
         padding: 20px;
         text-align: center;
         color: #333;
         text-decoration: none;
         font-weight: bold;
      }
   </style>

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="tienda-conteiner">
   <section class="p-category">
      <div class="category-card">
         <a href="category.php?category=fruits">
            <img src="images/frut.png" alt="Fruits">
            Fruits
         </a>
      </div>
      <div class="category-card">
         <a href="category.php?category=vegitables">
            <img src="images/car.jpg" alt="Vegitables">
            Vegitables
         </a>
      </div>
      <div class="category-card">
         <a href="category.php?category=fish">
            <img src="images/frut.png" alt="Fish">
            Fish
         </a>
      </div>
      <div class="category-card">
         <a href="category.php?category=meat">
            <img src="images/car.jpg" alt="Meat">
            Meat
         </a>
      </div>
   </section>
</div>

<script src="js/script.js"></script>

</body>
</html>