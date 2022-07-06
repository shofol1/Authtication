<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Brands</b>

        </h2>
    </x-slot>

    <div class="py-12">
        {{-- category  setion start  --}}
      
       <div class="container">
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
                  <div class="card-header">All Categories</div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Brand Image</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($brands as $brand)
                          <tr>
                            <td scope="col">{{ $brands->firstItem()+$loop->index }}</td>
                            <td scope="col">{{ $brand->brand_name }}</td>
                            <td scope="col"><img src="{{ asset($brand->brand_image) }}" class="img-thumbnail" style="object-content:cover" alt=""></td>
                            <td scope="col">{{ $brand->created_at }}</td>
                            <td scope="col">
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
</x-app-layout>
