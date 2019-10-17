@extends('layouts.app')

@section('content')
<h1 class="h1-responsive font-weight-bold wow text-center" data-wow-delay="0.3s">Pet Registration</h1>
  <div class="view">
    <!-- Default form register -->
    <form id="registerpet" method="post" action="{{ route('registerpets.store') }}">
    {{csrf_field()}}
      <div class="form-group">
        <div class="card wow fadeInRight" data-wow-delay="0.3s">
          <div class="card-body">
            <!--Header-->
            <div class="text-center">
            <h3 class="white-text">
              <i class="fas fa-user white-text"></i>Register Your Pet</h3>
                <div >
                  @if ($errors->any())
                    <div >
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div>
                  </br>
                  @endif
                  <hr class="hr-light">
                </div>
            </div>
            </br>
            <!--Body-->
            <!-- PetName -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <input type="text" class="form-control" name="pet_name" id="pet_name" placeholder="Pet Name">
            </div>
            </br>
            <!-- Species -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <input type="text" class="form-control" name="species" id="species" placeholder="Species">
            </div>
            </br>
            <!-- Breed -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <input type="text" class="form-control" name="breed" id="breed" placeholder="Breed">
            </div>
            </br>
            <!-- Gender -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender">
            </div>
            </br>
            <!-- PetSize -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <input type="text" class="form-control" name="size" id="size" placeholder="Pet Size">
            </div>
            </br>
            <!-- PetMicroChipNumber -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <input type="text" class="form-control" name="microchip_number" id="microchip_number" placeholder="Pet Microchip Number">
            </div>
            </br>
            <!-- PetRabiesNumber -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <input type="text" class="form-control" name="rabies_number" id="rabies_number" placeholder="Pet Rabies Number">
            </div>
            </br>
            <!-- AdditionalNotes -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <label for="additional_notes" class="active">Additional Notes:</label>
              <textarea type="text" name="additional_notes" id="additional_notes" class="form-control"></textarea>
            </div>
            </br>
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-indigo">Create Advertisement</button>
            </div>
        </div>
      </div>
      </div>
    </form>
    <!--/.Form-->
  </div>
@endsection