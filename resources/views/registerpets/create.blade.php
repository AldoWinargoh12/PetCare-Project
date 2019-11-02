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
              <label for="pet_name" class="active">Pet Name:</label>
              <input type="text" class="form-control" name="pet_name" id="pet_name" placeholder="Pet Name" value="{{ old('pet_name') }}">
            </div>
            </br>
            <!-- Species -->
            <div class="form-group">
            <label for="group" class="active">Select Animal Group:</label>
              <select name="group" id="group" class="form-control input-lg dynamic" data-dependent="species">
              <option value="">Select Group</option>
              @foreach($animals as $animals)
              <option value="{{ $animals->group}}">{{ $animals->group }}</option>
              @endforeach
              </select>
            </div>
            <div class="form-group">
            <label for="species" class="active">Pet Species:</label>
              <select name="species" id="species" class="form-control input-lg dynamic" data-dependent="size">
              </select>
            </div>
            <div class="form-group">
            <label for="size" class="active">Pet Size:</label>
              <select name="size" id="size" class="form-control input-lg">
              </select>
            </div>
            {{ csrf_field() }}
           
            <!-- Gender -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <label for="gender" class="active">Gender:</label>
              <select class="form-control" name="gender" id="gender">
              <option>Male</option>
              <option>Female</option>
              <option>Unknown</option>
            </select>
            </div>
            </br>
            <!-- PetMicroChipNumber -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <label for="microchip_number" class="active">Microchip Number:</label>
              <input type="text" class="form-control" name="microchip_number" id="microchip_number" placeholder="Pet Microchip Number" value="{{ old('microchip_number') }}">
            </div>
            </br>
            <!-- PetRabiesNumber -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <label for="rabies_number" class="active">Rabies Number:</label>
              <input type="text" class="form-control" name="rabies_number" id="rabies_number" placeholder="Pet Rabies Number" value="{{ old('rabies_number') }}">
            </div>
            </br>
            <!-- AdditionalNotes -->
            <div class="md-form">
              <i class="fas fa-envelope prefix white-text active"></i>
              <label for="additional_notes" class="active">Additional Notes:</label>
              <textarea type="text" name="additional_notes" id="additional_notes" class="form-control" value="{{ old('additional_notes') }}"></textarea>
            </div>
            </br>
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-indigo">Add Pets</button>
            </div>
        </div>
      </div>
      </div>
    </form>
    <!--/.Form-->
  </div>

  <script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('selectpettype.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#group').change(function(){
  $('#species').val('');
  $('#size').val('');
 });

 $('#species').change(function(){
  $('#size').val('');
 });
 

});
</script>
 
@endsection