@extends('auth/design')
@section('content')
    <div class="container">
        <div class="login-form-section">
            <div class="login-content animated fadeIn">
                <form method="POST" action="{{ url('/password/email') }}">
                    <div class="section-title">
                        <h3>Statik - Password Reset</h3>
                        <hr>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
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
                        <p>If you have forgotten your password simply enter your email address below and we will send you a link to reset it.</p>
                    </div>
                    <div class="textbox-wrap">
                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" required="" name="email" placeholder="Email Address" class="form-control" value="{{ old('email') }}">
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="login-form-action clearfix"><a href="{{ url('/auth/login') }}" class="btn btn-primary pull-left"><i class="fa fa-chevron-left"></i> &nbsp; Back to Login</a>
                        <button type="submit" class="btn btn-success pull-right">Continue &nbsp;<i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
