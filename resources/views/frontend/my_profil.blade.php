@extends('layouts.frontend')

@section('title')
    My profil page
@endsection

@section('styles')

@endsection

@section('content')
    <div class="starter-template">
        <h1>Welcome {{ $user->userable->first_name }}</h1>
    </div>
    @include('includes.info-box')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profil modification</div>
                <div class="panel-body">
                    <form id="edit_profil_form" class="form-horizontal" role="form" method="POST" action="{{ url('/my-profil/edit') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('first_name') ? ' has-error' : '' }}" name="first_name" value="{{ old('first_name') ? old('first_name') : $user->userable->first_name }}">

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
                                <input type="text" class="form-control{{ $errors->has('last_name') ? ' has-error' : '' }}" name="last_name" value="{{ old('last_name') ? old('last_name') : $user->userable->last_name }}">

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
                                <input type="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') ? old('email') : $user->email }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Password modification</div>
                <div class="panel-body">
                    <form id="change_password_form" class="form-horizontal" role="form" method="POST" action="{{ url('/my-profil/change-password') }}">
                        {!! csrf_field() !!}
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
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
@endsection