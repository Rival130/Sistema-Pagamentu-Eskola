<?php
$id_pagamento = $_GET['id_pagamento'];

include '../koneksaun.php';
$sql = "DELETE FROM pagamento WHERE id_pagamento='$id_pagamento'";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    echo "<script>window.history.go(-1);</script>";
} else {
    echo "<script>alert('Deskulpa Data Labele Hamos'); window.history.go(-1);</script>";
}
