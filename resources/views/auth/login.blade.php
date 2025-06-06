<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    @include('backend.partials.style')
</head>

<body>
    <div class="my-5 account-pages pt-sm-5">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 80vh">
                <div style="width: 500px">
                    <div class="overflow-hidden card">
                        <div class="pt-0 card-body">
                            <div class="px-2 py-4">
                                <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-10 text-center">
                                        <h1 class="mb-3 text-dark"> Sign In </h1>
                                    </div>

                                    <div class="mb-10 fv-row">
                                        @if (session('status'))
                                            {{ session('status') }}
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label fs-5">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                                        @error('email')
                                            <span class="d-block text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fs-5">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button" id="password-addon">
                                                <i class="mdi mdi-eye-outline"></i>
                                            </button>
                                        </div>
                                        @error('password')
                                            <span class="d-block text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mt-4 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="p-10 mx-auto bg-white w-lg-500px p-lg-15" style="border-radius: 15px">
                                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                    action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-10 text-center">
                                        <h1 class="mb-3 text-dark"> Sign In </h1>
                                    </div>
                                    <div class="mb-10 fv-row">
                                        @if (session('status'))
                                            {{ session('status') }}
                                        @endif
                                    </div>
                                    <div class="mb-10 fv-row">
                                        <label class="form-label fs-6 fw-bold text-dark">Email</label>
                                        <input
                                            class="form-control form-control-lg form-control-solid @error('email')  @enderror"
                                            type="email" name="email" value="{{ old('email') }}" autocomplete="off" />
                                        @error('email')
                                            <span class="d-block text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-10 fv-row">
                                        <div class="mb-2 d-flex flex-stack">
                                            <label class="mb-0 form-label fw-bold text-dark fs-6">Password</label>
                                        </div>
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            name="password" autocomplete="off" />
                                        @error('password')
                                            <span class="d-block text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" id="kt_sign_in_submit" class="mb-5 btn btn-lg btn-primary w-100">
                                            <span class="indicator-label">
                                                Log In
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.partials.script')
</body>

</html>
