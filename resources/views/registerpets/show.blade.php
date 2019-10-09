@extends('layouts.app')

@section('content')

  <div >
    <div >
      <h1>View Pet Information</h1>
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
                        <th scope="col">Pet Name</th>
                        <td>{{ $registerpet->pet_name }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Species</th>
                        <td>{{ $registerpet->species }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Breed</th>
                        <td>{{ $registerpet->breed }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Gender</th>
                        <td>{{ $registerpet->gender }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Size</th>
                        <td>{{ $registerpet->size }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Microchip Number</th>
                        <td>{{ $registerpet->microchip_number }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Rabies Tag No</th>
                        <td>{{ $registerpet->rabies_number }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Additional Notes</th>
                        <td>{{ $registerpet->additional_notes }}</td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary btn-block" href="{{ route('registerpets.index') }}"> Back</a>
</div>
@endsection