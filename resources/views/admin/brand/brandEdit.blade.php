@extends('admin.admin_master')

@section('admin_content')

    <div class="p-5">
        {{-- category  setion start  --}}
       <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">Add Category</div>
                <div class="card-body">
                  <form action={{ url('brand/update/'.$brands->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                    <input type="hidden" name="old_image" value={{ $brands->brand_image }}>
                      <label for="exampleInputEmail1" class="form-label" >Brand Name</label>
                      <div class="input-group mb-3">
                      <input type="text" class="form-control" name="brand_name" value={{ $brands->brand_name }}>
                      </div>
                      @error('brand_name')
                      <div class="py-3">
                        <span class="text-danger">{{ $message }}</span>
                      </div>
                  @enderror
                      <div class="mb-3">
                        <input type="file" name="brand_image" value={{ $brands->brand_image }}>
                      </div>
                      <div class="mb-3">
                       <img src="{{ asset($brands->brand_image) }}" style="width: 80px;height:100px" alt="">
                      </div>

                      
                      @error('brand_image')
                      <div class="py-3">
                        <span class="text-danger">{{ $message }}</span>
                      </div>
                  @enderror
                    <button type="submit" class="btn btn-success text-dark mt-2">Update Brand</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
       </div>
        {{-- category  setion end  --}}
    </div>
@endsection

