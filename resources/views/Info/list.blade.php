@extends('base')@section('main')
<div class="row">
   <div class="col-sm-8 offset-sm-2">
      <h1 class="p-3 mb-2 bg-primary text-white" style="
    text-align: center;">AG Digital Health Services - EMR</h1>
     <a class="btn btn-primary" href="{{ route('info') }}">New Submission</a><br><br/>
          <div class="push-top">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div><br />
        @endif
        
      <div>
   </div>
</div></div>

<div style="overflow-x: scroll;"">
    <table class="table table-striped" style="width: 100%;border-collapse: collapse;" >
          <thead class="thread-dark" style="white-space: nowrap;">
              <tr>
                 <th scope="col"> ID</th>
                <th scope="col"> Name</th>
                <th scope="col"> Gender</th>
                <th scope="col"> Member</th>
                <th scope="col"> DOB</th>
                <th scope="col"> Age</th>
                <th scope="col"> Address</th>
                <th scope="col"> Mobile Number</th>
                <th scope="col"> Marital Status</th>
                <th scope="col"> Number of Children</th>
                <th scope="col"> Height</th>
                <th scope="col"> Weight</th>
                <th scope="col"> Blood Pressure</th>
                <th scope="col"> Is Known Diabetic</th>
                <th scope="col"> Major Complain of today</th>
                <th scope="col"> Observation by Medical Assistant</th>
                <th scope="col"> Suggestion given</th>
                <th scope="col"> Schedule for VC</th>
                <th scope="col"> Suggestion from medical officer</th>
                <th class="text-center">Action</th>
              </tr>
          </thead>
          <tbody style="white-space: nowrap;">
              @foreach($infos as $info)
              <tr>
                  <td> {{$info->id}}</td>
                  <td> {{$info->name}}</td>
                  <td> {{$info->gender}}</td>
                  <td> {{$info->member}}</td>
                  <td> {{$info->dob}}</td>
                  <td> {{$info->age}}</td>
                  <td> {{$info->address}}</td>
                  <td> {{$info->mobile_number}}</td>
                  <td> {{$info->marital_status}}</td>
                  <td> {{$info->number_of_children}}</td>
                  <td> {{$info->height}}</td>
                  <td> {{$info->weight}}</td>
                  <td> {{$info->blood_pressure}}</td>
                  <td> {{$info->is_diabetic}}</td>
                  <td> {{$info->complain}}</td>
                  <td> {{$info->obs_medical_assistant}}</td>
                  <td> {{$info->suggestion}}</td>
                  <td> {{$info->schedule_vc}}</td>
                  <td> {{$info->suggestion_medical_officer}}</td>
                  <td class="text-center">
                      <a href="{{ route('edit', $info->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                      <form action="{{ route('destroy', $info->id)}}" method="post" style="display: inline-block">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
</div>
@endsection