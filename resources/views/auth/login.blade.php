@extends('layouts.back')

@section('content')
<div class="right_col" role="main" style="min-height: 816px;">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_content">        
        <form class="form-horizontal form-label-left" novalidate="" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="section">{{ __('Login') }}</span>
            <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">{{ __('E-Mail Address') }} <span class="required">*</span>
            </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
            </div>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Password</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12  @error('password') is-invalid @enderror" required="required" required autocomplete="current-password">
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
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">{{ __('Login') }}</button>
               
              </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
@endsection