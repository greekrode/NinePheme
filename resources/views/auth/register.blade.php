@extends('layouts.default')
@section('content')
<!-- Main -->
<div class="main" role="main">

        <!-- Page Heading -->
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Register</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            {{-- <li><a href="#">Pages</a></li> --}}
                            <li class="active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Heading / End -->

        <!-- Page Content -->
        <section class="page-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="spacer-lg visible-sm visible-xs"></div>
                        <div class="box">
                            <h3>Register</h3>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                                <div class="form-group">
                                    <label>Full Name <span class="required"></span>*</label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Email address <span class="required">*</span></label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            
                                    @if ($errors->has('email'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Username <span class="required">*</span></label>
                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
    
                                    @if ($errors->has('username'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                        <label>Instagram Token <span class="required">*</span></label>
                                        <input id="instagram_token" type="text" class="form-control{{ $errors->has('instagram_token') ? ' is-invalid' : '' }}" name="instagram_token" value="{{ old('instagram_token') }}" required autofocus>
                                        <span class="invalid-feedback">
                                            Get your token from <a href="http://instagram.pixelunion.net/">here</a>
                                        </span>
                                        @if ($errors->has('instagram_token'))
                                            <span class="help-block" role="alert">
                                                <strong>{{ $errors->first('instagram_token') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Password <span class="required">*</span>
                                            </label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Re-enter Password <span class="required">*</span>
                                            </label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

@stop    