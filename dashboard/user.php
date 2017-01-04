<?php include 'partials/header.php'; ?>
	<h1 class="ui header">
		Users
		<a class="ui primary tiny button add-new-button">
	  		Add New
		</a>
	</h1>
	
	<div class="content">
		<div class="ui form">
		  <div class="fields">
		  	 <div class="field">
		      <select class="ui dropdown">
				  <option value="">Bulk Action</option>
				  <option value="1">Delete</option>
				</select>
		    </div>
		  </div>
		</div>
	</div>

	<table class="ui table">
	  <thead class="full-width">
	    <tr>
	      <th class="one wide">
	      	 <div class="ui fitted slider checkbox">
	          <input type="checkbox"> <label></label>
	        </div>
	      </th>
	      <th class="seven wide">Username</th>
	      <th class="two wide">Name</th>
	      <th class="two wide">Email</th>
	      <th class="two wide">Posts</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php for ($x = 1; $x <= 5; $x++) { ?>
		    <tr>
		      <td class="collapsing">
		        <div class="ui fitted slider checkbox">
		          <input type="checkbox"> <label></label>
		        </div>
		      </td>
		      <td>
		      	<strong><a href="Edit">administrator</a></strong>
				<div class="ui text menu post-edit">
					  <a class="item">
					    Edit
					  </a>
					  <a class="item">
					    Delete
					  </a>
					  <a class="item">
					    View
					  </a>
				</div>
		      </td>
		      <td>Administrator</td>
		      <td>dharma@definite.co.id</td>
		      <td><a href="">20</a></td>
		    </tr>
	    <?php } ?>
	  </tbody>
	</table>

	<div class="clearfix">
		<div class="ui right floated pagination menu">
	        <a class="icon item">
	          <i class="left chevron icon"></i>
	        </a>
	        <a class="item">1</a>
	        <a class="item">2</a>
	        <a class="item">3</a>
	        <a class="item">4</a>
	        <a class="icon item">
	          <i class="right chevron icon"></i>
	        </a>
	     </div>
     </div>
<?php include 'partials/footer.php'; ?>