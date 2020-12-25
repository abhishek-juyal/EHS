@extends('base')@section('main')
<div class="row">
   <div class="col-sm-8 offset-sm-2">
      <h1 class="p-3 mb-2 bg-primary text-white" style="
    text-align: center;">AG Digital Health Services - EMR</h1>
      <div class="form-group">
         @if ($errors->any())      
         <div class="alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)              
               <li>{{ $error }}</li>
               @endforeach        
            </ul>
         </div>
         <br />    @endif      
         <form method="post" action="{{ route('update',['id'=>$info->id]) }}">
            @csrf       
             <div class="form-group">                  
                  <label for="id">Id:</label>              
                  <input value = "{{$info->id}}" type="text" class="form-control" name="id"/>         
            </div>  
            <div class="form-group">                  
                  <label for="name">Name:</label>              
                  <input value = "{{$info->name}}" type="text" class="form-control" name="name"/>         
            </div>
            <div class="form-group">              
                  <label for="gender">Gender (M/F):</label>              
                  <input value = "{{$info->gender}}" type="text" class="form-control" name="gender"/>          
            </div>
            <div class="form-group">             
                   <label for="member">Member (M)/Non-Member (NM):</label>              
                   <input value = "{{$info->member}}" type="text" class="form-control" name="member"/>          
            </div>
            <div class="form-group" >             
                   <label for="dob" >Date of Birth:</label>              
                   <input value = "2018-07-22" type="date" name="dob"/>          
            </div>
            <div class="form-group">             
                   <label for="age">Age:</label>              
                   <input value = "{{$info->age}}" type="text" class="form-control" name="age"/>          
            </div>
            <div class="form-group">             
                   <label for="address">Address:</label>              
                   <input value = "{{$info->address}}" type="text" class="form-control " name="address"/>          
            </div>
            <div class="form-group">             
                   <label for="mobile_number">Mobile Number:</label>              
                   <input value = "{{$info->mobile_number}}" type="text" class="form-control" name="mobile_number"/>          
            </div>
            <div class="form-group">             
                   <label for="marital_status">Marital Status (M/S/W):</label>              
                   <input value = "{{$info->marital_status}}" type="text" class="form-control" name="marital_status"/>          
            </div>
            <div class="form-group">             
                   <label for="number_of_children">Number of children:</label>              
                   <input value = "{{$info->number_of_children}}" type="text" class="form-control" name="number_of_children"/>          
            </div>
            <div class="form-group">             
                   <label for="height">Height (CM):</label>              
                   <input value = "{{$info->height}}" type="text" class="form-control" name="height"/>          
            </div>
            <div class="form-group">             
                   <label for="weight">Weight (KG):</label>              
                   <input value = "{{$info->weight}}" type="text" class="form-control" name="weight"/>          
            </div>
            <div class="form-group">             
                   <label for="blood_pressure">Blood Pressure (S/D):</label>              
                   <input value = "{{$info->blood_pressure}}" type="text" class="form-control" name="blood_pressure"/>          
            </div>
            <div class="form-group">             
                   <label for="is_diabetic">Is Known Diabetic? Yes/No:</label>              
                   <input value = "{{$info->is_diabetic}}" type="text" class="form-control" name="is_diabetic"/>          
            </div>
            <div class="form-group">             
                   <label for="complain">Major Complain of today:</label>              
                   <input value = "{{$info->complain}}" type="text" class="form-control" name="complain"/>          
            </div>
            <div class="form-group">             
                   <label for="obs_medical_assistant">Observation by Medical Assistant:</label>            
                   <input value = "{{$info->obs_medical_assistant}}" type="text" class="form-control" name="obs_medical_assistant"/>          
            </div>
            <div class="form-group">             
                   <label for="suggestion">Suggestions given:</label>              
                   <input value = "{{$info->suggestion}}" type="text" class="form-control" name="suggestion"/>          
            </div>
            <div class="form-group">             
                   <label for="schedule_vc">Schedule for VC? Yes/No:</label>              
                   <input value = "{{$info->schedule_vc}}" type="text" class="form-control" name="schedule_vc"/>          
            </div>
            <div class="form-group">             
                   <label for="suggestion_medical_officer">Suggestions from Medical Officer:</label>     
                   <input value = "{{$info->suggestion_medical_officer}}" type="text" class="form-control" name="suggestion_medical_officer"/>          
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Update Information</button>  
            <br><br>    
         </form>
      </div>
   </div>
</div>
@endsection