@extends('layouts.landing-page')

{{-- Title --}}

@section('title', 'Kanekes')
@section('navbar-title', 'Kanekes')
@section('header-title', 'Kanekes Theme')
@section('header-description', 'A Starter Theme for Laravel.')

{{-- Content --}}

@section('content')
	@include('pages.landing-page.home.section-1')
	@include('pages.landing-page.home.section-2')
	@include('pages.landing-page.home.section-3')
	@include('pages.landing-page.home.section-4')
	@include('pages.landing-page.home.section-5')
	@include('pages.landing-page.home.section-6')
@endsection
