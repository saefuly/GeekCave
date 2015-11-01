@extends('layouts.auth')
@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li></li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-md-4 col-md-offset-4 text-center">
    <div class="col-md-10 col-md-offset-1 text-center">
        <div class="header-login margin-top-extra-large">
            <h2>Geek<span class="red">Cave .</span></h2>
            <p>LOGIN PAGE GEEKCAVE ADMIN</p>
        </div>
        <div class="content-login">
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label class="pull-left">Email</label>
                    <input class="form-control" placeholder="Email@provider.com" type="email" name="email" value="">
                </div>

                <div class="form-group">
                    <label class="pull-left">Password</label><a href="/password/email"><span class="pull-right">forgot?</span></a>
                    <input class="form-control" placeholder="Password" type="password" name="password" id="password">
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember"> Remember Me
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Login <i class="glyphicon glyphicon-log-in"></i></button>
                </div>
                <hr />
                <p>not registered? <a href="/auth/register">Register Now!</a></p>
            </form>
        </div>
    </div>
</div>
@stop
