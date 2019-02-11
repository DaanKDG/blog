@foreach($param['posts'] as $post)
<article  style="border-radius: 7px;">
	<div class="title">
		<a href="view/{{ $post->id }}">
			<h1 style="color: #F9F8F8 !important;">{{ $post->title }}</h1>
		</a>
	</div>
	<div class="detail">
		<div class="author">
			Author : <span>{{ $post->users->name }}</span>
		</div>
	</div>
	<hr style="border-color: white !important;">
	<div class="content">
		{!! str_limit($post->content, 50) !!}
	</div>
</article>
@endForeach