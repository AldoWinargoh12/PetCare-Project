@extends('layouts.app')



@section('content')
<h1>Register Pets</h1>
<form method="post" action="PagesController@login">
        @csrf
        <div>
            <label for="pet_name"> Pet Name</label>
            <input type="text" name="pet_name" />
        </div>
        <div>
            <label for="species"> Species</label>
            <input type="text" name="species">
        </div>
        <div>
            <label for="breed"> Breed</label>
            <input type="text" name="breed">
        </div>
        <div>
            <label for="gender"> Gender</label>
            <select>
                <option value="">Please Select</option>
                <option value="male"> Male</option>
                <option value ="female">Female</option>
            </select>
        
            <select>
                <option value="">Please Select</option>
                <option value="mini"> Mini</option>
                <option value ="small">Small</option>
                <option value="medium"> Medium</option>
                <option value ="large">Large</option>
                <option value ="xlarge">Extra Large</option>
            </select>
        </div>
        <div>
            <label name="microchip_number"> Microchip Number</label>
            <input type="number" name="micro_number" />
        </div>
        <div>
            <label name="rabies_number"> Rabies Tag Number</label>
            <input type="number" name="rabies_number" />
        </div>
        <div>
            <label name="additional_notes"> Additional Notes</label>
            <input type="textarea" rows=3 />
        </div>
    </form>   
        
        
@endsection