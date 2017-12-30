@extends('layouts.landing-page')

{{-- Title --}}

@section('title', 'Kanekes')
@section('navbar-title', 'Kanekes')
@section('header-title', 'Kanekes Theme')
@section('header-description', 'A Starter Theme for Laravel.')

{{-- Content --}}

@section('content')
  @include('partials.landing-page.section-1')
  @include('partials.landing-page.section-2')
  @include('partials.landing-page.section-3')
  @include('partials.landing-page.section-4')
  @include('partials.landing-page.section-5')
@endsection
