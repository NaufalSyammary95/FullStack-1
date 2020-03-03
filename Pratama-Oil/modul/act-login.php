<?php
if (isset ($_POS['submit-login'])) {
    $user = $_POST ['email'];//tangkap data yang di input dari form login untuk email
    $pass = $_POST ['password'];//tangkap data yg di input dari form login untuk password

    //melakukan pengampilan data dari data base untuk di cocokkan
    $query = mysqli_num_rows($konek, "SELECT * from users where email= '$email'");
    $xxx = mysqli_num_rows ($query); // 0 1 // melakukan pencocokkan

    if ($xxx == TRUE ) {       //jika benar tampilkan pesan berhasil login
        echo "<hr><hr><hr><hr>LOGIN BERHASIL";
    }else {
        echo "<hr><hr><hr><hr>Email yang anda inputkan tidak dikenali";
    }
}