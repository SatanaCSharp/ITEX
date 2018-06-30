@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="registration-lable">
                    <span>
                        Registration
                    </span>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control auth-registr{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" placeholder="Enter first name" required
                                           autofocus>
                                    <label for="lastName" class="col-md-4 col-form-label text-md-right"></label>
                                    <input id="lastName" type="text" class="form-control auth-registr" name="lastName"
                                           value="{{ old('lastName') }}" placeholder="Enter last name" required>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-6">
                                    <input id="email" class="auth-registr inp-fild" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" placeholder="Enter your e-mail"
                                           required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-6">
                                    <input id="password" class="auth-registr inp-fild" type="password"
                                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" placeholder="Enter password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-6">
                                    <input id="password-confirm" class="auth-registr inp-fild" type="password" class="form-control"
                                           name="password_confirmation" placeholder="Enter password one more time "
                                           required>
                                </div>

                                <div class="col-md-6">
                                    <br>
                                    <label for="manager-checkbox"
                                           class="col-md-2 col-form-label text-md-right"> </label>
                                    <div class="manager-check-box box-registr">
                                        <input id="manager-checkbox" type="checkbox" name="role">
                                        <span class="description-check-box"> Register as a manager</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" id="btn-register" class="btn btn-primary">
                                        {{ __('Regist') }}
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
