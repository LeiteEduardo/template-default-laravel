@extends('layouts.guest')
@section('titlepage')
    Forgot Password
@endsection
@section('contentpage')

<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title fw-bold mb-1 text-center">Forgot Password? 🔒</h2>
        <p class="card-text mb-2 text-center">Enter your email and we'll send you instructions to reset your password</p>
        <form class="auth-forgot-password-form mt-2" action="{{ route('forgot.password') }}" method="POST">
            @csrf    
            <div class="mb-1">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" type="text" name="email" placeholder="john@example.com" aria-describedby="email" autofocus="" tabindex="1" />
                <x-input-error :messages="$errors->get('email')"/>
            </div>
            <button class="btn btn-primary w-100" tabindex="2">Send reset link</button>
        </form>
        <p class="text-center mt-2">
            <a href="{{ route('login') }}">
                <i data-feather="chevron-left"></i>
                Back to login
            </a>
        </p>
    </div>
</div>

@endsection
