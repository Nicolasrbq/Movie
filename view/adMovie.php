<?php require_once 'template/header.php';?>
<h1><?php echo $AdMovie ?></h1>
	<div id="adMovie">
		<form>
			<div class="row">
				<div class="large-6 columns">
					<div class="row collapse prefix-radius">
						<div class="large-2 columns">
				          <span class="prefix"><?php echo $Title ?></span>
				        </div>
				        <div class="large-10 columns">
				          <input type="text" placeholder="<?php echo $Title ?>" />
				        </div>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="row collapse prefix-radius">
						<div class="large-3 columns">
				          <span class="prefix"><?php echo $Author ?></span>
				        </div>
				        <div class="large-9 columns">
				          <input type="text" placeholder="<?php echo $Author ?>" />
				        </div>
					</div>
				</div>
				<div class="large-2 columns">
					<div class="row collapse prefix-radius">
						<div class="large-5 columns">
				          <span class="prefix"><?php echo $Year ?></span>
				        </div>
				        <div class="large-7 columns">
							<select>
					          <?php for($i = 2012; $i <= 2020; $i++) {
					          		echo '<option value="'.$i.'">'.$i.'</option>';
					          }?>
					        </select>
				        </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<div class="row collapse prefix-radius">
						<div class="large-2 columns">
				          <span class="prefix"><?php echo $Type ?></span>
				        </div>
				        <div class="large-10 columns">
							<select>
					          <option value="Fantastique">Fantastique</option>
					          <option value="Science-fiction">Science-fiction</option>
					        </select>
				        </div>
					</div>
		        </div>
		        <div class="large-6 columns">
			        <textarea placeholder="<?php echo $Comment ?>"></textarea>
			    </div>
			</div>
		</form>	
	</div>
<?php require_once 'template/footer.php';?>