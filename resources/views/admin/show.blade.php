@extends('layouts.app')
@push('styles')
{{-- ../../../public/css/app.css --}}
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboardstyles.css') }}">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="images/favicon.png" rel="icon" type="image/png"> 
@endpush
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
@endpush
@section('content')
<div class="main">
    <main>
        <div class="container">
            <div class="pull-left">
                <h2> Show User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('roles') }}"> Back</a>
            </div>
        </div>
        <div class="card-body">
           
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $user->name }}
                </div>
            
          
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $user->email }}
                </div>
        
            
                <div class="form-group">
                    <strong>Roles:</strong>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <span>{{ $v }}</span>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </main>
</div>
@endsection