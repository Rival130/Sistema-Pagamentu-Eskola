<?php
$emis = $_POST['emis'];
$nie = $_POST['nie'];

include 'koneksaun.php';
$sql = "SELECT*FROM aluno WHERE emis='$emis' AND nie='$nie'";
$query = mysqli_query($koneksaun, $sql);
if (mysqli_num_rows($query) > 0) {
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['naran'] = $data['naran'];
    $_SESSION['emis'] = $data['emis'];

    header('Location:aluno/aluno.php');
} else {
    echo "<script>
    alert('Deskulpa Ita Boot Faila atu Login, Koko Fila Fali !');
    window.Location.assing('index.php');
    </script>";
}
