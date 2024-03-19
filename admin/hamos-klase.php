<?php
$id_klase = $_GET['id_klase'];

include '../koneksaun.php';
$sql = "DELETE FROM klase WHERE id_klase='$id_klase'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=klase");
} else {
    echo "<script>alert('Deskulpa Data Labele Hamos'); window.location.assing('?url=klase');</script>";
}
