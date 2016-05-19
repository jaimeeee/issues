@extends('layouts.layout')
@section('content')
  <div role="main" class="main-content">
    <div class="container">
      <div class="content-slim">
        <form action="{{ url('/organization/new') }}" method="post">
          {{ csrf_field() }}
          <div class="subheader">
            <h2>Create an organization</h2>
            <p>An organization will have many projects.</p>
          </div>
          <div class="form-group clear{{ $errors->has('name') ? ' has-error' : null }}">
            <label class="control-label" for="name">Organization name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
          </div>
          <div class="form-group clear{{ $errors->has('company') ? ' has-error' : null }}">
            <label class="control-label" for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}">
          </div>
          <div class="form-group clear{{ $errors->has('website') ? ' has-error' : null }}">
            <label class="control-label" for="website">Website</label>
            <input type="text" class="form-control" id="website" name="website" value="{{ old('website') }}">
          </div>
          <div class="form-group clear{{ $errors->has('location') ? ' has-error' : null }}">
            <label class="control-label" for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
          </div>
          <div class="form-group clear{{ $errors->has('description') ? ' has-error' : null }}">
            <label class="control-label" for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
          </div>
          <hr />
          <button type="submit" class="btn btn-primary"><strong>Create organization</strong></button>
        </form>
      </div>
    </div>
  </div>
@endsection
