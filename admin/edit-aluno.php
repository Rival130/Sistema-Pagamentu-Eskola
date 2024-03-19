<?php
$emis = $_GET['emis'];
include '../koneksaun.php';
$sql = "SELECT*FROM aluno,cap,klase WHERE aluno.id_klase=klase.id_klase AND aluno.id_cap=cap.id_cap AND emis='$emis'";
$query = mysqli_query($koneksaun, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Desktop Edit Data Aluno</h5>
<a href="?url=Aluno" class="btn btn-primary">FILA</a>
<hr>
<form action="?url=proses-edit-aluno&emis=<?= $emis; ?>" method="post">
    <div class="form-group mb-2">
        <label for="">EMIS</label>
        <input value="<?= $data['emis'] ?>" readonly type="number" name="emis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">NIE</label>
        <input value="<?= $data['nie'] ?>" readonly type="number" name="nie" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Naran</label>
        <input value="<?= $data['naran'] ?>" readonly type="text" name="naran" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Klase</label>
        <select name="id_klase" class="form-control">
            <option value="<?= $data['id_klase'] ?>"> <?= $data['naran_klase'] ?></option>
            <?php
            include '../koneksaun.php';
            $klase = mysqli_query($koneksaun, "SELECT*FROM klase ORDER BY naran_klase ASC");
            foreach ($klase as $data_klase) {
            ?>
                <option value="<?= $data_klase['id_klase'] ?>"> <?= $data_klase['naran_klase']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="">Hela Fatin</label>
        <textarea name="helafatin" class="form-control" required><?= $data['helafatin'] ?></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="">Nu Telf</label>
        <input value="<?= $data['nu_telf'] ?>" type=" number" name="nu_telf" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">CAP</label>
        <select name="id_cap" class="form-control" required>
            <option value="<?= $data['id_cap'] ?>"> <?= $data['tinan']; ?> | <?= number_format($data['nominal']); ?> </option>
            <?php
            include '../koneksaun.php';
            $cap = mysqli_query($koneksaun, "SELECT*FROM cap ORDER BY id_cap ASC");
            foreach ($cap as $data_cap) {
            ?>
                <option value="<?= $data_cap['id_cap'] ?>"> <?= $data_cap['tinan']; ?> | <?= number_format($data_cap['nominal']); ?> </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> RAI </button>
        <button type="reset" class="btn btn-danger"> RESET </button>
    </div>
</form>