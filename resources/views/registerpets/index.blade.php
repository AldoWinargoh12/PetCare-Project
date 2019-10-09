@extends('layouts.app')

@section('content')
<h1> Registered Pets</h1>

<nav id=adView>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('registerpets') }}'"> Pets</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('posts') }}'">Comments</button>
      </nav>

    <div class="card-body">
        <div>
        <div>
            <table class="table table-striped table-light">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Pet Name:</th>
                        <th scope="col">Species:</th>
                        <th scope="col">Breed:</th>
                        <th scope="col">More Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registerpets as $registerpet)
                    <tr>
                        <td>{{ $registerpet->pet_name }}</td>
                        <td>{{ $registerpet->species }}</td>
                        <td>{{ $registerpet->breed }}</td>
                        <td><a class="btn btn-primary btn-block" href="{{ route('registerpets.show',$registerpet->id) }}">Show More Information</a></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn btn-secondary btn-block" onclick="window.location='{{ url('registerpets/create') }}'">Register More Pets</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

</br>

@endsection