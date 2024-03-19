<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Administrator / Staf - Sistema Pagamentu Escolar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <h4 class="text-center">LOGIN ADMIN / STAF</h4>
                <div class="card">
                    <div class="card-header">
                        <img src="logo.png" alt="" width="100%">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-staf.php" method="post">
                            <div class="form-group mb-2">
                                <label>USERNAME</label>
                                <input type="text" name="username" class="form-control" placeholder="Prense ita Nia Username" required>
                            </div>
                            <div class="form-group mb-2">
                                <label>PASSWORD</label>
                                <input type="password" name="password" class="form-control" placeholder="Prense ita Nia Password" required>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary"> LOGIN </button>
                            </div>
                            <a href="index.php">Login Nuudar Aluno</a>
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