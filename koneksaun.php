<?php
$koneksaun = mysqli_connect('localhost', 'root', '', 'db_cde');

if (!$koneksaun) {
    echo "Koneksaun Faila";
}
