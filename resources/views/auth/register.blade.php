@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css"  href="css/app.css">
    <link rel="stylesheet" href="css/registerstyle.css">
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
<div class="main">
    <section class="signup">
        <div class="register-container">
        <div  class="logo"><img src="images/p-1.png"  alt="logos"></div>
            <div class="signup-content">
                <div class="signup-form">
                    
                    <!-- <figure class=signup-image><img src="images/p-1.png" alt="logo"></figure> -->
                    <h2 class="form-title">{{ __('Register') }}</h2>
                    <form method="POST" action = "{{ route('register') }}"  class="register-form" id="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="userID"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="userID" type="number" class="form-control @error('userID') is-invalid @enderror" name="userID" value="{{ old('userID') }}" required autocomplete="userID" placeholder="{{ __('ID') }}" autofocus  >
                            @error('userID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-lock"></i></label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name') }}" autofocus >
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="designation"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text"  id="designation" placeholder="Your Designation" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation" autofocus>
                            <div class="col-md-6">
                                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dep_id"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="number"  id="dep_id" placeholder="Your Department" class="form-control @error('dep_id') is-invalid @enderror" name="dep_id" value="{{ old('dep_id') }}" required autocomplete="dep_id" autofocus>
                            <div class="col-md-6">
                                @error('dep_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock-outline"></i></label>
                           
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <i class="fas fa-eye eye-icon" id="togglePassword"></i>
                            
                       
                        </div> 
                        <div class="form-group">
                            <label for="password-confirm"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                            
                        </div> 
                        <div class="form-group">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="form-submit">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure>
                        <img src="images/signup-image.jpg" alt="sing up image">       
                    </figure>
                    <!-- <a href="#" class="signup-image-link">I am already member</a> -->
                </div>
            </div>
        </div>
    </section>
</div> 
              
@endsection
