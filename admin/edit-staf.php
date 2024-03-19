<?php
$id_staf = $_GET['id_staf'];
include '../koneksaun.php';
$sql = "SELECT*FROM staf WHERE id_staf= '$id_staf'";
$query = mysqli_query($koneksaun, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Desktop Aumenta Edit User</h5>
<a href="?url=staf" class="btn btn-primary"> FILA </a>
<hr>
<form action="?url=proses-edit-staf&id_staf=<?= $id_staf; ?>" method="post">
    <div class="form-group mb-2">
        <label for="">Username</label>
        <input value="<?= $data['username'] ?>" type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Password</label>
        <input value="<?= $data['password'] ?>" type="text" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Naran User</label>
        <input value="<?= $data['naran_staf'] ?>" type="text" name="naran_staf" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">User</label>
        <select name="level" class="form-control" required>
            <option value="<?= $data['level'] ?>"> <?= $data['level'] ?></option>
            <option value="admin">Admin</option>
            <option value="staf">Staf</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> RAI </button>
        <button type="reset" class="btn btn-danger"> RESET </button>
    </div>
</form>