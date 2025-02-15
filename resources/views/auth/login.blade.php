<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    @include('backend.partials.style')
</head>

<body id="kt_body" class="auth-bg" style="background: #3B82F6">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto bg-white" style="border-radius: 15px">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                            action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="text-center mb-10">
                                <h1 class="text-dark mb-3"> Sign In </h1>
                                {{-- <div class="text-gray-400 fw-semibold fs-4">
                                    New Here?

                                    <a href="{{ route('register') }}" class="link-primary fw-bold">
                                        Create an Account
                                    </a>
                                </div> --}}
                            </div>
                            <div class="fv-row mb-10">
                                @if (session('status'))
                                    {{ session('status') }}
                                @endif
                            </div>
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bold text-dark">Email</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('email')  @enderror"
                                    type="email" name="email" value="{{ old('email') }}" autocomplete="off" />
                                @error('email')
                                    <span class="d-block text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                                    {{-- <a href="password-reset.html" class="link-primary fs-6 fw-bold">
                                        Forgot Password ?
                                    </a> --}}
                                </div>
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    name="password" autocomplete="off" />
                                @error('password')
                                    <span class="d-block text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">
                                        Log In
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.partials.script')
</body>

</html>
