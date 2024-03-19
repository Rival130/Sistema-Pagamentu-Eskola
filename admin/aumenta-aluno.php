<h5>Desktop Aumenta Data Aluno</h5>
<a href="?url=Aluno" class="btn btn-primary">FILA</a>
<hr>
<form action="?url=proses-aumenta-aluno" method="post">
    <div class="form-group mb-2">
        <label for="">EMIS</label>
        <input type="number" name="emis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">NIE</label>
        <input type="number" name="nie" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Naran</label>
        <input type="text" name="naran" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Klase</label>
        <select name="id_klase" class="form-control">
            <option value="">Hili Klase</option>
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
        <textarea name="helafatin" class="form-control" required></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="">Nu Telf</label>
        <input type="number" name="nu_telf" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">CAP</label>
        <select name="id_cap" class="form-control" required>
            <option value="">Hili CAP</option>
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