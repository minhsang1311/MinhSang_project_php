@extends('master')

@section('content')

    <div class="card">
        <div class="card-header">Edit Student</div>
        <div class="card-body">
            <form method="post" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Student Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ $student->name }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Student Age</label>
                    <div class="col-sm-10">
                        <input type="text" name="age" class="form-control" value="{{ $student->age }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Student Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" value="{{ $student->address }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="telephone" class="form-control" value="{{ $student->telephone }}" />
                    </div>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $student->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>

@endsection('content')
