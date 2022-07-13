@extends('admin.admin_master')

@section('admin_content')
    <div class="p-5">
        {{-- category  setion start  --}}
        <a class="btn btn-info my-3" href={{ route('add.contact') }}>Add Contact Info</a>

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
                  <div class="card-header">All Contacts</div>
                  <div>
                  </div>
                  <table class="table custom_table_col">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">SL</th>
                        <th scope="col" width="15%">email</th>
                        <th scope="col" width="20%">phone</th>
                        <th scope="col" width="30%">location</th>
                        <th scope="col" width="15%">Created At</th>
                        <th scope="col" width="15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                      @foreach ($contacts as $contact)
                          <tr>
                            <td scope="row">{{ $i++ }}</td>
                            <td scope="row">{{ $contact->email}}</td>
                            <td scope="row">{{ $contact->phone}}</td>
                            <td scope="row">{{ $contact->location}}</td>

                            <td scope="row">{{ $contact->created_at }}</td>
                            <td scope="row">
                              <a href={{ url('slider/edit/'.$contact->id) }} class="btn btn-info">Edit</a>
                              <a href={{ url('slider/delete/'.$contact->id) }} onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
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