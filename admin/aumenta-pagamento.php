<?php
$emis = $_GET['emis'];
$sei_falta = $_GET['sei_falta'];
include '../koneksaun.php';
$sql = "SELECT*FROM aluno,cap,klase WHERE aluno.id_klase=klase.id_klase AND aluno.id_cap=cap.id_cap AND emis='$emis'";
$query = mysqli_query($koneksaun, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Desktop Aumenta Data Pagamentu</h5>
<a href="?url=pagamento" class="btn btn-primary">FILA</a>
<hr>
<form action="?url=proses-aumenta-pagamento&emis=<?= $emis; ?>" method="post">
    <input value="<?= $data['id_cap'] ?>" name="id_cap" type="hidden" class="form-control" required>
    <div class="form-group mb-2">
        <label>Naran User</label>
        <input readonly value="<?= $_SESSION['naran_staf'] ?>" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>EMIS</label>
        <input readonly value="<?= $data['emis'] ?>" name="emis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Naran Aluno</label>
        <input readonly value="<?= $data['naran'] ?>" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Data Selu</label>
        <input type="date" name="data_pagamento" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Fulan</label>
        <select name="fulan_selu" id="" class="form-control" required>
            <option value="">Hili Fulan</option>
            <option value="Janeiru">Janeiru</option>
            <option value="Februariu">Februariu</option>
            <option value="Marsu">Marsu</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agostu">Agostu</option>
            <option value="Setembru">Setembru</option>
            <option value="Outubru">Outubru</option>
            <option value="Novembru">Novembru</option>
            <option value="Desembru">Desembru</option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Tinan Selu</label>
        <select name="tinan_selu" class="form-control" required>
            <option value=""> Hili Tinan Selu </option>
            <?php
            for ($i = 2010; $i <= date('Y'); $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Total Selu(Total Ne'ebe atu Selu Mak <b> <?= ($sei_falta) ?>)</label>
        <input type="number" name="total_selu" max="<?= $sei_falta ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> RAI </button>
        <button type="reset" class="btn btn-danger"> RESET </button>
    </div>
</form>