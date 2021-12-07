<?php
if($_POST){
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirm_password= $_POST['confirm_password'];
    $username= $_POST['username'];

    if(empty($first_name)){
        echo "<script>alert('nama tidak boleh kosong');location.href='signup.php';</script>";
 
    } elseif(empty($last_name)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='signup.php';</script>";
    } elseif(empty($email)){
        echo "<script>alert('email tidak boleh kosong');location.href='signup.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='signup.php';</script>";
    } elseif(empty($confirm_password)){
        echo "<script>alert('ulangi password');location.href='signup.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='signup.php';</script>";

    } else {
        include "connection.php";
        $insert=mysqli_query($conn,"insert into user (first_name,last_name, email, password, confirm_password,username) value ('".$first_name."','".$last_name."','".$email."','".md5($password)."','".md5($confirm_password)."','".$username."')");
        if($insert){
            echo "<script>alert('Sukses sign up');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal sign up');location.href='signup.php';</script>";
        }
    }
}
?>
