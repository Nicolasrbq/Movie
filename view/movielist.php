<?php require_once 'template/header.php';?>
<h1>Liste des films</h1>
<div id="lists">	
<?php foreach ($movies as $movie) {?>
	<div class="elements">
			<h3><a href='index.php?movie=<?php echo $movie['id_movie']?>'><?php echo $movie['title']?></a></h3>
		</div>
<?php }?>
</div>
<?php require_once 'template/footer.php';?>