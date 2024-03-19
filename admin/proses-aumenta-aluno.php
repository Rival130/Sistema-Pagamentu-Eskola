<?php
$emis = $_POST['emis'];
$nie =  $_POST['nie'];
$naran = $_POST['naran'];
$id_klase =  $_POST['id_klase'];
$helafatin = $_POST['helafatin'];
$nu_telf =  $_POST['nu_telf'];
$id_cap = $_POST['id_cap'];


include '../koneksaun.php';
$sql = "INSERT INTO aluno(emis, nie, naran, id_klase, helafatin, nu_telf, id_cap) VALUES('$emis','$nie','$naran','$id_klase',
        '$helafatin', '$nu_telf', '$id_cap')";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("location:?url=aluno");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=aluno');</script>";
}
