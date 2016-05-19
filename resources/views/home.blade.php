@extends('layouts.layout')
@section('content')
  <div role="main" class="main-content">
    <div class="container">
      <div class="content-list">
	  	
		<div class="pagehead explore-head">		
			<h1>
				<a class="pagehead-heading" href="/explore">Explore projects</a>
			</h1>
		</div>
		<div class="sort-bar">
			<form accept-charset="UTF-8" method="get">
				<input type="text" name="q" value="" class="form-control" placeholder="Search organization's" aria-label="Search organization's" autocapitalize="off" autocomplete="off" />
			</form>
		</div>
          <ul class="list">
		  	<?php foreach($organizations as $organization): ?>
			<li class="list-item">
			
				<h3 class="list-name">
					<a href="{{ url(strtolower(str_slug($organization->name))) }}"><span class="prefix">{{ $organization->company }}</span></a>
				</h3>
			
				<p class="repo-list-description">{{ $organization->description }}</p>
			
			<p class="repo-list-meta">{{ $organization->created_at }}</p>
			</li>
			<?php endforeach ?>
          </ul>
      </div>
    </div>
  </div>
@endsection
