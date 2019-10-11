@extends('layouts.app')

@section('content')

<title>Your Comment</title>

</br>
    <div class="row row-no-gutters">
            <table class="center" class="table table-striped table-light">
                    <tr>
                        <th id="cell3">Title</th>
                        <th>Comment Description</th>
                    </tr>
                <tbody>
                    <tr>
                        <td id="cell3">{{ $post->title }}</td>
                        <td id="cell4">{{ $post->body }}</td>
                    </tr>
                </tbody>
            </table>
</div>
</br>
            <div class="wrapper">
            <button id="indexpetsbtn" class="btn btn-primary" onclick="window.location='{{ url('posts') }}'">Back</button></td>
            </div>
@endsection