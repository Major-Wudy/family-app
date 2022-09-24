@extends('layouts.app')
@section('title', __('overview.title'))
@section('content')

    @include('partials.headline', ['headline' => __('overview.title')])

    @lang('overview.test-text')

@endsection
