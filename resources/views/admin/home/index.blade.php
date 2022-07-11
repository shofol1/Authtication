@extends('admin.admin_master')

@section('admin_content')
    <div class="p-5">
        {{-- category  setion start  --}}
        <a class="btn btn-info my-3" href={{ route('edit.slider') }}>Add slider</a>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  @if (session('success'))
                 
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>

                    </button>
                  </div>
                   @endif
                  <div class="card-header">All Sliders</div>
                  <div>
                  </div>
                  <table class="table custom_table_col">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">SL</th>
                        <th scope="col" width="15%">title</th>
                        <th scope="col" width="25%">description</th>
                        <th scope="col" width="15%">image</th>
                        <th scope="col" width="10%">Created At</th>
                        <th scope="col" width="15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                      @foreach ($sliders as $slider)
                          <tr>
                            <td scope="row">{{ $i++ }}</td>
                            <td scope="row">{{ $slider->title}}</td>
                            <td scope="row">{{ $slider->description}}</td>
                            <td scope="row"><img src="{{ asset($slider->image) }}" class="img-thumbnail" style="object-content:cover" alt=""></td>
                            <td scope="row">{{ $slider->created_at }}</td>
                            <td scope="row">
                              <a href={{ url('brand/edit/'.$slider->id) }} class="btn btn-info">Edit</a>
                              <a href={{ url('brand/delete/'.$slider->id) }} onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
       </div>
        {{-- category  setion end  --}}
    </div>
@endsection