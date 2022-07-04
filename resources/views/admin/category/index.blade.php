<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Category</b>

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
                        <th scope="col">User Name</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
              
                       @foreach ($categories as $category)
                       <tr>
                        <td scope="col">{{ $categories->firstItem()+$loop->index}}</td>
                        <td scope="col">{{ $category->users->name }}</td>
                        <td scope="col">{{ $category->category_name }}</td>
                        <td scope="col">
                          @if ($category->created_at== NULL)
                            <span class="text-danger">No date found</span>
                        @else
                          {{ $category->created_at->diffForHumans() }}
                        @endif
                        </td>
                        <td>
                          <a href={{ url('category/edit/'.$category->id) }} class="btn btn-info">Edit</a>
                          <a href={{ url('category/delete/'.$category->id) }} class="btn btn-danger">Delete</a>
                          
                        </td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                <div class="container p-2">
                  {{ $categories->links() }}
                </div>
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
        {{-- category  setion end  --}}
    </div>
    <div class="py-12">
       {{-- trash  setion start  --}}
       <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
        
                  <div class="card-header">All Trash</div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
              
                       @foreach ($trashCat as $category)
                       <tr>
                        <td scope="col">{{ $categories->firstItem()+$loop->index}}</td>
                        <td scope="col">{{ $category->users->name }}</td>
                        <td scope="col">{{ $category->category_name }}</td>
                        <td scope="col">
                          @if ($category->created_at== NULL)
                            <span class="text-danger">No date found</span>
                        @else
                          {{ $category->created_at->diffForHumans() }}
                        @endif
                        </td>
                        <td>
                          <a href={{ url('category/restore/'.$category->id) }} class="btn btn-info">Restore</a>
                          <a href={{ url('category/pDelete/'.$category->id) }} class="btn btn-info">Permanantly Delete</a>
                          
                        </td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                <div class="container p-2">
                  {{ $trashCat->links() }}
                </div>
                </div>
            </div>
        </div>
       </div>
      {{-- trash  setion end  --}}
    </div>
</x-app-layout>
