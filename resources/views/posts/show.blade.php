@extends('layouts.app')

@section('content')


  <div >
    <div >
      <h1>Comment Information</h1>

    </div>
    <div>

<div id=createAd>  
  <table class="table table-striped table-light table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Label</th>
                        <th scope="col">Content</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Title</th>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Comment</th>
                        <td>{{ $post->body }}</td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary btn-block" href="{{ route('posts.index') }}"> Back</a>
</div>
@endsection