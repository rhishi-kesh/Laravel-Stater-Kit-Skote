@extends('backend.app')

@section('title', 'Mail settings')

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bold my-1 fs-2">
                    Dashboard <small class="text-muted fs-6 fw-normal ms-1"></small>
                </h1>
                <!--end::Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-semibold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">
                            Home </a>
                    </li>

                    <li class="breadcrumb-item text-muted"> Setting </li>
                    <li class="breadcrumb-item text-muted"> Mail Setting </li>

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Toolbar-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-4">
                    <div class="card card-body">
                        <form method="POST" action="{{ route('mail.update') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <div class="input-style-1">
                                        <label for="mail_mailer">MAIL MAILER:</label>
                                        <input type="text" placeholder="Enter mail mailer" id="mail_mailer"
                                            class="form-control @error('mail_mailer') is-invalid @enderror" name="mail_mailer"
                                            value="{{ env('MAIL_MAILER') }}" />
                                        @error('mail_mailer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="input-style-1">
                                        <label for="mail_host">MAIL HOST:</label>
                                        <input type="text" placeholder="Enter mail host" id="mail_host"
                                            class="form-control @error('mail_host') is-invalid @enderror" name="mail_host"
                                            value="{{ env('MAIL_HOST') }}" />
                                        @error('mail_host')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="input-style-1">
                                        <label for="mail_port">MAIL PORT:</label>
                                        <input type="text" placeholder="Enter mail port" id="mail_port"
                                            class="form-control @error('mail_port') is-invalid @enderror" name="mail_port"
                                            value="{{ env('MAIL_PORT') }}" />
                                        @error('mail_port')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="input-style-1">
                                        <label for="mail_username">MAIL USERNAME:</label>
                                        <input type="text" placeholder="Enter mail username" id="mail_username"
                                            class="form-control @error('mail_username') is-invalid @enderror"
                                            name="mail_username" value="{{ env('MAIL_USERNAME') }}" />
                                        @error('mail_username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="input-style-1">
                                        <label for="mail_password">MAIL PASSWORD:</label>
                                        <input type="text" placeholder="Enter mail password" id="mail_password"
                                            class="form-control @error('mail_password') is-invalid @enderror"
                                            name="mail_password" value="{{ env('MAIL_PASSWORD') }}" />
                                        @error('mail_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="input-style-1">
                                        <label for="mail_encryption">MAIL ENCRYPTION:</label>
                                        <input type="text" placeholder="Enter mail encryption" id="mail_encryption"
                                            class="form-control @error('mail_encryption') is-invalid @enderror"
                                            name="mail_encryption" value="{{ env('MAIL_ENCRYPTION') }}" />
                                        @error('mail_encryption')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="input-style-1">
                                        <label for="mail_from_address">MAIL FROM ADDRESS:</label>
                                        <input type="text" placeholder="Enter mail from address" id="mail_from_address"
                                            class="form-control @error('mail_from_address') is-invalid @enderror"
                                            name="mail_from_address" value="{{ env('MAIL_FROM_ADDRESS') }}" />
                                        @error('mail_from_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-danger me-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
