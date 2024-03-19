<h5>Baranda Data User</h5>
<a href="?url=aumenta-staf" class="btn btn-primary">Aumenta User</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>Nu</td>
        <td>Username</td>
        <td>Password</td>
        <td>Naran User</td>
        <td>Level</td>
        <td>Edit</td>
        <td>Hamos</td>
    </tr>
    <?php
    include '../koneksaun.php';
    $no = 1;
    $sql = "SELECT*FROM staf ORDER BY id_staf DESC";
    $query = mysqli_query($koneksaun, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['naran_staf'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
                <a href="?url=edit-staf&id_staf=<?= $data['id_staf'] ?>" class='btn btn-warning'>EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Tebes Ita Hakarak Hamos Data')" href="?url=hamos-staf&id_staf=<?= $data['id_staf'] ?>" class='btn btn-danger'>HAMOS</a>
            </td>
        </tr>
    <?php } ?>
</table>