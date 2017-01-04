<?php include 'partials/header.php'; ?>
	<h1 class="ui header">
		Add New User
	</h1>

	<div class="ui grid">
		<div class="six wide computer sixteen wide mobile column">
			<form class="ui form">
			  <div class="field">
			    <label>Username</label>
			    <input type="text" name="username">
			  </div>

			  <div class="field">
			    <label>Email</label>
			    <input type="email" name="email">
			  </div>

			  <div class="field">
			    <label>First Name</label>
			    <input type="text" name="first-name">
			  </div>

			  <div class="field">
			    <label>Last Name</label>
			    <input type="text" name="last-name">
			  </div>

			  <div class="field">
			    <label>Password</label>
			    <input type="password" name="password">
			  </div>

			  <div class="field">
			    <label>Confirm Password</label>
			    <input type="password" name="conf-password">
			  </div>

			  <div class="field">
			  	<input type="submit" class="ui primary submit button" value="Submit">
			  </div>
			</form>
		</div>
	</div>
<?php include 'partials/footer.php'; ?>