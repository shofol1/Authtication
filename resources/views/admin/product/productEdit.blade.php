<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Product</b>
        </h2>
    </x-slot>
{{-- product section start  --}}
    <div class="py-12">
       <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
             
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    <form action={{ url('product/update/'.$products->id)  }} method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="exampleFormControlInput1" value={{ $products->product_name }}>
                          </div>
                        <div class="mb-3">
                          </div>
                          <div class="mb-3">
                           <button type="submit" class="btn btn-success text-dark">Update Product</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>

       </div>
    </div>

    {{-- product section end  --}}
</x-app-layout>
