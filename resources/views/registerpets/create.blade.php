@extends('layouts.app')

@section('content')

<div class="card uper">
  <div class="card-header">
    Please Register Your Animal Friend
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('registerpets.store') }}">
      @csrf
          <div class="form-group">
              
              <label for="pet-name">Pet Name</label>
              <input type="text" class="form-control" name="pet_name" id="pet_name" />
          </div>
          <div class="form-group">
              
              <label for="species">Species</label>
              <input type="text" class="form-control" name="species" id="species" />
          </div>
          <div class="form-group">
              
              <label for="breed">Breed</label>
              <input type="text" class="form-control" name="breed" id="breed" />
          </div>
          <div class="form-group">
              
              <label for="gender">Gender</label>
              <input type="text" class="form-control" name="gender" id="gender" />
          </div>
          <div class="form-group">
              
              <label for="size">Pet Size</label>
              <input type="text" class="form-control" name="size" id="size" />
          </div>
          <div class="form-group">
              
              <label for="microchip_number">Pet Microchip Number</label>
              <input type="text" class="form-control" name="microchip_number" id="microchip_number" />
          </div>
          <div class="form-group">
              
              <label for="rabies_number">Pet Rabies Number</label>
              <input type="text" class="form-control" name="rabies_number" id="rabies_number" />
          </div>
          

          <div class="form-group">
              <label for="additional_notes">Additional Notes</label>
              <textarea name="additional_notes" id="additional_notes" class="form-control"></textarea>
              
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection