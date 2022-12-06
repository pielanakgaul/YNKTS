<?php

$koneksi= mysqli_connect("localhost", "root", "", "db_websitewisata");

function registrasi($data){

    global $koneksi;

    $email = mysqli_real_escape_string($koneksi, $data["email"]);
    $username = mysqli_real_escape_string($koneksi, $data["username"]);
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $kpassword = mysqli_real_escape_string($koneksi, $data["kpassword"]);

    $result = mysqli_query($koneksi, "SELECT email, username FROM user WHERE email = '$email' OR username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username atau email sudah ada');
                </script>";
        return false;
    }
    if($password !== $kpassword){
        echo "<script>
                alert('Password dan Konfirmasi Berbeda!');
                </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES ('','$email', '$username', '$password')";
    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);

}


?>