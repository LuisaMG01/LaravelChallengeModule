@extends('layouts.app')

@section('title', 'Home Page - Online Store')

@section('content')
<div class="row">
    <div class="col-md-6 text-center">
        <div class="my-4">
            <h3><strong>CREATE A CHALLENGE</strong></h3>
        </div>
        <!-- Embedding a GIF -->
        <iframe src="https://giphy.com/embed/3oriNXgmyShWPjuaFa" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
        <p><a href="https://giphy.com/gifs/vintage-halloween-creepy-3oriNXgmyShWPjuaFa"></a></p>
        <!-- Link to create a challenge -->
        <a href="{{ route('challenge.create_challenge') }}" class="button">Create</a>
    </div>
    <div class="col-md-6 text-center">
        <div class="my-4">
            <h3><strong>LIST CHALLENGES</strong></h3>
        </div>
        <!-- Embedding another GIF -->
        <iframe src="https://giphy.com/embed/BMnetD3JsbEZwcJSsz" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
        <p><a href="https://giphy.com/gifs/root-rootbeverages-drinkroot-BMnetD3JsbEZwcJSsz"></a></p>
        <!-- Link to list challenges -->
        <a href="{{ route('challenge.index_challenge') }}" class="button">Challenges</a>
    </div>
</div>
@endsection
