@extends('layouts.app')

@section('content')
    <div class="card-body">
        <div>
        <div>
            <h1> Registered Pets</h1>
            <table>
                <thead>
                    <tr>
                        <td>Pet Name:</td>
                        <td>Species:</td>
                        <td>Breed:</td>
                        <td>More Details</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registerpets as $registerpet)
                    <tr>
                        <td>{{ $registerpet->pet_name }}</td>
                        <td>{{ $registerpet->species }}</td>
                        <td>{{ $registerpet->breed }}</td>
                        <td><a class="btn btn-primary" href="{{ route('registerpets.show',$registerpet->id) }}">Show More Information</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection