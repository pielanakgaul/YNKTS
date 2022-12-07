<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_websitewisata");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    global $koneksi;

    //daftar
    $email = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
    $no_telp = strtolower(stripslashes($data["no_telp"]));
    $kota = strtolower(stripslashes($data["kota"]));
    $negara = strtolower(stripslashes($data["negara"]));
  
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $kpassword = mysqli_real_escape_string($koneksi, $data["kpassword"]);
    $result = mysqli_query($koneksi, "SELECT email, username FROM user WHERE email = '$email' OR username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username atau email sudah ada');
            </script>";
        return false;
    }

    if ($password !== $kpassword) {
        echo "<script>
                alert('Password dan Konfirmasi Berbeda!');
            </script>";
        return false;
    }
    // $password = password_hash($password, PASSWORD_ARGON2I);

    $password = md5($password);

    $query = "INSERT INTO user VALUES ('','$email', '$username', '$password', '$no_telp', '$kota', '$negara','')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function registrasi_admin($data)
{

    global $koneksi;

    //daftar
    $email = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
  
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $kpassword = mysqli_real_escape_string($koneksi, $data["kpassword"]);
    $result1 = mysqli_query($koneksi, "SELECT email, username FROM admin WHERE email = '$email' OR username = '$username'");

    if (mysqli_fetch_assoc($result1)) {
        echo "<script>
                alert('Username atau email sudah ada');
            </script>";
        return false;
    }

    if ($password !== $kpassword) {
        echo "<script>
                alert('Password dan Konfirmasi Berbeda!');
            </script>";
        return false;
    }
    // $password = password_hash($password, PASSWORD_ARGON2I);

    $password = md5($password);

    $query = "INSERT INTO admin VALUES ('','$email', '$username', '$password')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function upload(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $eror = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yg di upload
    if ( $eror === 4 ){
        echo "<script>
                alert('Pilih gambar dahulu!');
             </script>";
        return false;
    }

    //cek yg diupload adalah gambar saja
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
                alert('Yang anda upload bukan gambar!');
             </script>";
        return false;
    }

    // jika file besar
    if ($ukuranFile > 2048000){
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
             </script>";
        return false;
    }
    
    //lolos dicek
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName,'img/' . $namaFileBaru);
    return $namaFileBaru;


}

function update($data){
    global $koneksi;

    $id = $data["id"];
    // $email = $data["email"];
    $username = $data["username"];
    $no_telp = $data["no_telp"];
    $kota = $data["kota"];
    $negara = $data["negara"];
    $gambarLama = $data["gambar"];

    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }

    $query = "UPDATE user SET  
                username = '$username', 
                no_telp = '$no_telp', 
                kota = '$kota', 
                negara = '$negara',  
                gambar = '$gambar'
              WHERE id = $id";
              
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>