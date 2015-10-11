@extends('auth/design')

@section('content')
<div class="container">
    <div class="login-form-section">
        <div class="login-content animated fadeIn">
            <form method="POST" action="{{ url('/auth/login') }}">
                <div class="section-title">
                    <h3>Statik - Login</h3>
                    <hr>
                    <p><a href="{{ url('/password/email') }}"><span class="pull-left text-muted">Forgot Password</span></a><a href="{{ url('/auth/register') }}"><span class="pull-right text-muted">Register</span></a></p><br>
                    <hr>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="textbox-wrap">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" required="" name="email" placeholder="Email Address" class="form-control" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" required="" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="login-form-action clearfix"><a href="{{ url('/') }}" class="btn btn-primary pull-left"><i class="fa fa-chevron-left"></i>&nbsp; Back</a>
                    <button type="submit" class="btn btn-success pull-right">Login &nbsp;<i class="fa fa-chevron-right"></i></button>
                </div>
            </form>
        </div>
        <div class="login-form-links animated fadeIn">
            <h4 class="blue">Sign in using other accounts</h4>
            <hr><a href="/users/login/google" class="btn btn-danger btn-block btn-labeled"><span class="btn-label"><i class="fa fa-google"></i></span>Google</a><br>
            <div class="row">
                <div class="col-md-6"><a href="<?php echo url('github/authorize'); ?>" class="btn btn-inverse btn-block btn-labeled"><span class="btn-label"><i class="fa fa-github"></i></span>Github</a></div>
                <div class="col-md-6"><a href="/users/login/bitbucket" class="btn btn-info btn-block btn-labeled"><span class="btn-label"><i class="fa fa-bitbucket"></i></span>Bitbucket</a></div>
            </div>
        </div>
    </div>
</div>
@endsection