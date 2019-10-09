@extends('layouts.app')

@section('content')

  <div >
    <div >
      View Pet Information
      <a class="btn btn-primary" href="{{ route('registerpets.index') }}"> Back</a>
    </div>
    <div>
      <div>
        <div>
          <div>
            <strong>Pet Name</strong>
              {{ $registerpet->pet_name }}
          </div>
        </div>
        <div>
          <div>
            <strong>Species:</strong>
              {{ $registerpet->species }}
          </div>
        </div>
        <div>
          <div>
            <strong>Breed:</strong>
              {{ $registerpet->breed }}
          </div>
        </div>
        <div>
          <div>
            <strong>Gender:</strong>
              {{ $registerpet->gender }}
          </div>
        </div>
        <div>
          <div>
            <strong>Size:</strong>
              {{ $registerpet->size }}
          </div>
        </div>
        <div>
          <div>
            <strong>Microchip Number:</strong>
              {{ $registerpet->microchip_number }}
          </div>
        </div>
        <div>
          <div>
            <strong>Rabies Tag Number :</strong>
              {{ $registerpet->rabies_number }}
          </div>
        </div>
        div>
          <div>
            <strong>Additional Notes :</strong>
              {{ $registerpet->additional_notes }}
          </div>
        </div>

      </div>
      
    </div>
  </div>
@endsection