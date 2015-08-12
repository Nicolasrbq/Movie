<?php require_once 'template/header.php';?>
<h1><?php echo $MovieList ?></h1>
	<div id="movieList">	
	<?php foreach ($movies as $movie) {?>
		<div class="movie">
				<label class="title"><a href='index.php?movie=<?php echo $movie['id_movie']?>'><?php echo $movie['title']?></a></label>
				<label class="author"><?php echo $movie['author']?></label>
				<label class="description"><?php echo $movie['description']?></label>
				<label class="gender"><?php echo $movie['name_gender']?></label>
				<label class="year"><?php echo $movie['year']?></label>
			</div>
	<?php }?>
	</div>
<?php require_once 'template/footer.php';?>