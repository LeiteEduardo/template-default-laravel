@extends('layouts.guest')
@section('titlepage')
    Reset Password 
@endsection
@section('contentpage')
<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title fw-bold mb-1 text-center">Reset Password 🔒</h2>
        <p class="card-text mb-2 text-center">Your new password must be different from previously used passwords</p>
        <form class="auth-reset-password-form mt-2" action="{{ route('reset.password') }}" method="POST">
            @csrf
            <input name="token" type="hidden" value="{{ $token }}">
            <div class="mb-1">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" type="text" name="email" placeholder="john@example.com" aria-describedby="email" autofocus="" tabindex="1" />
                <x-input-error :messages="$errors->get('email')"/>
            </div>
            <div class="mb-1">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">New Password</label>
                </div>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="password" autofocus="" tabindex="1" />
                </div>
            </div>
            <div class="mb-1">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                </div>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" id="password_confirmation" type="password" name="password_confirmation" placeholder="············" aria-describedby="password_confirmation" tabindex="2" />
                </div>
            </div>
            <button class="btn btn-primary w-100" tabindex="3">Set New Password</button>
        </form>
        <p class="text-center mt-2"><a href="{{ route('login') }}"><i data-feather="chevron-left"></i> Back to login</a></p>
    </div>
</div>

@endsection