<?php
    include './koneksi.php';
    
    $id = $_GET['id'];
    

    $sql = "DELETE FROM user WHERE id='$id'";
    if($conn->query($sql) === TRUE){
         header("location:akun.php?pesan=sukses_hapus");
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>