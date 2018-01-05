@extends('layouts.admin-page')

{{-- Title --}}

@section('title', 'Admin')
@section('navbar-title', 'Kanekes')

{{-- Content --}}

@section('content')
	@include('pages.admin-page.home.alert')
	@include('pages.admin-page.home.card-media')
	@include('pages.admin-page.home.mumbul')
	@include('pages.admin-page.home.form')
	@include('pages.admin-page.home.table')
	@include('pages.admin-page.home.card')
	@include('pages.admin-page.home.list-group')
	@include('pages.admin-page.home.progress')
@endsection
