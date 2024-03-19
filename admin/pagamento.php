<h5>Baranda Hili Data Aluno ba Pagamentu</h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>Nu</td>
        <td>EMIS</td>
        <td>Naran</td>
        <td>Klase</td>
        <td>CAP</td>
        <td>Nominal</td>
        <td>Selu ona</td>
        <td>Sei Falta</td>
        <td>Estatus</td>
        <td>History</td>
    </tr>
    <?php
    include '../koneksaun.php';
    $no = 1;
    $sql = "SELECT * FROM aluno,cap,klase WHERE aluno.id_klase=klase.id_klase AND aluno.id_cap=cap.id_cap 
            ORDER BY naran ASC";
    $query = mysqli_query($koneksaun, $sql);
    foreach ($query as $data) {
        $data_pagamento = mysqli_query($koneksaun, "SELECT SUM(total_selu) as total_selu FROM pagamento WHERE emis='$data[emis]'");
        $data_pagamento = mysqli_fetch_array($data_pagamento);
        $selu_ona = $data_pagamento['total_selu'];
        $sei_falta = $data['nominal'] - $data_pagamento['total_selu'];
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['emis'] ?></td>
            <td><?= $data['naran'] ?></td>
            <td><?= $data['naran_klase'] ?></td>
            <td><?= $data['tinan'] ?></td>
            <td><?= $data['nominal'] ?></td>
            <td><?= $selu_ona ?></td>
            <td><?= $sei_falta ?></td>

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
                <a href="?url=history-pagamento&emis=<?= $data['emis']; ?>&id_emis" class="btn btn-info">History</a>
            </td>
        </tr>
    <?php } ?>
</table>