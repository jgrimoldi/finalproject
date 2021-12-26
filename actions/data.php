<?php

include 'conect.php';

$query_select = "SELECT `id_user`, `name`, `citizenship`, `discipline`, `discipline_type` FROM `users`";
$run_query = mysqli_query($conection, $query_select);
$i = 0;

?>