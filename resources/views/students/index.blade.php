@extends('students.layout')

@section('content')

  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-center"> Student List </h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
      <a class="btn btn-success " href="{{ route('students.create') }}"> Add Students</a>
    </div>
  </div>

@if ($message = Session::get('success'))
  <div class="alert alert-success">
    {{ $message }}
  </div>
@endif

@if(sizeof($student) > 0)
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Details</th>
      <th width="280px">More</th>
    </tr>
    @foreach ($student as $stu)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $stu->nama }}</td>
        <td>{{ $stu->details }}</td>
        <td>
        <form action="{{ route('students.destroy',$stu->id) }}" method="POST">

            <a class="btn btn-info" href="{{ route('students.show',$stu->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('students.edit',$stu->id) }}">Edit</a>

            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
  </table>
  @else
    <div class="alert alert-warning"> No Data to Display </div>
  @endif

  {!! $student->links() !!}

@endsection
