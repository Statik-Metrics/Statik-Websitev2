@extends('auth/design')

@section('content')
    <div class="container">
    </div>
    <div class="login-form-section">
        <div class="login-content animated fadeIn">
            <form action="{{ url('/auth/register') }}" method="POST">
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
                <div class="section-title">
                    <h3>Statik - Register</h3>
                    <hr>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" required="" name="name" placeholder="Username" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" required="" name="email" placeholder="Email Address" class="form-control" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" required="" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" required="" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="login-form-links animated fadeIn">
                    <div class="clearfix"><a href="{{ url('/auth/login') }}" class="btn btn-primary pull-left"><i class="fa fa-chevron-left"></i> &nbsp; Back to Login</a>
                        <button type="submit" class="btn btn-success pull-right">Register &nbsp;<i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection