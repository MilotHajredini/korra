@extends('layouts.app')

@section('content')

                    @if (session('status'))
                       <div class="notification is-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-content">
                            <h1 class="title">Reset your Password</h1>
                            <form action="{{route('register')}}" method="POST" role="form">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <!--email form -->
                            <div class="field">
                                    <label for="email" class="label">Email Address</label>
                                    <p class="control has-icons-left has-icons-right">
                                    <input type="email" name="email" id="email" class="input @error('email') is-danger @enderror" placeholder="Email" value="{{old('email')}}" required>
                                        
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
                                        <input type="password" name="password" class="input @error('password') is-danger @enderror" placeholder="Passowrd" required>
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

                                <div class="field">
                                    <label for="password_confirmation" class="label">Password Confirmation</label>
                                    <p class="control has-icons-left">
                                        <input type="password" name="password_confirmation" class="input @error('password_confirmation') is-danger @enderror" placeholder="Passowrd" id="password_confirmation" required>

                                        @error('password_confirmation')
                                            <span class="help is-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </p>
                                </div>
                                
                                
                                
                                <button class="button is-dark is-outlined is-fullwidth">Reset Password</button>
                            </form>
                            
                </div> <!--end of card content -->
            </div> <!-- end of card -->
            <h5 class="has-text-centered"><a href="{{route('login')}}" class="is-muted">Already a User?</a></h5>
        </div>

                    
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
