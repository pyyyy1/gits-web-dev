@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <style>
                            /* Gaya untuk label-label form */
                            .col-form-label {
                                font-weight: bold;
                            }

                            /* Gaya untuk input form yang aktif */
                            .form-control:focus {
                                border-color: #007bff;
                                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                            }

                            /* Gaya untuk tombol Login */
                            .btn-primary {
                                background-color: #007bff;
                                border-color: #007bff;
                                color: #fff;
                            }

                            .btn-primary:hover {
                                background-color: #0056b3;
                                border-color: #0056b3;
                            }

                            /* Gaya untuk link "Forgot Your Password?" */
                            .btn-link {
                                color: #007bff;
                            }

                            .btn-link:hover {
                                color: #0056b3;
                            }

                            .card {
                                max-width: 500px;
                                margin: 0 auto;
                                border: 1px solid #ccc;
                                border-radius: 10px;
                                box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
                            }

                            /* Gaya untuk header kartu */
                            .card-header {
                                background-color: #007bff;
                                color: #fff;
                                font-weight: bold;
                                text-align: center;
                            }
                        </style>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
