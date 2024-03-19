<?php
$id_cap = $_GET['id_cap'];
$tinan = $_POST['tinan'];
$nominal =  $_POST['nominal'];

include '../koneksaun.php';
$sql = "UPDATE cap SET tinan='$tinan', nominal='$nominal' WHERE id_cap='$id_cap'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=cap");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=cap');</script>";
}
