@extends('base')@section('main')
<div class="row">
   <div class="col-sm-8 offset-sm-2">
      <h1 class="p-3 mb-2 bg-primary text-white" style="
    text-align: center;">Thank you for your submission.</h1>
    <a href="{{ route('info') }}"> Submit another.</a>
</div>
@endsection