@extends('layouts.app')
@section('title', __('login.title'))
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

<form action="{{ route('login') }}" method="GET">
    <div class="row">
        <div class="col">
            <div class="row justify-content-center">
                <div class="col col-lg-3 p-4 border border-dark rounded">
                    <div class="form-group text-center">
                        <x-icon type="login" :size="64"/>
                    </div>
                    <div class="form-floating">
                        <input id="username" name="username" class="form-control col" type="text" value="" placeholder="@lang('login.placeholder-user')">
                        <label for="username" >@lang('login.placeholder-user'):</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input id="password" name="password" class="form-control" type="password" value="" placeholder="@lang('login.placeholder-password')">
                        <label for="password">@lang('login.placeholder-password'):</label>
                    </div>
                    <div class="input-group mb-4 text-end">
                        <a id="show_pw" class="btn btn-link text-dark" onclick="pw_visible()">@lang('login.show-pw')</a>
                    </div>
                    <div class="input-group mt-4 d-grid gap-4">
                        <button class="btn btn-success" type="submit"><x-icon type="send"/>@lang('login.submit')</button>
                    </div>
                    <div class="form-group text-center">
                        <a href="{{ route('forgot-pw') }}">@lang('login.forgot-pw')</a>
                        <a href="{{ route('register') }}">@lang('login.register')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    
    <script>
        function pw_visible() {
            if($('#password')[0].type == 'password') {
                $('#password')[0].type = 'text';
                $('#show_pw')[0].textContent = 'Passwort ausblenden';
            } else {
                $('#password')[0].type = 'password';
                $('#show_pw')[0].textContent = 'Passwort anzeigen';
            }
        }
    </script>
@endsection
