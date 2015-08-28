			<footer>
				<div id="stats">
					<div class="count"> <?php echo $MovieCount ?> : {{ count.movies }}</div>
					<div class="count"> <?php echo $AuthorCount ?> : {{ count.authors }}</div>
					<div class="count"> <?php echo $GenderCount ?> : {{ count.genders }}</div>
					<div class="count"> <?php echo $ActorCount ?> : {{ count.actors }}</div>
				</div>
			</footer>
			
			<script src="libs/jquery-2.1.4.min.js"></script>
			<script src="libs/angular.js"></script>
			<script src="js/Scripts.js"></script>
			<script src="app.js"></script>
			<script src="webservice/moviesFactory.js"></script>
			<script src="controller/mainController.js"></script>
			<script src="directives/movie.js"></script>
			
		</div>
	</body>
</html>