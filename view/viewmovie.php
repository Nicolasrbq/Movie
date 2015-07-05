<?php 
	require_once 'template/header.php';

	echo 'Title:' . $movie['title'] . '<br/>';
	echo 'Author:' . $movie['author'] . '<br/>';
	echo 'Description:' . $movie['description'] . '<br/>';

	require_once 'template/footer.php';
?>