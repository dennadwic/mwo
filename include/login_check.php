<?php 

  include 'config.php';

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $login = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");
  $cek = mysqli_num_rows($login);

  if($cek > 0){

    $data = mysqli_fetch_assoc($login);
  
    // cek jika user login sebagai admin
    if($data['role']=="admin"){
  
      // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['role'] = "admin";
      // alihkan ke halaman dashboard admin
      header("location:../index.php?");
    
    }else{
      echo "Username Atau Password Salah";
      // alihkan ke halaman login kembali
      header("location:../index.php?pesan=gagal");
    }	
  }else{
    echo "Username Atau Password Salah";
    header("location:../index.php?pesan=gagal");
  }
?>