@extends('layouts.app')
@section('title', __('overview.title'))
@section('content')

    @include('partials.headline', ['headline' => __('overview.title')])

    @lang('overview.test-text')

    <br><br>

    @lang('overview.test-link'): <a href="{{ route('test') }}">{{ route('test') }}</a>

@endsection
