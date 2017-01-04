<?php include 'partials/header.php'; ?>
	<h1 class="ui header">
		General Settings
	</h1>

	<form class="ui grid form">
		<div class="six wide computer sixteen wide mobile column">
			  <div class="field">
			    <label>Site Title</label>
			    <input type="text" name="site-name" value="Elevate">
			  </div>

			  <div class="field">
			    <label>Site Tagline</label>
			    <input type="text" name="site-tagline" value="Content Management System">
			  </div>

			  <div class="field">
			    <label>Site Description</label>
			    <textarea name="" id=""></textarea>
			  </div>
		</div>

		<div class="six wide computer sixteen wide mobile column">
			  <div class="field">
			    <label>Site Logo</label>
			    <input type="file">
			  </div>

			  <div class="field">
			    <label>Site Default Image</label>
			    <input type="file">
			  </div>

			  <div class="field">
			    <label>Google Anlytics Code</label>
			    <input type="text" placeholder="UA-XXXXX-Y">
			  </div>

			  <div class="field">
			    <label>Admin Email</label>
			    <input type="email" name="email" value="dharma@definite.co.id">
			  </div>

			  <div class="field">
			  	<input type="submit" class="ui primary submit button" value="Submit">
			  </div>
		</div>
	</form>
<?php include 'partials/footer.php'; ?>