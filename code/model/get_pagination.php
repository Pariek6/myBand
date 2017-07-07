<?php
// Dit zijn het aantal items per pagina:
$results_per_page = 5;

// Berekening van het aantal pagina's
$query = "SELECT * FROM articles";
$result = mysqli_query($mysqli,$query) or die ('Error querying');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);


// Check je huidige pagina:
!isset($_GET['pnum']) ? $page = 1 : $page = $_GET['pnum'];


// Hiermee bepaal je je eerste item van je query
$limit_starting_number = ($page - 1) * $results_per_page;
