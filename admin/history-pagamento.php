<?php
$emis = $_GET['emis'];
?>
<h5>History Pagamento.</h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>Nu</td>
        <td>EMIS</td>
        <td>Naran</td>

        <td>Tinan CAP</td>
        <td>Nominal Selu</td>
        <td>Selu ona</td>
        <td>Data Selu</td>
        <td>User</td>
        <td>Hamos</td>
    </tr>
    <?php
    include '../koneksaun.php';
    $no = 1;
    $sql = "SELECT * FROM pagamento p, cap c, aluno a, staf s WHERE p.id_cap=c.id_cap AND c.id_cap AND p.emis=a.emis AND p.id_staf=s.id_staf AND c.id_cap='$emis' ORDER BY data_pagamento DESC";
    $query = mysqli_query($koneksaun, $sql);
    foreach ($query as $data) {
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['emis'] ?></td>
            <td><?= $data['naran'] ?></td>

            <td><?= $data['tinan'] ?></td>
            <td><?= $data['nominal'] ?></td>
            <td><?= $data['total_selu'] ?></td>
            <td><?= $data['data_pagamento'] ?></td>
            <td><?= $data['naran_staf'] ?></td>

            <td>
                <a href="?url=hamos-pagamento&id_pagamento<?= $data['id_pagamento'] ?>" class="btn btn-danger">Hamos</a>
            </td>
        </tr>
    <?php } ?>
</table>