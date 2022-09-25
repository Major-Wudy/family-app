@extends('layouts.app')
@section('title', __('overview.title'))
@section('content')

    @if (Session::has('error'))
        <div class="alert alert-danger text-center">
            {{ Session::get('error') }}
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
    @endif

    @include('partials.headline', ['headline' => __('overview.title')])

    @lang('overview.test-text')

    {{ Session::get('username') }}

@endsection
