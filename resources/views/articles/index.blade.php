@extends ('layout')

@section ('content')
<div id="wrapper">
	<div id="page" class="container">
	

	<div class="">
	 <a href="articles/create" class="button is-link"  role="button" aria-pressed="true">create</a>

    
	@forelse ($articles as $article)
		<div id="content">
			<div class="title">
				<h2>
				<a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
				
				</h2>
			{{ $article->body }}
		

        

		</div>
		@empty
		<p> No relevant articles yet<p>
        @endforelse
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
@endsection