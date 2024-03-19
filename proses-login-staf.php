<?php
$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksaun.php';
$sql = "SELECT*FROM staf WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksaun, $sql);
if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_staf'] = $data['id_staf'];
    $_SESSION['naran_staf'] = $data['naran_staf'];
    $_SESSION['level'] = $data['level'];
    if ($data['level'] == 'admin') {
        header('location:admin/admin.php');
    } elseif ($data['level'] == 'staf') {
        header('location:staf/staf.php');
    }
} else {
    echo "<script>
    alert('Deskulpa Login Faila, Koko Fila Fali !!');
    window.location.assign('index2.php');
    </script>";
}
