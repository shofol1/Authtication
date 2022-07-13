@extends('admin.admin_master')
@section('admin_content')
<div class="row justify-content-center my-4">
    <div class="col-md-11">
        <div class="card card-default" >
            <div class="card-header card-header-border-bottom">
                <h2>change Profile</h2>
            </div>
        
            <div class="card-body">
                <form class="form-pill" action="{{ route('update.profile')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user['name'] }}">
                    </div>
                   <div class="my-2">
                    @error('oldName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                   </div>
                    <div class="form-group">
                        <label for="exampleFormControlPassword3">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $user['email'] }}">
                    </div>
                  <div class="my-2">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                    <button class="btn btn-success btn-default" type="submit">Update</button>
                </form>
            </div>
    
    </div>
    </div>
</div>
@endsection