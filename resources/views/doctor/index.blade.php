@extends('master')
@section('content')
    <div class="container-fluid bg-secondary ">
        <div class="row ">
            <div class="col-2"></div>
            <div class=" col-8 pb-5 ">
                <div class="container mt-3 ">
                    <div class="text-center text-white">
                        <h3>All Doctor</h3>
                    </div>
                    <div class="p-3">
                        <button type="submit" class="btn btn-primary btn-block" data-bs-toggle="modal"
                            data-bs-target="#doctoradd">Doctor <i class="fa-solid fa-user-plus"></i></button>
                    </div>

                    <table class="table table-bordered text-white ">
                        <tbody>
                            <tr>
                                <th>SN</th>
                                <th>Department Name</th>
                                <th>Doctor</th>
                                <th>phone</th>
                                <th>Fee</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($doctor as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->department->name }}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->fee }}</td>
                                    <td>
                                        <a href="{{ url('edit/' . $item->id) }}" class="btn btn-primary"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ url('doctor/' . $item->id) }}" class="btn btn-danger"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div>
                    <p>pagination basate hobe</p>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    {{-- table-end --}}

    <!--insert-doctor-Modal -->
    <form action="" method="POST">
        @csrf
        <div class="modal fade" id="doctoradd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Doctor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-2">
                            <label for="number" class="form-label"><b>Department Name</b></label>
                            <select name="department_id" id="" class="form-select" >
                                @foreach ($dep as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label"><b>Name</b></label>
                            <input type="name" class="form-control" id="name" placeholder="Enter Doctor Name"
                                name="name">
                        </div>
                        <div class="mb-2">
                            <label for="number" class="form-label"><b>Phone</b></label>
                            <input type="number" class="form-control" id="phone" placeholder="Enter Phone number"
                                name="phone">
                        </div>
                        <div class="mb-2">
                            <label for="number" class="form-label"><b>Fee</b></label>
                            <input type="number" class="form-control" id="fee" placeholder="Fee" name="fee">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
