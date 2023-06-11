@extends('master')
@section('content')
@include('includes.breadcrumb',['breadcrumb' => 'Add Vehicle'])

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 offset-2">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Vehicle</h3>
            </div>
            <form method="post" action="{{route('backend.vehicle.store')}}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <label>Name</label>
                            <select class="form-select" name="user_id">
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="vehicle_name" class="form-control" placeholder="Vehicle Name" required>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="vehicle_cc" class="form-control" placeholder="Vehicle CC" required>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="vehicle_engine_number" class="form-control" placeholder="Vehicle Engine Number" required>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="vehicle_chassis_number" class="form-control" placeholder="Vehicle Chassis Number" required>
                        </div>
                    </div>
                </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
