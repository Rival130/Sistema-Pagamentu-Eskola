<?php
$username = $_POST['username'];
$password =  $_POST['password'];
$naran_staf =  $_POST['naran_staf'];
$level =  $_POST['level'];

include '../koneksaun.php';
$sql = "INSERT INTO staf(username, password, naran_staf, level) VALUES('$username','$password','$naran_staf', '$level')";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=staf");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=staf');</script>";
}
