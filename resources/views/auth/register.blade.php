@extends('layouts.frontend')

@section('title')
    Register
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                <form id="register_form" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="col-md-4 control-label">First Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control{{ $errors->has('first_name') ? ' has-error' : '' }}" name="first_name" value="{{ old('first_name') }}">

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Last Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control{{ $errors->has('last_name') ? ' has-error' : '' }}" name="last_name" value="{{ old('last_name') }}">

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" id="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in ul-icon"></i>Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
