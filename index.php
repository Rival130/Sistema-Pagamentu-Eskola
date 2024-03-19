<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Aluno - Sistema Pagamentu Eskola</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center">LOGIN ALUNO</h4>
                <div class="card">
                    <div class="card-header">
                        <img src="logo.png" alt="" width="100%">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-aluno.php" method="post">
                            <div class="form-group mb-2">
                                <label>EMIS</label>
                                <input type="number" name="emis" class="form-control" placeholder="Prense ita Nia EMIS" required>
                            </div>
                            <div class="form-group mb-2">
                                <label>NIE</label>
                                <input type="number" name="nie" class="form-control" placeholder="Prense ita Nia NIE" required>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary"> LOGIN </button>
                            </div>
                            <a href="index2.php">Login Nuudar Administrator / Staf</a>
                            <div class="footer">
                                <center><a href="" style="color: black;">Copyright by @2023</a></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.min.js" async defer></script>
</body>

</html>