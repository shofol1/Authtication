@extends('admin.admin_master')

@section('admin_content')
    <div class="p-5">
        {{-- category  setion start  --}}
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                  @if (session('success'))
                 
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>

                    </button>
                  </div>
                   @endif
                  <div class="card-header">All Brands
                  </div>
                  <table class="table custom_table_col">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">SL</th>
                        <th scope="col" width="15%">Brand Name</th>
                        <th scope="col" width="20%">Brand Image</th>
                        <th scope="col" width="30%">Created At</th>
                        <th scope="col" width="30%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($brands as $brand)
                          <tr>
                            <td scope="row">{{ $brands->firstItem()+$loop->index }}</td>
                            <td >{{ $brand->brand_name }}</td>
                            <td ><img src="{{ asset($brand->brand_image) }}" class="img-thumbnail" style="object-content:cover" alt=""></td>
                            <td >{{ $brand->created_at }}</td>
                            <td >
                              <a href={{ url('brand/edit/'.$brand->id) }} class="btn btn-info">Edit</a>
                              <a href={{ url('brand/delete/'.$brand->id) }} onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">Add Category</div>
                <div class="card-body">
                  <form action={{ route('store.brand') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Brand Name</label>
                      <div class="input-group mb-3">
                      <input type="text" class="form-control" name="brand_name" placeholder="">
                      </div>
                      @error('brand_name')
                      <div class="py-3">
                        <span class="text-danger">{{ $message }}</span>
                      </div>
                  @enderror
                      <div class="mb-3">
                        <input type="file" name="brand_image" >
                      </div>
                      @error('brand_image')
                      <div class="py-3">
                        <span class="text-danger">{{ $message }}</span>
                      </div>
                  @enderror
                    <button type="submit" class="btn btn-success text-dark mt-2">Add Brand</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
       </div>
        {{-- category  setion end  --}}
    </div>
@endsection