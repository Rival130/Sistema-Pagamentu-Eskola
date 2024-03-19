<?php
$id_staf = $_GET['id_staf'];
$username = $_POST['username'];
$password =  $_POST['password'];
$naran_staf =  $_POST['naran_staf'];
$level =  $_POST['level'];

include '../koneksaun.php';
$sql = "UPDATE staf SET username='$username', password='$password', naran_staf='$naran_staf', level='$level' WHERE id_staf='$id_staf'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=staf");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=staf');</script>";
}
