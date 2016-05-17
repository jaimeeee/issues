@extends('layouts.layout')
@section('content')
  <div role="main" class="main-content">
    <div id="login">
      <div class="login-header">
        <h1>Sign in to Issues</h1>
      </div>
@foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ $error }}
      </div>
@endforeach
      <div class="login-body">
        <form action="{{ url('/login') }}" role="form" method="POST">
          {!! csrf_field() !!}
          <label for="email">Username or email address</label>
          <input autocapitalize="off" autocorrect="off" autofocus="autofocus" class="form-control" id="email" name="email" tabindex="1" type="text" value="{{ old('email') }}">
          <label for="password">Password <a href="{{ url('/password/reset') }}" class="label-link">Forgot password?</a></label>
          <input class="form-control" id="password" name="password" tabindex="2" type="password">
          <input class="btn btn-primary btn-block" data-disable-with="Signing in…" name="submit" tabindex="3" type="submit" value="Sign in">
        </form>
      </div>
    </div>
  </div>
@endsection
