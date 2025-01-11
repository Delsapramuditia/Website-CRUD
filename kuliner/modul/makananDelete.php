<?php
include "includes/config.php";

$id = $_GET['id'];

$query = "DELETE FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);

if ($sql){
    echo "<script>alert('Data berhasil dihapus !'); window.location='?page=makanan';</script>";
} else{
    echo "<script>alert('Data gagal dihapus !'); window.location='?page=makanan';</script>";
}