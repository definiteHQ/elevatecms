@extends('dashboard.layouts.main')
@section('content')
	<h1 class="ui header">
	Media Gallery
	<a href="{{ route('backend.media.create') }}" class="ui primary tiny button add-new-button">
		Add New
	</a>
	</h1>
	<div class="ui text menu">
		<a class="item active">
			All <div class="ui small teal label">155</div>
		</a>
		<a class="item">
			Trash <div class="ui small label">0</div>
		</a>
	</div>
	<div class="content">
		<div class="ui form">
			<div class="fields">
				<div class="field">
					<select class="ui dropdown">
						<option value="">Bulk Action</option>
						<option value="1">Delete</option>
					</select>
				</div>
				<div class="field">
					<div class="ui calendar" id="sort-calendar">
						<div class="ui input left icon">
							<i class="calendar icon"></i>
							<input type="text" placeholder="All Dates">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="ui calendar" id="sort-calendar">
						<input type="search" placeholder="Search Media">
					</div>
				</div>
				<div class="field">
					<select class="ui dropdown">
						<option value="">Show Posts</option>
						<option value="10">10</option>
						<option value="10">20</option>
						<option value="10">50</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<br>

	<div class="ui grid media">
		<?php for ($x = 1; $x <= 32; $x++) { ?>
		<div class="two wide column">
			<img src="http://placehold.it/300x300">
			<div class="ui fitted checkbox">
				<input type="checkbox">
				<label></label>
			</div>
		</div>
		<?php } ?>
	</div>
	<br>
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
@stop