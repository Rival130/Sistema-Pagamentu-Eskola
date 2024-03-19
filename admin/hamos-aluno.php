<?php
$emis = $_GET['emis'];


include '../koneksaun.php';
$sql = "DELETE FROM aluno WHERE emis='$emis'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=aluno");
} else {
    echo "<script>alert('Deskulpa Data Labele Hamos'); window.location.assing('?url=aluno');</script>";
}
