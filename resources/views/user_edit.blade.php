@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="rounded p-4" style="background-color:white">
                <h3><strong>Edit Profile</strong></h3>
                <h5>If you don't want to change your password, you write your password in textbox.</h5>
                <h5>If you want to change your password, you write your new password in textbox.</h5>
                <div class="dropdown-divider py-1"></div>
                <form action="/user/{{ $user->id }}/update">
                    @csrf
                    <!-- first_name -->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}">

                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- email -->
                    <div class="form-group row">
                        <label for="D_email" class="col-md-4 col-form-label text-md-right">{{ __('Safety E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="D_email" type="email" 
                            class="form-control{{ $errors->has('D_email') ? ' is-invalid' : '' }}" 
                            name="D_email" value="{{ old('D_email') ?: $user->D_email }}">

                            @if ($errors->has('D_email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('D_email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="D_email-confirm" class="col-md-4 col-form-label text-md-right">Confirm Safety e-mail</label>

                        <div class="col-md-6">
                            <input id="D_email-confirm" type="email" 
                            class="form-control{{ $errors->has('D_email_confirmation') ? ' is-invalid' : '' }}" 
                            name="D_email_confirmation" value="{{ old('D_email') ?: $user->D_email }}">

                            @if ($errors->has('D_email_confirmation'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('D_email_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    
                    <!-- email -->
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" 
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                            name="email" value="{{ old('email') ?: $user->email }}">

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email-confirm" class="col-md-4 col-form-label text-md-right">
                        Confirm e-mail</label>

                        <div class="col-md-6">
                            <input id="email-confirm" type="email" 
                            class="form-control{{ $errors->has('email_confirmation') ? ' is-invalid' : '' }}" 
                            name="email_confirmation" value="{{ old('email') ?: $user->email }}">

                            @if ($errors->has('email_confirmation'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- new_password -->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" 
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                            name="password">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- confirmation new password -->
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" 
                            class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" 
                            name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-md-center">
                            <input type="submit" class="btn btn-primary" value="Update" style="width:170px;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection