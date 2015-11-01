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
        <div class="header-login margin-top-large">
            <h2>Geek<span class="red">Cave .</span></h2>
            <p>REGISTER PAGE GEEKCAVE ADMIN</p>
        </div>
        <div class="content-login">
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label class="pull-left">Name</label>
                    <input class="form-control" placeholder="Name" type="text" name="name" value="">
                </div>

                <div class="form-group">
                    <label class="pull-left">Email</label>
                    <input class="form-control" placeholder="Email@provider.com" type="email" name="email" value="">
                </div>

                <div class="form-group">
                    <label class="pull-left">Password</label>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                </div>

                <div class="form-group">
                    <label class="pull-left">Confirm Password</label>
                    <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Register <i class="glyphicon glyphicon-ok"></i></button>
                    <a class="btn btn-danger" href="/auth/login">Cancel <i class="glyphicon glyphicon-remove"></i></a>
                </div>
                <hr />
                <p>Already a user? <a href="/auth/login">Sign in!</a></p>
            </form>
        </div>
    </div>
</div>
@stop