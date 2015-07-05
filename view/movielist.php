<?php require_once 'template/header.php';?>
<h1>Liste des films</h1>
	<div id="movieList">	
	<?php foreach ($movies as $movie) {?>
		<div class="movie">
				<label><a href="index.php?movie='.$movie['id_movie'].'"><?php echo $movie['title']?></a></label>
				<label><?php echo $movie['author']?></label>
				<label><?php echo $movie['description']?></label>
				<label><?php echo $movie['year']?></label>
				<label><?php echo $movie['name_gender']?></label>
			</div>
	<?php }?>
	</div>
<?php require_once 'template/footer.php';?>