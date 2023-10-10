@extends('layouts.guest')
@section('titlepage')
    Register 
@endsection
@section('contentpage')

<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title fw-bold mb-1 text-center">Adventure starts here 🚀</h2>
        <p class="card-text mb-2 text-center">Make your app management easy and fun!</p>
        <form class="auth-register-form mt-2" action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-1">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" name="name" placeholder="name" aria-describedby="name" autofocus="" tabindex="1" />
                <x-input-error :messages="$errors->get('name')"/>
            </div>
            <div class="mb-1">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" type="text" name="email" placeholder="name@example.com" aria-describedby="email" tabindex="2" />
                <x-input-error :messages="$errors->get('email')"/>
            </div>
            <div class="mb-1">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge form-password-toggle">
                <input class="form-control w-100" id="password" type="password" name="password" placeholder="············" aria-describedby="password" tabindex="3" />
                    <x-input-error :messages="$errors->get('password')"/>
                </div>
            </div>
            <div class="mb-1">
                <div class="form-check">
                    <input class="form-check-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                    <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;privacy policy & terms</a></label>
                </div>
            </div>
            <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
        </form>
        <p class="text-center mt-2">
            <span>Already have an account? </span>
            <a href="{{route('login')}}">
                <span> Sign in instead</span>
            </a>
        </p>
    </div>
</div>

@endsection