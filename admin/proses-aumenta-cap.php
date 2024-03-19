<?php
$tinan = $_POST['tinan'];
$nominal =  $_POST['nominal'];

include '../koneksaun.php';
$sql = "INSERT INTO cap(tinan, nominal) VALUES('$tinan','$nominal')";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=cap");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=cap');</script>";
}
