@extends('layouts.auth')

{{-- Title --}}

@section('title', 'Sign in')

{{-- Content --}}

@section('content')
<form class="form-auth form-auth-sm">
    <h2 class="form-auth-heading">Sign in</h2>
    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    </div><!-- /.form-group -->
    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    </div><!-- /.form-group -->
    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="remember-me"> Remember me
        </label>
    </div><!-- /.form-check -->
    <div class="d-flex flex-wrap flex-column">
        <div class="btn-group">
            <button class="btn btn-lg btn-success w-100" type="submit">Sign in</button>
            <a class="btn btn-lg btn-primary w-100" href="/register">Sign up</a>
        </div>
    </div>
</form>
@endsection
