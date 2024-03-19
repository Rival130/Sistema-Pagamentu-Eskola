<?php
$naran_klase = $_POST['naran_klase'];
$kompetensi_habilidade =  $_POST['kompetensi_habilidade'];

include '../koneksaun.php';
$sql = "INSERT INTO klase(naran_klase, kompetensi_habilidade) VALUES('$naran_klase','$kompetensi_habilidade')";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=klase");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=klase');</script>";
}
