@extends('layout')
@section('content')

<div class="authentication-wrapper authentication-cover">
    <a href="/" class="auth-cover-brand d-flex align-items-center gap-2">
        <span class="app-brand-logo demo">
            <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z" fill="currentColor" />
            </svg>
        </span>
        <span class="app-brand-text demo text-heading fw-semibold">Materialize</span>
    </a>

    <div class="authentication-inner row m-0">
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2">
            <img src="/assets/img/auth-register-light.png" class="auth-cover-illustration w-100" alt="auth-illustration" />
            <img src="/assets/img/auth-cover-mask-light.png" class="authentication-image" alt="mask" />
        </div>

        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6">
            <div class="w-px-400 mx-auto pt-5 pt-lg-0">
                <h4 class="mb-1">Adventure starts here 🚀</h4>
                <p class="mb-5">Make your app management easy and fun!</p>

                <form id="formAuthentication" class="mb-5" action="/register" method="POST">
                    @csrf
                    <div class="form-floating form-floating-outline mb-5">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username" autofocus />
                        <label for="name">Name</label>
                    </div>
                    </div>
                    <div class="form-floating form-floating-outline mb-5">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-5">
                        <input type="text" class="form-control" id="cpfcnpj" name="cpfcnpj" placeholder="Enter your cpfcnpj" />
                        <label for="cpfcnpj">CPF ou CNPJ</label>
                    </div>
                    <div class="mb-5 form-password-toggle">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="password" id="password" class="form-control" name="password" placeholder="********" />
                                <label for="password">Password</label>
                            </div>
                            <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                            <label class="form-check-label" for="terms-conditions">
                                I agree to <a href="/terms">privacy policy & terms</a>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary d-grid w-100">Sign up</button>
                </form>

                <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="/login">Sign in instead</a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
