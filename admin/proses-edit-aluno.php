<?php
$emis = $_GET['emis'];
$nie =  $_POST['nie'];
$naran = $_POST['naran'];
$id_klase =  $_POST['id_klase'];
$helafatin = $_POST['helafatin'];
$nu_telf =  $_POST['nu_telf'];
$id_cap = $_POST['id_cap'];


include '../koneksaun.php';
$sql = "UPDATE aluno SET emis='$emis', nie='$nie', naran='$naran', id_klase='$id_klase', 
        helafatin='$helafatin', nu_telf='$nu_telf', id_cap='$id_cap' WHERE emis='$emis'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=aluno");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=aluno');</script>";
}
