@extends('layouts.guest')
@section('titlepage')
    Login 
@endsection
@section('contentpage')

<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title fw-bold mb-1 text-center">Welcome to Finance!</h2>
        <p class="card-text mb-2 text-center">Please sign-in to your account and start the adventure</p>
        <form class="auth-login-form mt-2" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-1">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" type="text" name="email" placeholder="john@example.com" aria-describedby="email" autofocus="" tabindex="1" />
                <x-input-error :messages="$errors->get('email')"/>
            </div>
            <div class="mb-1">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="{{route('forgot')}}"><small>Forgot Password?</small></a>
                </div>
                <div class="input-group d-flex flex-column">
                    <input class="form-control w-100" id="password" type="password" name="password" placeholder="············" aria-describedby="password" tabindex="2" />
                    <x-input-error :messages="$errors->get('password')"/>
                </div>
            </div>
            <button class="btn btn-primary w-100 my-2" tabindex="4">Sign in</button>
        </form>
        <p class="text-center mt-2">
            <span>New on our platform? </span>
            <a href="{{route('register')}}">
                <span> Create an account</span>
            </a>
        </p>
    </div>
</div>

@endsection