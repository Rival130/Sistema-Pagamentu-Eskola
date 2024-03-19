<?php
$id_cap = $_GET['id_cap'];
include '../koneksaun.php';
$sql = "SELECT*FROM cap WHERE id_cap= '$id_cap'";
$query = mysqli_query($koneksaun, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Desktop Edit Data Pagamento</h5>
<a href="?url=cap" class="btn btn-primary">FILA</a>
<hr>
<form action="?url=proses-edit-cap&id_cap=<?= $id_cap; ?>" method="post">
    <div class="form-group mb-2">
        <label for="">Tinan</label>
        <input value="<?= $data['tinan'] ?>" type="number" name="tinan" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Nominal</label>
        <input value="<?= $data['nominal'] ?>" type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> RAI </button>
        <button type="reset" class="btn btn-danger"> RESET </button>
    </div>
</form>