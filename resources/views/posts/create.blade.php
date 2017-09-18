@extends('master')


@section('content')

<h3>Crie um post</h3>

<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="titleInput" aria-describedby="titleHelp" placeholder="Enter title">
        <small id="titleHelp" class="form-text text-muted">You need to put a title here.</small>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="bodyInput" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
    </div>


    @include('components.errors')

</form>



@endsection
