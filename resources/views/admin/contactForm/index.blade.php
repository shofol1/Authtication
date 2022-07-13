@extends('admin.admin_master')

@section('admin_content')
    <div class="p-5">
      

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">All Sliders</div>
                  <div>
                  </div>
                  <table class="table custom_table_col">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">SL</th>
                        <th scope="col" width="15%">name</th>
                        <th scope="col" width="25%">email</th>
                        <th scope="col" width="15%">subject</th>
                        <th scope="col" width="15%">message</th>
                        <th scope="col" width="10%">Created At</th>
                        <th scope="col" width="15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                      @foreach ($contacts as $contact)
                          <tr>
                            <td scope="row">{{ $i++ }}</td>
                            <td scope="row">{{ $contact->name}}</td>
                            <td scope="row">{{ $contact->email}}</td>
                            <td scope="row">{{ $contact->subject}}</td>
                            <td scope="row">{{ $contact->message}}</td>
                   
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