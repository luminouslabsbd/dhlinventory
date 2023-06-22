@extends('master')

@section('content')
@include('includes.breadcrumb',['breadcrumb' => 'Profile'])

<section class="content">
  <div class="container-fluid">
    <div class="row pb-3 justify-content-between">
      <div class="col-2">
        <a type="button">-</a>
      </div>
    </div>
  </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{-- <h3 class="card-title">Profile</h3><br><br> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full_name">Full Name:</label>
                                    <input type="text" class="form-control" id="full_name" value="{{ $data->full_name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" value="{{ $data->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <img src="{{ $data->image }}" alt="Profile Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number:</label>
                                    <input type="text" class="form-control" id="phone_number" value="{{ $data->phone_number }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <input type="text" class="form-control" id="gender" value="{{ $data->gender }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="text" class="form-control" id="dob" value="{{ $data->dob }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="street_address">Street Address:</label>
                                    <textarea class="form-control" id="street_address" rows="3" readonly>{{ $data->street_address }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="about">About:</label>
                                    <textarea class="form-control" id="about" rows="5" readonly>{{ $data->about }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
