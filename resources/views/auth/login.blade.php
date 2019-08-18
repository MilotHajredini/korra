@extends('layouts.app')

@section('content')

<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-content">
                            <h1 class="title">Log in</h1>
                            <form action="{{route('login')}}" method="POST" role="form">
                                {{ csrf_field() }}
                                <!--email form -->
                            <div class="field">
                                    <label for="email" class="label">Email Address</label>
                                    <p class="control has-icons-left has-icons-right">
                                    <input type="email" name="email" id="email" class="input @error('email') is-danger @enderror" placeholder="Email" value="{{old('email')}}">
                                        
                                    @error('email')
                                    <span class="help is-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </p>
                                </div>
    
                                <!-- password form -->
                                <div class="field">
                                    <label for="passowrd" class="label">Password</label>
                                    <p class="control has-icons-left">
                                        <input type="password" name="password" class="input @error('password') is-danger @enderror" placeholder="Passowrd">
                                        @error('password')
                                            <span class="help is-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </p>
                                </div>
                                
                                <b-checkbox name="remember" type="is-dark">Remember Me</b-checkbox>
                                
                                <button class="button is-dark is-outlined is-fullwidth">Login</button>
                            </form>
                            
                </div> <!--end of card content -->
            </div> <!-- end of card -->
            <h5 class="has-text-centered"><a href="{{route('password.request')}}" class="is-muted">Forgot Your Password?</a></h5>
        </div>

        
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
