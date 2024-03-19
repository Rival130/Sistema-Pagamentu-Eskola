<?php
$id_klase = $_GET['id_klase'];
$naran_klase = $_POST['naran_klase'];
$kompetensi_habilidade =  $_POST['kompetensi_habilidade'];

include '../koneksaun.php';
$sql = "UPDATE klase SET naran_klase='$naran_klase', kompetensi_habilidade='$kompetensi_habilidade' WHERE id_klase='$id_klase'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=klase");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=klase');</script>";
}
