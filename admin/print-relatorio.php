<?php
header("Content-type : application/vnd-ms-excel");
header("Content-Disposition : attachment; filename=relatorio-pagamento-CAP.xls");
?>
<h5>Relatorio Pagamentu.</h5>
<hr>
<table border="1" class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>Nu</td>
        <td>EMIS</td>
        <td>Naran</td>
        <td>Klase</td>
        <td>Tinan CAP</td>
        <td>Nominal Selu</td>
        <td>Selu ona</td>
        <td>Data Selu</td>
        <td>User</td>
    </tr>
    <?php
    include '../koneksaun.php';
    $no = 1;
    $sql = "SELECT*FROM pagamento, aluno, klase, cap, staf WHERE pagamento.emis=aluno.emis AND 
            aluno.id_klase=klase.id_klase AND pagamento.id_cap=cap.id_cap AND
            pagamento.id_staf=staf.id_staf ORDER BY data_pagamento DESC";
    $query = mysqli_query($koneksaun, $sql);
    foreach ($query as $data) {
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['emis'] ?></td>
            <td><?= $data['naran'] ?></td>
            <td><?= $data['naran_klase'] ?></td>
            <td><?= $data['tinan'] ?></td>
            <td><?= $data['nominal'] ?></td>
            <td><?= $data['total_selu'] ?></td>
            <td><?= $data['data_pagamento'] ?></td>
            <td><?= $data['naran_staf'] ?></td>
        </tr>
    <?php } ?>
</table>