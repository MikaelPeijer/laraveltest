@extends ('layout')

@section ('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
	
	<div class="knop">
	 <a href="/articles/{{ $article->id }}/edit"  class="button is-link" aria-pressed="true">edit</a>
</div>
			<div class="title">
				<h2>{{ $article->title }}</h2>
				<h4>{{ $article->excerpt }}</h4>
			
		<p>	{{ $article->body }}</p>
		</div>
		<pstyle="margin-top 1em"> 
		@foreach ($article->tags as $tag)
		<a href="/articles?tag={{$tag->name}}">{{ $tag->name }}</a>
		@endforeach

		</p>

<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
@endsection