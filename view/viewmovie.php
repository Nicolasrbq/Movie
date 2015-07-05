<?php require_once 'template/header.php';?>
<h1><?php echo $movie['title']?></h1>
<div id="lists">
	<div class="element">
		<lpabel><span>Author: </span><?php echo $movie['author']?></p>
		<p><span>Description: </span><?php echo $movie['description']?></p><br/>
	</div>
</div>
<?php require_once 'template/footer.php';?>