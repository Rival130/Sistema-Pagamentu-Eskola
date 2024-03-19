<h5>Baranda Data Klase</h5>
<a href="?url=aumenta-klase" class="btn btn-primary">Aumenta Klase</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>Nu</td>
        <td>Naran Klase</td>
        <td>Departamento</td>
        <td>Edit</td>
        <td>Hamos</td>
    </tr>
    <?php
    include '../koneksaun.php';
    $no = 1;
    $sql = "SELECT*FROM klase ORDER BY id_klase DESC";
    $query = mysqli_query($koneksaun, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['naran_klase'] ?></td>
            <td><?= $data['kompetensi_habilidade'] ?></td>
            <td>
                <a href="?url=edit-klase&id_klase=<?= $data['id_klase'] ?>" class='btn btn-warning'>EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Tebes Ita Hakarak Hamos Data')" href="?url=hamos-klase&id_klase=<?= $data['id_klase'] ?>" class='btn btn-danger'>HAMOS</a>
            </td>
        </tr>
    <?php } ?>
</table>