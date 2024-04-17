<?php

include 'config.php';

session_start();

$message = []; // Inicializar un array para almacenar mensajes

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = md5($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email, $pass]);
    $rowCount = $stmt->rowCount();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($rowCount > 0) {

        if ($row['user_type'] == 'admin') {

            $_SESSION['admin_id'] = $row['id'];
            header('location:admin_page.php');
            exit(); 
        } elseif ($row['user_type'] == 'user') {

            $_SESSION['user_id'] = $row['id'];
            header('location:home.php');
            exit(); 
        }
    } else {
        $message[] = 'Incorrect email or password!';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $msg){
      echo '
      <div class="message">
         <span>'.$msg.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<div class="container" id="container">
    <div class="form-container sign-up">
        <form action="register.php" enctype="multipart/form-data" method="POST">
            <h3>Register Now</h3>
            <input type="text" name="name" class="box" placeholder="Enter your name" required>
            <input type="email" name="email" class="box" autocomplete="off" placeholder="Enter your email" required>
            <input type="password" name="pass" class="box" autocomplete="off" placeholder="Enter your password" required>
            <input type="password" name="cpass" class="box" placeholder="Confirm your password" required>
            <input type="file" name="image" class="box" required accept="image/jpg, image/jpeg, image/png">
            <input type="submit" value="Register Now" class="btn" name="submit">
            <p>Already have an account? <a href="#">Login now</a></p>
        </form>
    </div>

    <div class="form-container sign-in">
        <form method="post" action="">
            
            <img src="images\logolafuente.png" alt="" width="155px"  class="logo">
            <h1>Sign In</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email password</span>
            <input type="email" name="email" class="box" autocomplete="off" placeholder="Email" required>
            <input type="password" name="pass" class="box" autocomplete="off" placeholder="Password" required>
            <input type="submit" value="Login now" class="btn" name="submit">
            <!-- Eliminamos el enlace adicional de "Sign In" -->
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
            <img src="images/logo2.png" width="200px" alt="" class="logo">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all of site features</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
                <button class="hidden" id="register">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script src="js/scripts.js"></script>

</body>
</html>
