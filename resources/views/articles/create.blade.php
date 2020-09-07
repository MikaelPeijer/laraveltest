@extends ('layout')

@section ('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
@endsection

@section ('content')

<div id="wrapper">
	<div id="page" class="container"> 
<h1 class="heading has-text-weight-bold is-size-4"> new article</h1>

<form  method="POST"   action="/articles">
@csrf

 <div class="field">
 <tabel class="label"  for="title">title</tabel>

<div class="control">
<input class="input @error('title') is-danger @enderror " 
type="text"
 name="title" 
 id="title"
 value="{{ old('title') }}">

@error ('title')
<p class="help is-danger">{{  $errors->first('title') }}</p>
@enderror

   </div> 
 </div>

 <div class="field">
     <tabel class="label"  for="excerpt">excerpt</tabel>

     <div class="control">
        <textarea class="textarea  @error('title') is-danger @enderror "
          name="excerpt"
           id="excerpt"
           >{{ old('excerpt')}}</textarea>

        
@error ('excerpt')
<p class="help is-danger">{{  $errors->first('excerpt') }}</p>
@enderror

 </div> 
     </div>

 <div class="field">
 <tabel class="label"  for="body">body</tabel>


 <div class="control">
<textarea class="textarea  @error('title') is-danger @enderror "
  name="body" 
  id="body"
  >{{ old('body') }}</textarea>


@error ('body')
<p class="help is-danger">{{  $errors->first('body') }}</p>
@enderror


   </div> 
 </div>
 <div class="field">
 <tabel class="label"  for="body">tags</tabel>


 <div class="control">
<select 
name="tags[]"

multiple
> 

@foreach ($tags as $tag)
<option value="{{ $tag->id }}">{{ $tag->name }}</option>
@endforeach
</select>

@error ('tags')
<p class="help is-danger">{{  $message }}</p>
@enderror


   </div> 
 </div>
 
 

 <div class="field is-grouped">
 <div class="control">
    <button class="button is-link" type="submit">submit</button>

    </div>
    </div>




</form>




		</div>
</div>
@endsection