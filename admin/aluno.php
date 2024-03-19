<h5>Baranda Data Aluno</h5>
<a href="?url=aumenta-aluno" class="btn btn-primary">Aumenta Aluno</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>Nu</td>
        <td>EMIS</td>
        <td>NIE</td>
        <td>Naran</td>
        <td>Klase</td>
        <td>Hela Fatin</td>
        <td>Nu Telfone</td>
        <td>CAP</td>
        <td>Edit</td>
        <td>Hamos</td>
    </tr>
    <?php
    include '../koneksaun.php';
    $no = 1;
    $sql = "SELECT*FROM aluno,cap,klase WHERE aluno.id_klase=klase.id_klase AND aluno.id_cap=cap.id_cap 
            ORDER BY naran ASC";
    $query = mysqli_query($koneksaun, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['emis'] ?></td>
            <td><?= $data['nie'] ?></td>
            <td><?= $data['naran'] ?></td>
            <td><?= $data['naran_klase'] ?></td>
            <td><?= $data['helafatin'] ?></td>
            <td><?= $data['nu_telf'] ?></td>
            <td><?= $data['tinan'] ?> - <?= $data['nominal'] ?></td>
            <td>
                <a href="?url=edit-aluno&emis=<?= $data['emis'] ?>" class='btn btn-warning'>EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Tebes Ita Hakarak Hamos Data')" href="?url=hamos-aluno&emis=<?= $data['emis'] ?>" class='btn btn-danger'>HAMOS</a>
            </td>
        </tr>
    <?php } ?>
</table>