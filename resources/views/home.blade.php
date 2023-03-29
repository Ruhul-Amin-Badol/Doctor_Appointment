
    @extends('master')
    @section('content')
            <div class="row">
                <div class="col-4 ">
                    <div class="card mt-3 p-3 bg-light">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-1 mt-1">
                                <label for="date" class="form-label font-weight-bold"><b>Date</b></label>
                                <input type="date" class="form-control" id="appointment_date" name="appointment_date">
                            </div>
                            <div class="mb-1 mt-0">
                                <label for="department" class="form-label"><b>Select Department</b></label>
                                <select class="form-select mt-0">
                                    <option>--Select--</option>
                                    @foreach($department as $dp)
                                    <option value="{{$dp->id}}" name="department_name">{{$dp->name}}</option>
                                    @endforeach
                                
                                </select>
                            </div>
                            <div class="mb-1 mt-0">
                                <label for="department" class="form-label"><b>Select Doctor</b></label>
                                <select class="form-select mt-0">
                                    <option>--Select--</option>
                                    @foreach($doctor as $doc)
                                    <option value="{{$doc->id}}" name="doctor_id">{{$doc->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="number" class="form-label"><b>Fee</b></label>
                                <input type="number" class="form-control" id="fee" placeholder="Enter Fee"
                                    name="fee">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg
                                * btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- table-start --}}
                <div class=" col-8 bg-secondary pb-5">
                    <div class="container mt-3">
                        <table class="table table-bordered text-white">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>App.No</th>
                                    <th>Doctor</th>
                                    <th>Fee</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointment as $app)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$app->appointment_no}}</td>
                                    <td>{{$app->doctor->name}}</td>
                                    <td>1500</td>
                                    <td>john@example.com</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <p>pagination basate hobe</p>
                    </div>
                    {{-- table-end --}}
                    {{-- payment-start --}}
                    <div class="container d-flex justify-content-center">
                        <div class="col-6 ">
                    <div class="card p-3 bg-light w-55 m-4">
                        <form action="" method="post">
                            <div class="row">
                                <label for="number" class="form-label"><b>Patient Information</b></label>
                                <div class="col">
                                    <input type="name" class="form-control" placeholder="Patient name" name="patient_name" id="patient_name">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Phone Number"
                                    name="patient_phone" id="patient_phone">
                                </div>
                            </div>
                            <div class="row mt-2">
                                 <label for="number" class="form-label"><b>Payment</b></label>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Total Fee"
                                    name="total_fee" id="total_fee">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Paid Amound"
                                    name="paid_amount" id="paid_amount">
                                </div>
                            </div>
                            <div class="d-grid p-3  col-6 mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                {{-- payment-end --}}
                </div>
            </div>
            @endsection
       