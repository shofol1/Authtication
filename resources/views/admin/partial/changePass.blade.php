@extends('admin.admin_master')
@section('admin_content')
<div class="row justify-content-center my-4">
    <div class="col-md-11">
        <div class="card card-default" >

            <div class="card-header card-header-border-bottom">
                <h2>change password</h2>
            </div>
        
            <div class="card-body">
                <form class="form-pill" action="{{ route('update.password')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="oldPass" placeholder="Enter Current Password">
                    </div>
                   <div class="my-2">
                    @error('oldPass')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                   </div>
                    <div class="form-group">
                        <label for="exampleFormControlPassword3">New Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
                    </div>
                  <div class="my-2">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                    <div class="form-group">
                        <label for="exampleFormControlPassword3">Confirrm Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Confirm Password">
                    </div>
                   <div class="my-2">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                   </div>
                    <button class="btn btn-success btn-default" type="submit">Change Password</button>
                </form>
            </div>
    
    </div>
    </div>
</div>
@endsection