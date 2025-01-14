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
                            <h3 class="text-body-highlight">Verify Your Email</h3>
                            <p class="text-body-tertiary">Thanks for signing up! Before getting started, could you
                                verify your email address by clicking on the link we just emailed to you? If you didn't
                                receive the email, we will gladly send you another.</p>
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="row flex-between-center mb-7">
                            <div class="col-auto">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button class="btn btn-primary w-100 mb-3" type="submit">
                                        {{ __('Resend Verification Email') }}
                                    </button>
                                </form>
                            </div>
                            <div class="col-auto">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary w-100 mb-3">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-auth.layout>
