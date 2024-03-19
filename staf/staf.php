<?php
session_start();
if (empty($_SESSION['id_staf'])) {
    echo "<script>
    alert('Deskulpa Ita seidauk Login');
    window.location.assign('../index2.php');
    </script>";
}
if ($_SESSION['level'] != 'staf') {
    echo "<script>
    alert('Deskulpa Ita Laos Sesi Admin');
    window.location.assign('index2.php');
    </script>";
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staf - Sistema Pagamentu Eskola</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h3>Sistema Pagamentu Eskola</h3>
        <div class="alert alert-info">
            Ita Boot Login Nu'udar <b><?= $_SESSION['naran_staf'] ?></b> Sistema Pagamentu Eskola.
        </div>
        <a href="staf.php" class="btn btn-primary"> Staf </a>
        <a href="staf.php?url=pagamento" class="btn btn-primary"> Pagamentu </a>
        <a href="staf.php?url=logout" class="btn btn-primary"> Logout </a>


        <div class="card mt-2">
            <div class="card-body">
                <!-- Desktop husi ita nia web -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Bem vindo Mai Desktop Staf.</h4>";
                    echo "Sistema Pagamentu Eskola Utiliza atu hafasil halo anotasaun ba pagamentu
                    aluno / aluna iha eskola.";
                } else {
                    include $file . '.php';
                }
                ?>
            </div>
        </div>
    </div>


    <script src="../js/bootstrap.min.js" async defer></script>
</body>

</html>