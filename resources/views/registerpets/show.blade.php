@extends('layouts.app')

@section('content')

<title>Pet Information</title>

</br>
    <div class="row row-no-gutters">
            <table class="center" class="table table-striped table-light">
                    <tr>
                        <th id="cell">Label</th>
                        <th>Content</th>
                    </tr>
                <tbody>
                    <tr>
                        <td id="cell">Pet Name</td>
                        <td id="cell2">{{ $registerpet->pet_name }}</td>
                    </tr>
                    <tr>
                        <td id="cell">Group</td>
                        <td id="cell2">{{ $registerpet->species }}</td>
                    </tr>
                    <tr>
                        <td id="cell">Species/Breed</td>
                        <td id="cell2">{{ $registerpet->breed }}</td>
                    </tr>
                    <tr>
                        <td id="cell">Gender</td>
                        <td id="cell2">{{ $registerpet->gender }}</td>
                    </tr>
                    <tr>
                        <td id="cell">Size</td>
                        <td id="cell2">{{ $registerpet->size }}</td>
                    </tr>
                    <tr>
                        <td id="cell">Microchip Number</td>
                        <td id="cell2">{{ $registerpet->microchip_number }}</td>
                    </tr>
                    <tr>
                        <td id="cell">Rabies Tag No</td>
                        <td id="cell2">{{ $registerpet->rabies_number }}</td>
                    </tr>
                    <tr>
                        <td id="cell">Additional Notes</td>
                        <td id="cell2">{{ $registerpet->additional_notes }}</td>
                    </tr>
                </tbody>
            </table>
</div>
</br>
            <div class="wrapper">
            <button id="indexpetsbtn" class="btn btn-primary" onclick="window.location='{{ url('registerpets') }}'">Back</button></td>
            </div>
@endsection