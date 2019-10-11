@extends('layouts.app')

@section('content')
</br>
<div class="row row-no-gutters">
            <table class="center" class="table table-striped table-light">
                    <tr>
                        <th>Pet Name</th>
                        <th>Species</th>
                        <th>Breed</th>
                        <th>More Details</th>
                    </tr>
                <tbody>
                    @foreach($registerpets as $registerpet)
                    <tr>
                        <td>{{ $registerpet->pet_name }}</td>
                        <td>{{ $registerpet->species }}</td>
                        <td>{{ $registerpet->breed }}</td>
                        <td><a href="{{ route('registerpets.show',$registerpet->id) }}">More Information</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
</br>
            <div class="wrapper">
            <button id="indexpetsbtn" class="btn btn-primary" onclick="window.location='{{ url('registerpets/create') }}'">Register More Pets</button></td>
            </div>


@endsection