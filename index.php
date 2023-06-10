<?php
session_start();

if(isset($_SESSION["login"])){
    header("location: main.php");
}

require 'backend/proseRegis.php';

if(isset($_POST["submit"])){

    $username = $_POST["usern"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

    if(mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row["password"])){
            
            $_SESSION["login"] = true;

            header("location: main.php");
            exit;
        }

    }else{
      echo "   <script>
                  alert('gagal')
            </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/style4.css">
  <title>Halaman login</title>
</head>
<body>

<body class="align">

  <div class="grid">

    <form action="" method="post" class="form login">

      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="text" placeholder="Username" name="usern" required>
        </div>

        <div class="form__field">
          <input type="password" placeholder="Password" name="password" required>
        </div>

      </div>

      <footer class="login__footer">
        <button type="submit" name="submit">submit</button>
        <!-- <input type="submit" name="submit "value="Login"> -->

        <p><span class="icon icon--info">?</span><a href="registrasi.php">Daftar</a></p>
      </footer>
    </form>
  </div>
</body>
</body>
</html>