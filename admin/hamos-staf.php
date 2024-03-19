<?php
$id_staf = $_GET['id_staf'];

include '../koneksaun.php';
$sql = "DELETE FROM staf WHERE id_staf='$id_staf'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=staf");
} else {
    echo "<script>alert('Deskulpa Data Labele Hamos'); window.location.assing('?url=staf');</script>";
}
