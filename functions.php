<?php

$koneksi= mysqli_connect("localhost", "root", "", "db_websitewisata");

function registrasi($data){

    global $koneksi;

    $email = $data["email"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $kpassword = mysqli_real_escape_string($koneksi, $data["kpassword"]);

    //cek username dan email sdh ada atau belum
    $result = mysqli_query($koneksi, "SELECT email, username FROM user WHERE email = '$email' OR username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username atau email sudah ada');
                </script>";
        return false;
    }
    // cek konfirmasi password
    if($password !== $kpassword){
        echo "<script>
                alert('Password dan Konfirmasi Berbeda!');
                </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambakan userbaru ke db
    $query = "INSERT INTO user VALUES ('','$email', '$username', '$password')";
    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);

}


?>