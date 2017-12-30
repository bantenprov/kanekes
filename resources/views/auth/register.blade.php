@extends('layouts.auth')

{{-- Title --}}

@section('title', 'Sign up')

{{-- Content --}}

@section('content')
<form class="form-auth form-auth-md">
    <h2 class="form-auth-heading">Sign up</h2>
    <div class="row">
        <div class="col-sm form-group">
            <label for="inputFirstName" class="sr-only">First Name</label>
            <input type="text" id="inputFirstName" class="form-control" placeholder="First Name">
        </div><!-- /col -->
        <div class="col-sm form-group">
            <label for="inputLastName" class="sr-only">Last Name</label>
            <input type="text" id="inputLastName" class="form-control" placeholder="Last Name">
        </div><!-- /col -->
    </div><!-- /.row -->
    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    </div><!-- /.form-group -->
    <div class="row">
        <div class="col-sm form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div><!-- /col -->
        <div class="col-sm form-group">
            <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required>
        </div><!-- /col -->
    </div><!-- /.row -->
    <div class="d-flex flex-wrap flex-column">
        <div class="btn-group">
            <button class="btn btn-lg btn-primary w-100" type="submit">Sign up</button>
            <a class="btn btn-lg btn-success w-100" href="/login">Sign in</a>
        </div>
    </div>
</form>
@endsection
