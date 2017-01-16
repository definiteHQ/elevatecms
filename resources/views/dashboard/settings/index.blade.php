@extends('dashboard.layouts.main')
@section('content')
  <h1 class="ui header">
    General Settings
  </h1>

  @include('dashboard.settings.form', compact('settings'))
@stop