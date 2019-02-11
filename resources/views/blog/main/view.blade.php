
<article class="full">
	<div class="title">
		<h1>{{ $param['post']->title }}</h1>
	</div>
	<div class="detail">
		<div class="author">
			Author : <span>{{ $param['post']->users->name }}</span>
		</div>
	</div>
	<hr style="border-color: white !important;">
	<div class="content" style="color: white !important;">
		{!! $param['post']->content !!}
	</div>
</article>
