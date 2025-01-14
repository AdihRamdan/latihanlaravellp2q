<x-auth.layout>
    @slot('title')
    @endslot

    <main class="main" id="top">
        <div class="row vh-100 g-0">
            <div class="col-lg-6 position-relative d-none d-lg-block">
                <div class="bg-holder" style="background-image:url({{ asset('backend') }}/assets/img/bg/30.png);">
                </div>
                <!--/.bg-holder-->
            </div>
            <div class="col-lg-6">
                <div class="row flex-center h-100 g-0 px-4 px-sm-0">
                    <div class="col col-sm-6 col-lg-7 col-xl-6">
                        <a class="d-flex flex-center text-decoration-none mb-4" href="{{ asset('backend') }}/index.html">
                            <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                <img src="{{ asset('backend') }}/assets/img/icons/logo.png" alt="phoenix"
                                    width="58" />
                            </div>
                        </a>
                        <div class="text-center mb-7">
                            <h3 class="text-body-highlight">Forgot Your Password?</h3>
                            <p class="text-body-tertiary">No problem. Just let us know your email address and we will
                                email you a password reset link.</p>
                        </div>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3 text-start">
                                <label class="form-label" for="email">Email address</label>
                                <div class="form-icon-container">
                                    <input class="form-control form-icon-input" id="email" name="email"
                                        type="email" placeholder="name@example.com" required autofocus />
                                    <span class="fas fa-user text-body fs-9 form-icon"></span>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <button class="btn btn-primary w-100 mb-3" type="submit">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                        <div class="text-center">
                            <a class="fs-9 fw-bold" href="{{ route('login') }}">Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-auth.layout>
