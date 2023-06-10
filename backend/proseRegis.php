<?php

$conn = mysqli_connect("localhost", "root", "", "dbphpdasar");

function registrasi($data){    
    global $conn;

    $username = strtolower(stripslashes($_POST["username"]));
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $password2 = mysqli_real_escape_string($conn, $_POST["password2"]);

    // cek username sudah ada apa belum
    $result = mysqli_query($conn, "SELECT username FROM user  WHERE username = '$username'");

    if (mysqli_num_rows($result) > 0) {
        echo "   <script>
                        alert('data sudah ada!')
                    </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");


    return mysqli_affected_rows($conn);
}




?>