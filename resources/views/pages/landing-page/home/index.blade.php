@extends('layouts.landing-page')

{{-- Title --}}

@section('title', 'Profil')
@section('header-title', 'Banten Profil')
@section('header-description', 'Profil pengguna aplikasi Pemerintah Provinsi Banten.')

{{-- Content --}}

@section('content')
	@include('pages.landing-page.home.section-1')
@endsection
