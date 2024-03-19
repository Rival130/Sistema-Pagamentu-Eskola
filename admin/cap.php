<h5>Baranda Data Pagamentu Eskola</h5>
<a href="?url=aumenta-cap" class="btn btn-primary">Aumenta CAP</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>Nu</td>
        <td>Tinan</td>
        <td>Nominal</td>
        <td>Edit</td>
        <td>Hamos</td>
    </tr>
    <?php
    include '../koneksaun.php';
    $nu = 1;
    $sql = "SELECT*FROM cap ORDER BY id_cap DESC";
    $query = mysqli_query($koneksaun, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $nu++; ?></td>
            <td><?= $data['tinan'] ?></td>
            <td><?= $data['nominal'] ?></td>
            <td>
                <a href="?url=edit-cap&id_cap=<?= $data['id_cap'] ?>" class='btn btn-warning'>EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Tebes Ita Hakarak Hamos Data')" href="?url=hamos-cap&id_cap=<?= $data['id_cap'] ?>" class='btn btn-danger'>HAMOS</a>
            </td>
        </tr>
    <?php } ?>
</table>