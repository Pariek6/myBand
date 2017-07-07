<?php

$query = "SELECT * FROM articles
ORDER BY id ASC
LIMIT $limit_starting_number, $results_per_page";

$result = mysqli_query($mysqli,$query) or die ('Error Querying');

while($item = $result->fetch_assoc()) {
     $result_list[] = $item;
 }
