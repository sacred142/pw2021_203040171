<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location:login.php");
  exit;
}

require 'function.php';
$id =$_GET['id'];


if(hapus($id) > 0) {
    echo "<script>
     alert('Data has been deleted');
     document.location.href = 'admin.php';
 </script>";
}else {
     echo "<script>
             alert('Fail to delete data');
             document.location.href = 'admin.php';
        </script>";
}




?>