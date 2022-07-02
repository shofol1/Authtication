<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>{{ Auth::user()->name }}</b>
           <b style="float: right">
    
            <h6>Total <span class="badge bg-danger">{{ count($users) }}</span></h6>
           </b>
        </h2>
    </x-slot>

    <div class="py-12">
       <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                          </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
       </div>
    </div>
</x-app-layout>
