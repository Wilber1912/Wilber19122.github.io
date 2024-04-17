<html lang="es"><head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>La Fuente</title>
   <link rel="icon" href="https://hiperlafuente.com/assets/uploads/2020/05/cropped-Favicon-Hiperlafuente2-32x32.png" sizes="32x32">
<link rel="icon" href="https://hiperlafuente.com/assets/uploads/2020/05/cropped-Favicon-Hiperlafuente2-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="https://hiperlafuente.com/assets/uploads/2020/05/cropped-Favicon-Hiperlafuente2-180x180.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylessss.css">

</head>
<body>
   
<div class="nav-container">
<header class="header">

   <div class="flex">

   <img src="images\logolafuente.png" alt="" width="155px" href="home.php" class="logo">

      <nav class="navbar">
         <a href="home.php">Inicio</a>
         <a href="shop.php">Productos</a>
         <a href="orders.php">Ordenes</a>
         <a href="about.php">Nosotros</a>
         <a href="contact.php">Contactanos</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         
         <a href="search_page.php" class="fas fa-search"></a>
                  <a href="wishlist.php"><i class="fas fa-heart"></i><span>(0)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(1)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
                  <img src="uploaded_img/cebolla-removebg-preview (1).png" alt="">
         <p>Wilber</p>
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </div>
   <script>window.addEventListener('scroll', function() {
   var navContainer = document.querySelector('.nav-container');
   var scrollPosition = window.scrollY;

   if (scrollPosition > 333330) {
      navContainer.classList.add('fixed-header');
   } else {
      navContainer.classList.remove('fixed-header');
   }
});
</script>

</header>
</div><br>

<div class="slider">
        <div class="list" style="left: -1287px;">
            <div class="item">
                <img src="images/1.png" alt="">
            </div>
            <div class="item">
                <img src="images\2.png" alt="">
            </div>
            <div class="item">
                <img src="images\3.png" alt="">
            </div>
            <div class="item">
                <img src="images\4.png" alt="">
            </div>
            <div class="item">
               <img src="images\port.png" alt="">
            </div>
            
        </div>
        <div class="buttons">
            <button id="prev">&lt;</button>
            <button id="next">&gt;</button>
        </div>
        <ul class="dots">
            <li class=""></li>
            <li class="active"></li>
            <li class=""></li>
            <li class=""></li>
            <li class=""></li>
            <li></li>
        </ul>
    </div>

<br>
<div class="home-bg">

  <div class="coffe-content">
   <br>
                   <h2 style="--clr:#fff;">Nuestra Filosofía</h2>
				  <div class="carta">
              <div class="card" style="--clr: #006696;">
					<div class="imgBx">
						<img src="images/mision.jpg">
					</div>
					<div class="content">
						<h2>Misión</h2>
						<p>"Proporcionar a los clientes una experiencia excepcional al ofrecer productos frescos, de calidad y a precios exelentes. Nos esforzamos por ser el destino preferido de compras de alimentos y del hogar, comprometiéndonos  superar sus expectativas en cada visita."</p>
					</div>
					</div>
					<div class="card" style="--clr: #eeff00;">
					<div class="imgBx">
						<img src="images/vision.jpg">
					</div>
					<div class="content">
						<h2>Visión</h2>
						<p>"Ser reconocidos como el supermercado líder en nuestra comunidad, ofreciendo una variedad de productos de calidad, así como un servicio excepcional al cliente. Nos esforzamos por innovar en nuestras operaciones mejorarando la experiencia de  nuestros clientes y en la industria alimentaria."</p>
					</div>
					</div>
					<div class="card" style="--clr:#00206c;">
					<div class="imgBx">
						<img src="images/valores.png">
					</div>
					<div class="content">
						<h2>Valores</h2>
						<p>1. Compromiso con los clientes<br>
						2.Honestidad<br>
					    3. Calidad en todos los productos.<br>
				        4. Innovación constante.<br>
					    5.Respondabilidad<br>
					    6.Profesionalidad y respeto<br>
						7.Orientación al Cliente<br>
					    8.Trabajo en equipo y colaboración</p>
					</div>
					</div>
					</div>

   </div></div>
  


<br>
<section class="home-category">

   <h2 class="title" style="--clr:#fff;">Observa nuestras Categorias</h2>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="">
         <h3>Frutas</h3>
         
         <a href="category.php? category=fruits" class="btn">Ver</a>
      </div>

      <div class="box">
         <img src="images/cat-2.png" alt="">
         <h3>Carnes</h3>
         <p></p>
         <a href="category.php?category=meat" class="btn">Ver</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="">
         <h3>Vegetales</h3>
         <p></p>
         <a href="category.php?category=vegitables" class="btn">Ver</a>
      </div>

      <div class="box">
         <img src="images/cat-4.png" alt="">
         <h3>Pescados</h3>
         <p></p>
         <a href="category.php?category=fish" class="btn">Ver</a>
      </div>

      <div class="box">
         <img src="images/enlatados.png" alt="">
         <h3>Enlatados</h3>
         <p></p>
         <a href="category.php?category=meat" class="btn">Ver</a>
      </div>

      <div class="box">
         <img src="images/Reposteria.png" alt="">
         <h3>Reposteria</h3>
         <p></p>
         <a href="category.php?category=vegitables" class="btn">Ver</a>
      </div>

      <div class="box">
         <img src="images/nevera.png" alt="">
         <h3>Electrodomesticos</h3>
         <p></p>
         <a href="category.php?category=fish" class="btn">Ver</a>
      </div>

   </div>

</section>




    
  <title>footer</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="componen.css">


    
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
            <img src="images\logo2.png" alt="" href="home.php" width="250px" top="" class="logo">
				<ul>
					<li><a href="#nosotros">Sobre Nosotros</a></li>
					<li><a href="#servicios">Servicios</a></li>
					<li><a href="https://www.wilson.com/es-es/explore/legal">Politica de Privacidad</a></li>
					<li><a href="#">IPIDBOSCO</a></li>
					<li><a href="#soy">Wilber Brea/ 6to D.A.A.I</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Obtén ayuda</h4>
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">compras</a></li>
					<li><a href="#">Devoluciones</a></li>
					<li><a href="#">Ordenes</a></li>
					<li><a href="#">Métodos de pago</a></li>
					
				</ul>
			</div>
			<div class="footer-col">
				<h4>Categorias</h4>
				<ul>
					<li><a href="shop.php">Pescados</a></li>
					<li><a href="shop.php">Frutas</a></li>
					<li><a href="shop.php">Carnes</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Siguenos en</h4>
				<div class="social-links">
					<a href="https://web.facebook.com/wsportslatam/?_rdc=1&amp;_rdr"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/WilsonSportingG?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/wilson/?hl=es"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/@WilsonSportingGoods"><i class="fab fa-youtube"></i></a>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15050.126333954118!2d-70.71344898588865!3d19.43263469820911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf15a9f76621%3A0xe013b9b22166ebe8!2sHipermercado%20La%20Fuente!5e0!3m2!1ses-419!2sdo!4v1707078374363!5m2!1ses-419!2sdo" width="300" height="250" left="100px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					
				</div>


			</div>
			
			

		</div>
	</div>
	<!--<div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="images\helados-bon.jpg" alt=""> 
			</div>
					<div class="slide">
						<img src="images\lumijor.png" alt=""> 
			</div>
					<div class="slide">
						<img src="images\la-ola-de-cocacola.png" alt="" width="50px"> 
			</div>
					<div class="slide">
						<img src="images\Sprite-Logo-2019-removebg-preview.png" alt=""> 
			</div>
					<div class="slide">
						<img src="images\rica.jpg" alt=""> 
			</div>
					<div class="slide">
						<img src="images\presidentelogo.png" alt=""> 
			</div>
					<div class="slide">
						<img src="images\Oreo-logo.png" alt=""> 
			</div>

			<div class="slide">
						<img src="images\helados-bon.jpg" alt=""> 
			</div>
					<div class="slide">
						<img src="images\lumijor.png" alt=""> 
			</div>
					<div class="slide">
						<img src="images\la-ola-de-cocacola.png" alt=""> 
			</div>
					<div class="slide">
						<img src="images\Sprite-Logo-2019-removebg-preview.png" alt=""> 
			</div>
					<div class="slide">
						<img src="images\rica.jpg" alt=""> 
			</div>
					<div class="slide">
						<img src="images\presidentelogo.png" alt=""> 
			</div>
					<div class="slide">
						<img src="images\Oreo-logo.png" alt=""> 
			</div>-->
</footer>




<script src="js/script.js"></script>
<script src="js/carru.js"></script>



</body></html>