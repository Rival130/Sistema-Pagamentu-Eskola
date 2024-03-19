<?php
session_start();
if (empty($_SESSION['id_staf'])) {
    echo "<script>
    alert('Deskulpa Ita seidauk Login');
    window.location.assign('../index2.php');
    </script>";
}
if ($_SESSION['level'] != 'admin') {
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
    <title>Admin - Sistema Pagamentu Eskola</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h3>Sistema Pagamentu Eskola</h3>
        <div class="alert alert-info">
            Ita Boot Login Nu'udar <b>ADMINISTRATOR</b> Sistema Pagamentu Eskola.
        </div>
        <a href="admin.php" class="btn btn-primary"> Administrator </a>
        <a href="admin.php?url=cap" class="btn btn-primary"> CAP </a>
        <a href="admin.php?url=klase" class="btn btn-primary"> Klase </a>
        <a href="admin.php?url=aluno" class="btn btn-primary"> Aluno </a>
        <a href="admin.php?url=staf" class="btn btn-primary"> User </a>
        <a href="admin.php?url=pagamento" class="btn btn-primary"> Pagamentu </a>
        <a href="admin.php?url=relatorio" class="btn btn-primary"> Relatorio </a>
        <a href="admin.php?url=logout" class="btn btn-primary"> Logout </a>


        <div class="card mt-2">
            <div class="card-body">
                <!-- Desktop husi ita nia web -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Bem vindo Mai Desktop Administrator.</h4>";
                    echo "Sistema Pagamentu Escolar Utiliza atu hafasil halo anotasaun ba pagamentu
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