@extends('dashboard.layouts.main')

@section('content')

        <div class="content">
            <div class="container-fluid">
				
				<h1 class="ui header">
					Hello Administrator!
				</h1>
				<p>Welcome back to your account dashboard. Check out these performance statistics and personalized tips from Elevate.</p>

				<div class="ui equal width center aligned padded grid">
				  <div class="row">
				    <div class="olive column">
					    <div class="ui statistic">
							  <div class="value">
							    100
							  </div>
							  <div class="label">
							    Post Published
							  </div>
						</div>
				    </div>
				    <div class="black column">
				      	<div class="ui inverted statistic">
						  <div class="value">
						    50
						  </div>
						  <div class="label">
						    Category Created
						  </div>
						</div>
				    </div>
				    <div class="olive column">
						<div class="ui statistic">
							  <div class="value">
							    100
							  </div>
							  <div class="label">
							    Pages Published
							  </div>
						</div>
				    </div>
				    <div class="black column">
						<div class="ui inverted statistic">
							  <div class="value">
							    <img src="http://semantic-ui.com/images/avatar/small/joe.jpg" class="ui circular inline image">
			      				5
							  </div>
							  <div class="label">
							    User Created
							  </div>
						</div>
				    </div>
				  </div>
				</div>

				<div class="ui grid">
					<div class="ten wide computer sixteen wide mobile column">
						<div class="ui segment">
							<h3 class="ui header">Recent Activity</h3>
							<div class="ui feed">
							<?php for ($x = 1; $x <= 3; $x++) { ?>
								  <div class="event">
								    <div class="content">
								      <div class="summary">
								        <a class="user">
								          El Premio Kota Deltamas Cikarang Persembahkan 21 Unit Ruko Terbaik
								        </a> created 
								        <div class="date">
								          Dec 10th 2016
								        </div>
								      </div>
								    </div>
								  </div> <!-- end event -->
								  <div class="ui divider"></div>
								  <div class="event">
								    <div class="content">
								      <div class="summary">
								        <a class="user">
								          Anak Usaha Sinar Mas Perbanyak Kawasan Komersial di Kota Deltamas
								        </a> created 
								        <div class="date">
								          Dec 10th 2016
								        </div>
								      </div>
								    </div>
								  </div> <!-- end event -->
								  <div class="ui divider"></div>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>

            </div>
        </div>

@stop

