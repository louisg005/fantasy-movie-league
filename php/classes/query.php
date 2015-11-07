<?php // query.php

$query = "SELECT * FROM movies";

$rows = $query->num_rows;

for ($j = 0; $j < $rows; ++$j)
{
	$query->data_seek($j);
	echo 'Movie Title: ' . $query->fetch_assoc()['movieTitle'];
}

$query->close();

?>