<?php

include 'conect.php';

$query_select = "SELECT u.id_user, u.name, u.discipline, u.discipline_type, c.code, c.countryname FROM `users` AS u, `country` AS c WHERE u.citizenship = c.id_country";
$run_query = mysqli_query($conection, $query_select);
$i = 0;