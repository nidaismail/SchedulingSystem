@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css"  href="/css/app.css">
    {{-- <link rel="stylesheet" href="css/styles.css"> --}}
    <link href="images/favicon.png" rel="icon" type="image/png"> 
@endpush
@push('scripts')
<script>
    $(document).ready(function() {
      $('#togglePassword').click(function() {
        var passwordInput = $('#password');
        var type = passwordInput.attr('type');
        
        if (type === 'password') {
          passwordInput.attr('type', 'text');
          $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
          passwordInput.attr('type', 'password');
          $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        }
      });
    });
  </script>
@endpush
@section('content')
<section class="sign-in">
    <div class="log-container">
    <div  class="logo"><img src="/images/p-1.png"  alt="logos"></div>
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="/images/signin-image.jpg" alt="sing up image"></figure>    
            </div>
            <div class="signin-form">
                <h2 class="form-title">{{ __('Reset Password') }}</h2>
                <form method="POST" action={{ route('password.update') }} class="register-form" id="login-form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <i class="fas fa-eye eye-icon" id="togglePassword"></i>
                    </div>
                    <div class="form-group">
                            <div class="form-check">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-submit">
                                    {{ __('Reset Password') }}
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
