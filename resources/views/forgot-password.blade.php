@extends('layout')
@section('content')

<div class="authentication-wrapper authentication-cover">
    <a href="{{ route('home') }}" class="auth-cover-brand d-flex align-items-center gap-2">
        <span class="app-brand-logo demo">
            <span style="color: var(--bs-primary)">
                <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z" fill="currentColor" />
                </svg>
            </span>
        </span>
        <span class="app-brand-text demo text-heading fw-semibold">Materialize</span>
    </a>

    <div class="authentication-inner row m-0">
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2">
            <img src="{{ asset('assets/img/illustrations/auth-forgot-password-illustration-light.png') }}" class="auth-cover-illustration w-100" alt="auth-illustration" />
            <img src="{{ asset('assets/img/illustrations/auth-cover-forgot-password-mask-light.png') }}" class="authentication-image" alt="mask" />
        </div>

        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
            <div class="w-px-400 mx-auto">
                <h4 class="mb-1">Forgot Password? 🔒</h4>
                <p class="mb-5">Enter your email and we'll send you instructions to reset your password</p>
                <form id="formAuthentication" class="mb-5" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="form-floating form-floating-outline mb-5">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus />
                        <label for="email">Email</label>
                    </div>
                    <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
                </form>
                <div class="text-center">
                    <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                        <i class="ri-arrow-left-s-line scaleX-n1-rtl ri-20px me-1_5"></i>
                        Back to login
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/pages-auth.js') }}"></script>

@endsection
