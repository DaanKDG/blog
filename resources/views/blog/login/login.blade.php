@extends('layout.layout')

@section('title')
{{ $title }}
@endSection

@section('content')
@if(Auth::check())
kamu sudah login
@endif
@include('blog.login._login')
@endSection

@push('scripts')
@include('layout._form-usercontrol')
@endPush