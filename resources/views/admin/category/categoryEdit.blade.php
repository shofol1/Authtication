<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Category</b>

        </h2>
    </x-slot>

    <div class="py-12">
        {{-- category setion start  --}}
       <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">Update Category</div>
                <div class="card-body">
                  <form action={{url('category/update/'.$categories->id)}} method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Category Name</label>
                      <input type="text" class="form-control" name="category_name" value={{ $categories->category_name }}>
                      @error('category_name')
                          <h5 class="text-danger my-3">{{ $message }}</h5>
                      @enderror
                    <button type="submit" class="btn btn-success text-dark mt-2">Update</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
       </div>
        {{-- category setion end  --}}

      


    </div>
</x-app-layout>
