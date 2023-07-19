@extends('layouts.app')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/dashboardstyles.css" rel="stylesheet" />
    <link href="css/Paginate.css" rel="stylesheet" />
    
    <link href="images/favicon.png" rel="icon" type="image/png"> 
@endpush
@push('scripts')
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
@endpush
@section('content')
<div id="layoutSidenav_content">
    <main class="container">
        {{-- <div class="container"> --}}
            <h1 class="mt-4">User Management</h1>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('create') }}"> Create New User</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
                <div class="card-body">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th width="200px">No</th>
                                    <th width="200px">User ID</th>
                                    <th width="150px">Name</th>
                                    <th width="150px">Email</th>
                                    <th width="150px">Roles</th>
                                    <th width="280px">Action</th>
                                    
                                </tr>
                            </thead>
                            @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->userID }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                                <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ url('show',$user->userID) }}"> <i class="fas fa-eye"></i></a>
                                        <a class="btn btn-success" href="edit/{{ $user->id }}" class="edit-button"><span class="edit-icon">&#9998;</span></a>
                                        <a class="btn btn-success" href="delete/{{ $user->id }}" class="delete-button"><i class="fas fa-trash-alt"></i></a></td>
                                        <!-- <a  style=" margin-bottom: 5px; margin-top: 5px;" class="btn btn-primary" href="{{ url('edit',$user->id) }}">Edit</a>
                                        {{-- <a  style=" margin-bottom: 5px; margin-top: 5px;" class="btn btn-primary" href="{{ url('destroy',$user->userID) }}">Delete</a> --}}
                                        {{-- {!! Form::open(['method' => 'POST','route' => ['destroy', $user->userID],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!} --}} -->
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="pagination">
                    {{ $data->links() }}
                </div>
               <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
                </div> 
    </main>
   
</div>
@endsection
                                        

                                 