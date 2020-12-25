<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class InformationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'id' => 'required|numeric',
          'name' => 'required',
          'gender' => 'in:M,F',
          'member' => 'in:M,NM',
          'dob' => 'date_format:Y-m-d',
          'age' => 'required|numeric',
          'address' => 'required',
          'mobile_number' => 'required|numeric|digits:10',
          'marital_status' => 'in:M,S,W',
          'number_of_children' => 'required',
          'height' => 'required',
          'weight' => 'required|numeric',
          'blood_pressure' => 'in:S,D',
          'is_diabetic' => 'in:Yes,No',
          'complain' => 'required',
          'is_diabetic' => 'required',
          'obs_medical_assistant' => 'required',
          'suggestion' => 'required',
          'is_diabetic' => 'required',
          'schedule_vc' => 'required',
          'suggestion_medical_officer' => 'required',
      ]);
      $info = new Information();
      $info->input_id = $request->id;
      $info->name = $request->name;
      $info->gender = $request->gender;
      $info->member = $request->member;
      $info->dob = $request->dob;
      $info->age = $request->age;
      $info->address = $request->address;
      $info->mobile_number = $request->mobile_number;
      $info->marital_status = $request->marital_status;
      $info->number_of_children = $request->number_of_children;
      $info->height = $request->height;
      $info->weight = $request->weight;
      $info->blood_pressure = $request->blood_pressure;
      $info->is_diabetic = $request->is_diabetic;
      $info->complain = $request->complain;
      $info->obs_medical_assistant = $request->obs_medical_assistant;
      $info->suggestion = $request->suggestion;
      $info->schedule_vc = $request->schedule_vc;
      $info->suggestion_medical_officer = $request->suggestion_medical_officer;
      $info->save();
      return view('thank')->with('success', 'Contact saved!');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $infos = Information::all();
      return view('list', compact('infos'));    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Information::findOrFail($id);
        return view('edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $updateData = $request->validate([
          'id' => 'required|numeric',
          'name' => 'required',
          'gender' => 'in:M,F',
          'member' => 'in:M,NM',
          'dob' => 'date_format:Y-m-d',
          'age' => 'required|numeric',
          'address' => 'required',
          'mobile_number' => 'required|numeric|digits:10',
          'marital_status' => 'in:M,S,W',
          'number_of_children' => 'required',
          'height' => 'required',
          'weight' => 'required|numeric',
          'blood_pressure' => 'in:S,D',
          'is_diabetic' => 'in:Yes,No',
          'complain' => 'required',
          'is_diabetic' => 'required',
          'obs_medical_assistant' => 'required',
          'suggestion' => 'required',
          'is_diabetic' => 'required',
          'schedule_vc' => 'required',
          'suggestion_medical_officer' => 'required',
      ]);
      Information::whereId($id)->update($updateData);
      return view('thank')->with('Information saved!', 'Information has been updated');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $info = Information::findOrFail($id);
      $info->delete();
      return view('thank')->with('completed', 'Information has been deleted');   
    }
}
