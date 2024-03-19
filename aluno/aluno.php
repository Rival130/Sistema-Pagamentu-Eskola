<?php
session_start();
if (empty($_SESSION['emis'])) {
    echo "<script>
    alert('Deskulpa Ita seidauk Login');
    window.location.assign('../index.php');
    </script>";
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aluno - Sistema Pagamentu Eskola</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h3>Sistema Pagamentu Eskola</h3>
        <div class="alert alert-info">
            Ita Boot Login Nu'udar Aluno <b><?= $_SESSION['naran'] ?></b> Sistema Pagamentu Eskola.
        </div>
        <a href="aluno.php" class="btn btn-primary"> Aluno </a>
        <a href="aluno.php?url=logout" class="btn btn-primary"> Logout </a>


        <div class="card mt-2">
            <div class="card-body">
                <!-- Desktop husi ita nia web -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Bem vindo Mai Desktop Aluno.</h4>";
                    echo "Sistema Pagamenton Eskola Utiliza atu hafasil halo anotasaun ba pagamento
                    aluno / aluna iha eskola.";
                    echo "<hr>";
                    include 'history-pagamento.php';
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