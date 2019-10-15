@extends('layouts.app')

@section('content')

<div class="bg-transparent">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">First Rule</h1>
        <p id="abouttext" class="lead mb-0">One must place their advertisement in the correct category, an advertisement for dogs must be placed in the dog category
      while an advertisement for cockatoo must be placed in the bird category.</p>
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="/storage/img/rules1.jpeg"></div>
    </div>
  </div>
</div>
<div class="bg-transparent">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
    <div class="col-lg-6 d-none d-lg-block"><img id="rule2" src="/storage/img/rules2.jpg"></div>
      <div class="col-lg-6">
        <h1 id="abouttextr" class="display-4">Second Rule</h1>
        <p id="abouttextr" class="lead mb-0">Advertisement that contained more than one type of animals are permitted to place the ad in multiple category as long as it
      fits the description.</p>
        </p>
      </div>
      
    </div>
  </div>
</div>
      <<div class="bg-transparent">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">Third Rule</h1>
        <p id="abouttext" class="lead mb-0">Every advertisement are subject revision by the staff, any innapropriate advertisement will be handled thoroughly.</p>
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="/storage/img/fakeadsicon.jpg"></div>
    </div>
  </div>
</div>

@endsection