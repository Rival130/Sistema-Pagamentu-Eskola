<?php
$emis = $_GET['emis'];
?>
<h5>History Pagamentu.</h5>
<hr>
<table class="table table-striped table-bordered">
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
        <td>Hamos</td>
    </tr>
    <?php
    include '../koneksaun.php';
    $no = 1;
    $sql = "SELECT*FROM pagamento, aluno, klase, cap, staf WHERE pagamento.emis=aluno.emis AND 
            aluno.id_klase=klase.id_klase AND pagamento.id_cap=cap.id_cap AND
            pagamento.id_staf=staf.id_staf AND pagamento.emis='$emis' ORDER BY data_pagamento DESC";
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
            <td><?= $data['sei_falta'] ?></td>
            <td><?= $data['data_pagamento'] ?></td>
            <td><?= $data['naran_staf'] ?></td>
            <td>
                <?php
                if ($sei_falta == 0) {
                    echo "<span class='badge text-bg-success'>Selu hotu ona</span>";
                } else { ?>
                    <a href="?url=aumenta-pagamento&emis=<?= $data['emis']; ?>&sei_falta=<?= $sei_falta ?>" class="btn btn-danger">Hili & Selu</a>
                <?php
                }
                ?>
            </td>
            <td>
                <a href="?url=hamos-pagamento&id_pagamento<?= $data['id_pagamento'] ?>" class="btn btn-danger">Hamos</a>
            </td>
        </tr>
    <?php } ?>
</table>