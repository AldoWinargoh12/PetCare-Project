@extends('layouts.app')

@section('content')
<h1>Search for your Ads</h1>

<nav id=adView>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('advertisements') }}'">View Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('createAdvertisement') }}'">Create Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('live_search') }}'">Live Search</button>
        </nav>

<body>
  <br />
  <div class="container box">
   <div class="panel panel-default">
    <div class="panel-heading">Search For Existing Advertisements</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search For Existing Advertisements" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <tbody>

       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_advertisements_data();

 function fetch_advertisements_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_advertisements_data(query);
 });
});
</script>



@endsection