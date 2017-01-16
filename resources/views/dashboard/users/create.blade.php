@extends('dashboard.layouts.main')
@section('content')
  <h1 class="ui header">
  Add New User
  </h1>
  <div class="ui grid">
    <div class="six wide computer sixteen wide mobile column">
    {!! Form::open([
        'class' => 'ui form',
        'url' => route('backend.users.store')
    ]) !!}
    {{-- <form class="ui form"> --}}
        <div class="field">
          <label>Username</label>
          {{-- <input type="text" name="username"> --}}
          {!! Form::text('username', null, []) !!}
        </div>
        <div class="field">
          <label>Email</label>
          {{-- <input type="email" name="email"> --}}
          {!! Form::email('email') !!}
        </div>
        <div class="field">
          <label>First Name</label>
          {{-- <input type="text" name="first-name"> --}}
          {!! Form::text('first_name') !!}
        </div>
        <div class="field">
          <label>Last Name</label>
          {{-- <input type="text" name="last-name"> --}}
          {!! Form::text('last_name') !!}
        </div>
        <div class="field">
          <label>Password</label>
          {{-- <input type="password" name="password"> --}}
          {!! Form::password('password') !!}
        </div>
        <div class="field">
          <label>Confirm Password</label>
          {{-- <input type="password" name="conf-password"> --}}
          {!! Form::password('confirm_password') !!}
        </div>
        <div class="field">
          <input type="submit" class="ui primary submit button" value="Submit">
        </div>
      {{-- </form> --}}
        {!! Form::close() !!}
    </div>
  </div>
@stop