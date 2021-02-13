@extends('students.layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h2 class="text-center">Edit Student</h2>
  </div>
  <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
    <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
  </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

  <form action="{{ URL::to('students',[$student->id]) }}" method="POST">
  @csrf
  @method('PUT')

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Nama:</strong>
          <input type="text" name="nama" value="{{ $student->nama }}" class="form-control" placeholder="Nama">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Details:</strong>
          <textarea class="form-control" style="height:150px" name="details" placeholder="Details">{{ $student->details }}</textarea>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary"> Edit </button>
      </div>
    </div>

    </form>
@endsection
