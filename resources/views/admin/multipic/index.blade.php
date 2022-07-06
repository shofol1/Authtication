<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>Multi Images</b>

        </h2>
    </x-slot>

    <div class="py-12">
        {{-- category  setion start  --}}
      
       <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if (session('success'))
                 
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>

                    </button>
                  </div>
                   @endif
                   <div class="card-group">
                    @foreach ($images as $image)
                        <div class="col-md-4 mt-5">
                            <img src="{{ asset($image->image) }}" alt="">
                        </div>
                    @endforeach
                   </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">Add Multi Images</div>
                <div class="card-body">
                  <form action={{ route('store.image') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <div class="mb-3">
                        <input type="file" name="image[]" multiple="">
                      </div>
                      @error('brand_image')
                      <div class="py-3">
                        <span class="text-danger">{{ $message }}</span>
                      </div>
                  @enderror
                    <button type="submit" class="btn btn-success text-dark mt-2">Add Multi Image</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
       </div>
        {{-- category  setion end  --}}
    </div>
</x-app-layout>
