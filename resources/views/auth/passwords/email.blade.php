@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css"  href="/css/app.css">
    <link rel="stylesheet" href="/css/emailstyle.css">
    <link href="images/favicon.png" rel="icon" type="image/png"> 
@endpush
@section('content')
<div class="main">
<section class="sign-in">
    <div class="reset-container">
    <div  class="logo"><img src="/images/p-1.png"  alt="logos"></div>
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="/images/signin-image.jpg" alt="sign up image"></figure>    
            </div>
            <div class="signin-form">
                <h2 class="form-title">{{ __('Reset Password') }}</h2>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <form method="POST" action="{{ route('password.email') }}" class="register-form" id="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        
                            <input id="email" type="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="form-group">
                            <button type="submit" class="form-submit">
                                {{ __('Send Password Reset Link') }}
                            </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
