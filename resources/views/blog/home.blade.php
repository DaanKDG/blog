@extends('layout.layout')

@section('content')
<div class="navigation">
	<nav>
		<ul class="nav">
			<li>
				<a href="{{ route('home') }}">Daan Boschmans</a>
			</li>
			@if (Auth::check())
			<li>
				<a href="{{ route('dashboard') }}">Dashboard</a>
			</li>
			@endif
		</ul>
	</nav>
	</div>
	<div class="jumbotron text-center">
		<h1 class="text-center" style="font-weight: bold;"> Take the Lead</h1>
		<small class="text-center m-0" style="font-weight: bold; "> Startdag: 04/02/2019</small>
	</div>
@if($param['path'] == 'index')
@include('blog.main.main')
@elseif($param['path'] == 'view')
@include('blog.main.view')
@endif
@endSection