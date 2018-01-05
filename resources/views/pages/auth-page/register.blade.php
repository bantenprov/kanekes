@extends('layouts.auth-page')

{{-- Title --}}

@section('title', 'Daftar &middot; Kanekes')

{{-- Content --}}

@section('content')
<form class="form-auth form-auth-md">
    <h2 class="form-auth-heading text-uppercase">Daftar</h2>
    <div class="form-group">
        <label for="inputFullName" class="sr-only">Full Name</label>
        <input type="text" id="inputFullName" class="form-control" placeholder="Full Name" required autofocus>
    </div><!-- /.form-group -->
    <div class="form-group">
        <label for="inputNik" class="sr-only">NIK</label>
        <input type="text" id="inputNik" class="form-control" placeholder="NIK" required>
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
    <button class="btn btn-primary btn-block text-capitalize" type="submit">Daftar</button>
    <p class="text-muted text-center my-2 text-capitalize">Sudah punya akun?</p>
    <a class="btn btn-success btn-block text-capitalize" href="/login">Masuk</a>
    <hr>
    <p class="mb-0 text-center">
        <a class="btn btn-light text-capitalize" href="/">
            <i class="fa fa-home fa-lg mr-2"></i>
            Kembali ke Beranda
        </a>
    </p>
</form>
@endsection
