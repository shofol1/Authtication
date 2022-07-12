@extends('admin.admin_master')

@section('admin_content')
    <div class="p-5">
        {{-- category  setion start  --}}
        <a class="btn btn-info my-3" href={{ route('create.portfolio') }}>Add Portfolio</a>

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
                        <th scope="col" >SL</th>
                        <th scope="col" width="35%">image</th>
                        <th scope="col">created_at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                      @foreach ($portfolios as $portfolio)
                          <tr>
                            <td scope="row">{{ $i++ }}</td>
                            <td scope="row"><img class="img-thumbnail" src="{{ asset($portfolio->images) }}" alt=""></td>
                            <td scope="row">{{ $portfolio->created_at }}</td>
                            <td scope="row">
                              <a href={{ url('slider/edit/'.$portfolio->id) }} class="btn btn-info">Edit</a>
                              <a href={{ url('slider/delete/'.$portfolio->id) }} onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
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