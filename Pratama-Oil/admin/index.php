<?php
session_start();

if (isset($_SESSION['username'])){
    echo "Selamat Datanf".$_SESSION['username'] . "<br>";
    echo"<a  href='logout.php'>Logout.php</a>" ;
    echo "<hr>";
    include "data-users.php";
}else {
    header('Location:../');
}
