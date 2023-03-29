@extends('master')
@section('content')

<form action="" method="POST">
    @csrf
    @method('PATCH')
<div class="container-fluid p-4">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card p-2 bg-light">
                <div class="mb-2">
                    <label for="number" class="form-label"><b>Department Id</b></label>
                    <input type="number" class="form-control" id="department_id" 
                    name="department_id" value="{{$doc->department_id}}">
                </div>
                <div class="mb-2">
                    <label for="name" class="form-label"><b>Name</b></label>
                    <input type="name" class="form-control" id="name" 
                    name="name" value="{{$doc->name}}">
                </div>
                <div class="mb-2">
                    <label for="number" class="form-label"><b>Phone</b></label>
                    <input type="number" class="form-control" id="phone" 
                    name="phone" value="{{$doc->phone}}">
                </div>
                <div class="mb-2">
                    <label for="number" class="form-label"><b>Fee</b></label>
                    <input type="number" class="form-control" id="fee" 
                    name="fee" value="{{$doc->fee}}">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary justify-content-center">Update</button>
                </div>
        </div>
    </div>
</div>
</form>
@endsection