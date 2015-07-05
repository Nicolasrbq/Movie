<?php require_once 'template/header.php';?>
<h1>Liste des auteurs</h1>
	<div id="lists">	
	<?php foreach ($authors as $author) {?>
		<div class="element">
				<h4><a href='author.php?author=<?php echo $author['id_author']?>'><?php echo $author['author']?></a></h4>
			</div>
	<?php }?>
	</div>
<?php require_once 'template/footer.php';?>