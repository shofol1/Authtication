<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Product</b>
        </h2>
    </x-slot>

    <div class="py-12">
       <div class="container">
        <div class="row">
            @if (session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('success') }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span></button>
              </div>
                
            @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h4><Strong>All Product</Strong></h4></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Created_at</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach ($products as $product)
                         <tr>
                            <th scope="row">{{$products->firstItem()+$loop->index }}</th>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->users->name }}</td>
                            <td>{{ $product->created_at->diffForHumans() }}</td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>

                      <div class="container">
                        {{ $products->links() }}
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
             
                <div class="card-header">Add Product</div>
                <div class="card-body">
                    <form action={{ route('store.product')  }} method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="exampleFormControlInput1" placeholder="Product Name">
                          </div>
                        <div class="mb-3">
                            @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                           <button type="submit" class="btn btn-success text-dark">Add Product</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>

       </div>
    </div>
</x-app-layout>
