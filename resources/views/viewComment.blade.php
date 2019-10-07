@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @foreach($viewPosts as $profilePost)
                <tr>
                    <td>{{ $profilePost->id }}</td>
                    <td>{{ profilePost->title }}</td>
                    <td>
                        <a href="{{ route('profilePost.view','$profilePost->id')}}">SHOW COMMENTS</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection