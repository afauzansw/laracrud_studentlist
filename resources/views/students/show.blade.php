@extends('students.layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h2 class="text-center">Show Student</h2>
  </div>
  <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
    <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Nama:</strong>
      {{ $student->nama }}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Details:</strong>
      {{ $student->details }}
    </div>
  </div>
</div>
@endsection
