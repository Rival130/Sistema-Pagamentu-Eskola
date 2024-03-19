<?php
$id_cap = $_GET['id_cap'];

include '../koneksaun.php';
$sql = "DELETE FROM cap WHERE id_cap='$id_cap'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=cap");
} else {
    echo "<script>alert('Deskulpa Data Labele Hamos'); window.location.assing('?url=cap');</script>";
}
