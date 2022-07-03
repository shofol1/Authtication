<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Category</b>

        </h2>
    </x-slot>

    <div class="py-12">
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
                        <th scope="col">User ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Created At</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                       @foreach ($categories as $category)
                       <tr>
                        <td scope="col">{{ $i++}}</td>
                        <td scope="col">{{ $category->user_id }}</td>
                        <td scope="col">{{ $category->category_name }}</td>
                        <td scope="col">
                          @if ($category->created_at== NULL)
                            <span class="text-danger">No date found</span>
                        @else
                          {{ $category->created_at->diffForHumans() }}
                        @endif
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
                  <form action={{ route('store.category') }} method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Category Name</label>
                      <input type="text" class="form-control" name="category_name" placeholder="">
                      @error('category_name')
                          <h5 class="text-danger my-3">{{ $message }}</h5>
                      @enderror
                    <button type="submit" class="btn btn-success text-dark mt-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
       </div>
    </div>
</x-app-layout>
