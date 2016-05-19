@extends('layouts.layout')
@section('content')
  <div role="main" class="main-content">
    <div class="container">
      <div class="content-slim">
        <form action="{{ url('/new') }}" method="post">
          {{ csrf_field() }}
          <div class="subheader">
            <h2>Create a new project</h2>
            <p>A project that belongs to an organization where the users can create issues.</p>
          </div>
          <div class="project-fields">
            <dl class="form-group left">
              <dt>
                <label for="organization">Organization</label>
              </dt>
              <dd>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                  </ul>
                </div>
              </dd>
            </dl>
            <span class="separator slash">/</span>
            <dl class="form-group left">
              <dt>
                <label for="name">Project name</label>
              </dt>
              <dd>
                <input type="text" class="form-control short" id="name" name="name" size="100" tabindex="2">
              </dd>
            </dl>
          </div>
          <div class="form-group clear">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <hr />
          <button type="submit" class="btn btn-primary"><strong>Create project</strong></button>
        </form>
      </div>
    </div>
  </div>
@endsection
