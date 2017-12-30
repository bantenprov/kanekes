@extends('layouts.admin')

{{-- Title --}}

@section('title', 'Admin')
@section('navbar-title', 'Kanekes')

{{-- Content --}}

@section('content')
  @include('partials.admin.sample_alert')
  @include('partials.admin.sample_card-media')
  @include('partials.admin.sample_mumbul')
  @include('partials.admin.sample_table')
  @include('partials.admin.sample_list-group')
  @include('partials.admin.sample_card')
  @include('partials.admin.sample_form')
  @include('partials.admin.sample_progressbar')
@endsection
