@extends('layout.layout')

@section('content')
<div class="navigation">
	<nav>
		<ul class="nav">
			<li>
				<a href="{{ route('home') }}">Blog</a>
			</li>
			@if (Auth::check())
			<li>
				<a href="{{ route('dashboard') }}">Dashboard</a>
			</li>
			@endif
		</ul>
	</nav>

    </div>
@if($param['path'] == 'index')
@include('blog.main.main')
@elseif($param['path'] == 'view')
@include('blog.main.view')
@endif
@endSection