@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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
                                border: 2px solid #ccc;
                                border-radius: 15px;
                                box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
                            }

                            /* Gaya untuk header kartu */
                            .card-header {
                                background-color: #007bff;
                                color: #fff;
                                font-weight: bold;
                                text-align: center;
                            }

                            /* Gaya untuk halaman login */

                        </style>

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

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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