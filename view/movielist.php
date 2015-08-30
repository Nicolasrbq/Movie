<?php require_once 'template/header.php';?>
<h1><?php echo $MovieList ?></h1>
	<div id="movieList">	
	
		<div ng-repeat="list in movieList" class="movie">
			<label class="title"><a ng-href='index.php?movie={{ list.id_movie }}'>{{ list.title }}</a></label>
			<label class="author">{{ list.author }}</label>
			<label class="description">{{ list.description }}</label>
			<label class="gender">{{ list.name_gender }}</label>
			<label class="year">{{ list.year }}</label>
		</div>
	
	</div>
<?php require_once 'template/footer.php';?>