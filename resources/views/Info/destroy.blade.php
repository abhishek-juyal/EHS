@extends('base')@section('main')
<div class="row">
   <div class="col-sm-8 offset-sm-2">
      <h1 class="p-3 mb-2 bg-primary text-white" style="
    text-align: center;">AG Digital Health Services - EMR</h1>
    <a class="btn btn-primary" href="{{ route('list') }}">View All</a>
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
         <form method="post" action="{{ route('info') }}">
            @csrf       
             <div class="form-group">                  
                  <label for="id">Id:</label>              
                  <input type="text" class="form-control" name="id"/>         
            </div>  
            <div class="form-group">                  
                  <label for="name">Name:</label>              
                  <input type="text" class="form-control" name="name"/>         
            </div>
            <div class="form-group">              
                  <label for="gender">Gender (M/F):</label>              
                  <input type="text" class="form-control" name="gender"/>          
            </div>
            <div class="form-group">             
                   <label for="member">Member (M)/Non-Member (NM):</label>              
                   <input type="text" class="form-control" name="member"/>          
            </div>
            <div class="form-group" >             
                   <label for="dob" >Date of Birth:</label>              
                   <input type="date" class="input-group date" data-provide="datepicker" name="dob"/>          
            </div>
            <div class="form-group">             
                   <label for="age">Age:</label>              
                   <input type="text" class="form-control" name="age"/>          
            </div>
            <div class="form-group">             
                   <label for="address">Address:</label>              
                   <input type="text" class="form-control " name="address"/>          
            </div>
            <div class="form-group">             
                   <label for="mobile_number">Mobile Number:</label>              
                   <input type="text" class="form-control" name="mobile_number"/>          
            </div>
            <div class="form-group">             
                   <label for="marital_status">Marital Status (M/S/W):</label>              
                   <input type="text" class="form-control" name="marital_status"/>          
            </div>
            <div class="form-group">             
                   <label for="number_of_children">Number of children:</label>              
                   <input type="text" class="form-control" name="number_of_children"/>          
            </div>
            <div class="form-group">             
                   <label for="height">Height (CM):</label>              
                   <input type="text" class="form-control" name="height"/>          
            </div>
            <div class="form-group">             
                   <label for="weight">Weight (KG):</label>              
                   <input type="text" class="form-control" name="weight"/>          
            </div>
            <div class="form-group">             
                   <label for="blood_pressure">Blood Pressure (S/D):</label>              
                   <input type="text" class="form-control" name="blood_pressure"/>          
            </div>
            <div class="form-group">             
                   <label for="is_diabetic">Is Known Diabetic? Yes/No:</label>              
                   <input type="text" class="form-control" name="is_diabetic"/>          
            </div>
            <div class="form-group">             
                   <label for="complain">Major Complain of today:</label>              
                   <input type="text" class="form-control" name="complain"/>          
            </div>
            <div class="form-group">             
                   <label for="obs_medical_assistant">Observation by Medical Assistant:</label>            
                   <input type="text" class="form-control" name="obs_medical_assistant"/>          
            </div>
            <div class="form-group">             
                   <label for="suggestion">Suggestions given:</label>              
                   <input type="text" class="form-control" name="suggestion"/>          
            </div>
            <div class="form-group">             
                   <label for="schedule_vc">Schedule for VC? Yes/No:</label>              
                   <input type="text" class="form-control" name="schedule_vc"/>          
            </div>
            <div class="form-group">             
                   <label for="suggestion_medical_officer">Suggestions from Medical Officer:</label>     
                   <input type="text" class="form-control" name="suggestion_medical_officer"/>          
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Add Information</button>  
            <br><br>    
         </form>
      </div>
   </div>
</div>
@endsection