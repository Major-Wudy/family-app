@extends('layouts.app')
@section('title', __('register.title'))
@section('content')

@include('partials.headline', ['headline' => __('register.title')])

<form action="{{ route('sign-up') }}" method="POST">

    <div class="row">
        <div class="col-md p-4 border border-dark rounded">
            <div class="form-group text-center">
                <x-icon type="register" :size="64"/>
            </div>
            <div class="row g-3">
                <div class="col-lg-2">
                    <div class="form-floating">
                        <input id="username" name="username" class="form-control" type="text" value="{{ old('username') }}" placeholder="@lang('login.placeholder-user')">
                        <label for="username" >@lang('login.placeholder-user'):</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-floating">
                        <input id="password" name="password" class="form-control" type="password" value="" placeholder="@lang('login.placeholder-password')">
                        <label for="password">@lang('login.placeholder-password'):</label>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-floating">
                        <input id="role" name="role" class="form-control" type="text" value="" placeholder="@lang('login.placeholder-role')">
                        <label for="role">@lang('login.placeholder-role'):</label>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-5 d-flex justify-content-end">
                    <div class="input-group mb-4 justify-content-end">
                        <a id="show_pw" class="btn btn-link text-dark" onclick="pw_visible()">@lang('login.show-pw')</a>
                    </div>
                </div>
            </div>
            <div class="input-group mt-4 d-grid gap-4">
                <button class="btn btn-success" type="submit"><x-icon type="send"/>@lang('login.submit')</button>
            </div>
            <div class="form-group text-center">
                <a href="{{ route('register') }}">@lang('login.forgot-pw')</a>
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
