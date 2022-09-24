<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - @lang('general.main-title')</title>

    {{-- Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css"> {{-- bootstrap-select --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"> {{-- Flags, for new Versions check https://cdnjs.com/libraries/flag-icon-css --}}
    <link href="{{ url('css/custom.css') }}" rel="stylesheet">
    @if(Config::get('features.new_design') && Cookie::get(env('APP_NAME') . '_design') != 1)
        <link href="{{ url('css/newstyle.css') }}" rel="stylesheet">
    @else
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
    @endif
    @if(Config::get('features.livewire'))
        @livewireStyles
    @endif

    {{-- Scripts --}}
    {{-- Check https://code.jquery.com/ for new jquery version --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- Bootstrap 5 javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script> {{-- bootstrap-select --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/i18n/defaults-de_DE.min.js"></script> {{-- bootstrap-select language --}}

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/ico" sizes="16x16">
</head>
<body>
@if(Config::get('features.livewire'))
    {{-- @livewireScripts has to be on the beginning of the body tag, because it has to be before the dynamic content (@yield('content)) --}}
    @livewireScripts
@endif

@if(Config::get('features.cookie_explanation') && Cookie::get(env('APP_NAME') . '_explanation') != 1)
    @include('partials.cookie_explanation')
@endif

<div id="page-container">
    <nav class="navbar navbar-expand-sm header-line mb-2">
        <div id="content" class="container">
            <a class="navbar-brand" href="{{ route('overview') }}">
                @if(Config::get('features.new_design') && Cookie::get(env('APP_NAME') . '_design') != 1)
                    @php $logo = asset('/img/logo_trans.png') @endphp
                @else
                    @php $logo = asset('/img/logo.png') @endphp
                @endif
                    <img src="{{ $logo }}" height="28" alt=""> @lang('general.main-title')
            </a>
            <div class="text-end">
                {{-- Delete cookie --}}
                @if(Config::get('features.cookie_explanation'))
                    <span id="design-switch">
                        <a class="not-link-like-header not-link-like" data-bs-toggle="tooltip" data-bs-placement="bottom" title="@lang('general.tooltip-delete-cookie')" href="{{ route('forget-explanation') }}"><x-icon type="cookie"/></a>
                        &nbsp;
                    </span>
                @endif
                {{-- Design switch --}}
                @if(Config::get('features.new_design') && Config::get('features.design_switch'))
                    <span id="design-switch">
                        {{-- If design cookie is set or not --}}
                        @if(Cookie::get(env('APP_NAME') . '_design') == 1)
                            @php $cookieRoute = 'forget-layout' @endphp
                        @else
                            @php $cookieRoute = 'set-layout' @endphp
                        @endif
                        <a class="not-link-like-header not-link-like" data-bs-toggle="tooltip" data-bs-placement="bottom" title="@lang('general.tooltip-design-switch')" href="{{ route($cookieRoute) }}"><x-icon type="design"/></a>
                        &nbsp;
                    </span>
                @endif
                {{-- Language switch --}}
                @if(Config::get('features.translation_flag'))
                    <span id="language-flag">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="@lang('general.tooltip-language-switch')" href="{{ route('lang-switch', $lang) }}"> {!! $language !!}</a>
                            @endif
                        @endforeach
                    </span>
                @endif
                {{-- Logout button --}}
                @if(Config::get('features.logout_button'))
                    <span id="logout">
                        <a href="{{ ShibbolethHelper::logoutURL() }}" class="btn btn-sm btn-light not-link-like"><x-icon type="logout"/> @lang('general.logout')</a>
                    </span>
                @endif
            </div>
        </div>
    </nav>

    <div id="page-content">

        {{-- If javascript is disabled --}}
        <noscript>
            <div class="container">
                {!! HtmlHelper::alert('danger', __('errors.no-javascript')) !!}
            </div>
        </noscript>

        <div class="container">
            {{-- Breadcrumb --}}
            {!! Breadcrumbs::render() !!}
            @yield('content')
        </div>

    </div>

    <footer id="footer" class="mt-4">
        {{-- <div class="container"> --}}
            <p class="footer-1 text-center">
                <small>
                    @lang('general.support-note', ['email' => 'raphael.wudy94@web.de'])
                </small>
            </p>
            <div class="footer-2 pb-2">
                <div class="text-center"><small>@lang('general.copyright', ['date' => date("Y")])</small></div>
            </div>
        {{-- </div> --}}
    </footer>
</div>

{{-- Javascript --}}
@if(Config::get('features.tooltips'))
    @include('javascripts.tooltip')
@endif
</body>
</
