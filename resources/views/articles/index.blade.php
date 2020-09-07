@extends ('layout')

@section ('content')
<div id="wrapper">
	<div id="page" class="container">
	<button> <a href="articles/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">create</a></button>
    @forelse ($articles as $article)
		<div id="content">
			<div class="title">
				<h2>{{ $article->title }}</h2>
			{{ $article->body }}
		

        

		</div>
		@empty
		<p> No relevant articles yet<p>
        @endforelse
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
@endsection