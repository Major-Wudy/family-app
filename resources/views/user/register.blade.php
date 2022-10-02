@extends('layouts.app')
@section('title', __('register.title'))
@section('content')

@include('partials.headline', ['headline' => __('register.title')])

<form action="{{ route('sign-up') }}" method="POST">

    <div class="row">
        <div class="col p-4 border border-dark rounded">
            <div class="form-group text-center">
                <x-icon type="register" :size="64"/>
            </div>
            <div class="col">
                <div class="row g-4">
                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input id="username" name="username" class="form-control" type="text" value="{{ old('username') }}" placeholder="@lang('register.placeholder-user')">
                            <label for="username" >@lang('register.placeholder-user'):</label>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="col">
                            <div class="form-floating">
                                <input id="password" name="password" class="form-control" type="password" value="" placeholder="@lang('register.placeholder-password')">
                                <label for="password">@lang('register.placeholder-password'):</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-end">
                                <div class="input-group mb-4 justify-content-end">
                                    <a id="show_pw" class="btn btn-link text-dark" onclick="pw_visible()">@lang('register.show-pw')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- //TODO Convert into select with options read from DB --}}
                    <div class="col-lg-3">
                        <div class="form-floating">
                            <input id="role" name="role" class="form-control" type="text" value="" placeholder="@lang('register.placeholder-role')">
                            <label for="role">@lang('register.placeholder-role'):</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-floating">
                            <input id="email" name="email" class="form-control" type="email" value="{{ old('email') }}" placeholder="@lang('register.placeholder-email')">
                            <label for="email">@lang('register.placeholder-email'):</label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="input-group mt-4 d-grid gap-4">
                <button class="btn btn-success" type="submit"><x-icon type="send"/>@lang('register.submit')</button>
            </div>
            <div class="form-group text-center">
                <a href="{{ route('login') }}">@lang('register.login')</a>
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
