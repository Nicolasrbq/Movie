<?php
	require_once 'template/header.php';
	$param = $_GET['movie'];
	include_once 'webservice/getMovie.php';
?>

<div id="movieList">
	<label><?php echo $movie['title'] ?></label>
	<label><?php echo $movie['name_gender'] ?></label>
	<label><?php echo $movie['author'] ?></label>
	<label><?php echo $movie['first_name'].' '.$movie['last_name'] ?></label>
	<label><?php echo $movie['description'] ?></label>
</div>	
	
<?php require_once 'template/footer.php';?>