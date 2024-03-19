<?php
$id_klase = $_GET['id_klase'];
include '../koneksaun.php';
$sql = "SELECT*FROM klase WHERE id_klase= '$id_klase'";
$query = mysqli_query($koneksaun, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Desktop Edit Data Klase</h5>
<a href="?url=klase" class="btn btn-primary">FILA</a>
<hr>
<form action="?url=proses-edit-klase&id_klase=<?= $id_klase; ?>" method="post">
    <div class="form-group mb-2">
        <label for="">Naran Klase</label>
        <input value="<?= $data['naran_klase'] ?>" type="text" name="naran_klase" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Departamento</label>
        <input value="<?= $data['kompetensi_habilidade'] ?>" type="text" name="kompetensi_habilidade" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> RAI </button>
        <button type="reset" class="btn btn-danger"> RESET </button>
    </div>
</form>