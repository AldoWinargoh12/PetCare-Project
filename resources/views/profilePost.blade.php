@extends('layouts.app')
@section('content')
<!-- this is a form for allowing users to comment on other users to help with the rating system.-->
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div> Profile Comments</div>
                        <div>
                            <form method="post" action="{{route('profilePost.store') }}">
                                <div>
                                    @csrf
                                    <label>Comment Title</label>
                                    <input type="text" name="titleComment" required>
                                </div>
                                <div>
                                    <label>Comment Body</label>
                                    <textarea rows="5" cols="30" name="body" required></textarea>
                                </div>
                                <div>
                                    <button type="submit">Submit Comment</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>











@endsection