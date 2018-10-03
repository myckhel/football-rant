@extends('layouts.app')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = Route::currentRouteName(); ?>
<title>{{ config('app.name', $crumb) }}</title>
@endsection

@include('layouts.header')
@include('layouts.page-top')
@section('content')
<!-- Section Login/register-->
<section class="section section-variant-1 bg-gray-100">
  <div class="container">
    <div class="row row-50 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card-login-register" id="card-l-r">
          <div class="card-top-panel">
            <div class="card-top-panel-left">
              <h5 class="card-title card-title-login">Login</h5>
              <h5 class="card-title card-title-register">Register</h5>
            </div>
            <div class="card-top-panel-right"><span class="card-subtitle">
              <span class="card-subtitle-login">Register now</span><span class="card-subtitle-register">Sign in</span></span>
              <button class="card-toggle" data-custom-toggle="#card-l-r"><span class="card-toggle-circle"></span></button>
            </div>
          </div>
          <div class="card-form card-form-login">
            <form method="POST" action="{{ route('login') }}" class="" novalidate="novalidate">
              @csrf
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="form-login-name-1">Login</label>
                <input class="form-input form-control-has-validation form-control-last-child form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="form-login-name-1" value="{{ old('email') }}" type="text" name="email" data-constraints="@Required">
                <span class="form-validation"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="form-login-password-1">Password</label>
                <input class="form-input form-control-has-validation form-control-last-child form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="form-login-password-1" type="password" name="password" data-constraints="@Required"><span class="form-validation"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <label class="checkbox-inline checkbox-inline-lg checkbox-light">
                <input name="input-checkbox-1" value="checkbox-1" type="checkbox" class="checkbox-custom"><span class="checkbox-custom-dummy"></span>Remember Me
              </label>
              <button class="button button-lg button-primary button-block" type="submit">Sign in</button>
            </form>
            <div class="group-sm group-sm-justify group-middle"><a class="button button-google button-icon button-icon-left button-round" href="login-and-register.html#"><span class="icon fa fa-google-plus"></span><span>Google+</span></a><a class="button button-twitter button-icon button-icon-left button-round" href="login-and-register.html#"><span class="icon fa fa-twitter"></span><span>Twitter</span></a><a class="button button-facebook button-icon button-icon-left button-round" href="login-and-register.html#"><span class="icon fa fa-facebook"></span><span>Facebook</span></a></div>
          </div>
          <div class="card-form card-form-register">
            <form method="POST" action="{{ route('register') }}" data-form-output="form-output-global" data-form-type="contact" novalidate="novalidate">
              @if(isset($_REQUEST['action']))
              <input type="hidden" value="{{$_REQUEST['action']}}" name="action">
              <input type="hidden" value="{{$_REQUEST['key']}}" name="key">
              @endif
              @csrf
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="form-register-email">E-mail</label>
                <input class="form-input form-control-has-validation form-control-last-child form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="form-register-email" type="email" value="{{ old('email') }}" name="email" data-constraints="@Email @Required">
                <span class="form-validation"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="form-login-name-2">Username</label>
                <input class="form-input form-control-has-validation form-control-last-child form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="form-login-name-2" value="{{ old('name') }}" type="text" name="name" data-constraints="@Required">
                <span class="form-validation"></span>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="form-login-password-2">Password</label>
                <input class="form-input form-control-has-validation form-control-last-child" id="form-login-password-2" type="password" name="password" data-constraints="@Required">
                <span class="form-validation"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="form-login-password-3">Repeat Password</label>
                <input class="form-input form-control-has-validation form-control-last-child form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="form-login-password-3" type="password" name="password_confirmation" data-constraints="@Required">
                <span class="form-validation"></span>
              </div>
              <button class="button button-lg button-primary button-block" type="submit">Create new account</button>
            </form>
            <div class="group-sm group-sm-justify group-middle">
              <a class="button button-google button-icon button-icon-left button-round" href="login-and-register.html#">
                <span class="icon fa fa-google-plus"></span><span>Google+</span>
              </a>
              <a class="button button-twitter button-icon button-icon-left button-round" href="login-and-register.html#">
                <span class="icon fa fa-twitter"></span><span>Twitter</span>
              </a>
              <a class="button button-facebook button-icon button-icon-left button-round" href="login-and-register.html#">
                <span class="icon fa fa-facebook"></span><span>Facebook</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
