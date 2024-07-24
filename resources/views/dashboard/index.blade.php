@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Welcome Back, {{ auth()->user()->name }}</h1>
</div>
<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Personal Details</h6>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mt-3 mb-2 text-primary">Change Password</h6>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Current Password">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="New Password">
                    </div>
                </form>
            <div class="d-grid d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button">Update</button>
            </div>
        </div>
    </div>
</div>
@endsection