@extends('dashboard.layouts.main')

@section('content')
<h1 class="ui header">
Edit Category
</h1>

{{-- <div class="ui grid"> --}}
@include('dashboard.categories.form', compact('model'))
{{-- </div> --}}
@stop
