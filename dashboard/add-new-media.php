<?php include 'partials/header.php'; ?>
	<h1 class="ui header">
		Add New Media
	</h1>

	<div class="ui grid">
		<div class="eleven wide computer sixteen wide mobile column">
			<div class="ui huge form">
				<div class="field">
					<input placeholder="Enter title here" type="text">
				</div>
				<div class="ui  form">
				  <div class="field">
				  	<label for="">Permalink:</label>
				    <input type="text" value="http://localhost/elevate-dashboard/add-new.php">
				  </div>

				  <div class="field">
				  	<input type="file">
				  </div>
				  <br>
				</div>
			</div>
		</div>

		<div class="five wide computer sixteen wide mobile column">
			<div class="ui card">
			  <div class="content">
			    <div class="header">Publish</div>
			  </div>
			  <div class="content">
			    <div class="ui small feed">
			      <div class="event">
					  <i class="pin icon"></i>
					  <div class="content">
					    Status
					    <div class="ui inline dropdown">
					      <div class="text">Draft</div>
					      <i class="dropdown icon"></i>
					      <div class="menu">
					      	<div class="active item" data-text="draft">Draft</div>
					        <div class="item" data-text="published">Published</div>
					        
					      </div>
					    </div>
					  </div>
			      </div>
			      <div class="event">
					  <i class="calendar icon"></i>
					  <div class="content">
					    Published on: 
					    <div class="clearfix" style="margin-top: 10px;"></div>
					  	<div class="ui  form">
  							<div class="three fields">
  								<div class="field">
  									<select name="" id="">
  										<option value="">Date</option>
  									</select>
  								</div>
  								<div class="field">
  									<select name="" id="">
  										<option value="">Month</option>
  									</select>
  								</div>
  								<div class="field">
  									<select name="" id="">
  										<option value="">Year</option>
  									</select>
  								</div>
  							</div>
  						</div>
					  </div>
			      </div>
			    </div>
			  </div>
			 
			 <div class="extra content">
			    <div class="fluid ui buttons">
				  <button class="ui button">Delete</button>
				  <div class="or"></div>
				  <button class="ui primary button">Publish</button>
				</div>
			</div>
			</div> <!-- end ui card -->

		</div>
	</div>
<?php include 'partials/footer.php'; ?>