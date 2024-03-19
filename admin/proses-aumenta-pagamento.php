<?php
$id_staf = $_SESSION['id_staf'];
$emis =  $_POST['emis'];
$data_pagamento =  $_POST['data_pagamento'];
$fulan_selu =  $_POST['fulan_selu'];
$tinan_selu =  $_POST['tinan_selu'];
$id_cap = $_POST['id_cap'];
$total_selu = $_POST['total_selu'];


include '../koneksaun.php';
$sql = "INSERT INTO pagamento(id_staf, emis, data_pagamento, fulan_selu, tinan_selu, id_cap, total_selu) 
        VALUES('$id_staf','$emis','$data_pagamento','$fulan_selu','$tinan_selu','$id_cap','$total_selu')";
$query = mysqli_query($koneksaun, $sql);
if ($query) {
    header("Location:?url=pagamento");
} else {
    echo "<script>alert('Deskulpa Data Labele Rai'); window.location.assing('?url=pagamento');</script>";
}
