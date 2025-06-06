@extends('backend.app')

@section('title', 'Profile settings')

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
                    <li class="breadcrumb-item text-muted"> Profile </li>

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
                <div class="card-style settings-card-1 mb-30">
                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                        <h4>My Profile</h4>
                    </div>
                    <div class="profile-info">
                        <div class="d-flex align-items-center mb-30">

                            <div class="profile-image">
                                <img id="profile-picture"
                                    src="{{ asset(Auth::user()->avatar ?? 'backend/images/profile.jpeg') }}"
                                    alt="Profile Picture">


                                <div class="update-image">
                                    <input type="file" name="profile_picture" id="profile_picture_input"
                                        style="display: none;">
                                    <label for="profile_picture_input"><i class="lni lni-cloud-upload"></i></label>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body mt-4">
                            <form method="POST" action="{{ route('update.profile') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <div class="input-style-1">
                                            <label for="name">User Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" id="name" value="{{ Auth::user()->name }}"
                                                placeholder="Full Name" />
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <div class="input-style-1">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" name="email" id="email"
                                                value="{{ Auth::user()->email }}" />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <hr class="mb-30">
                        <div class="mt-30 mb-5">
                            <h3>Update Your Password</h3>
                        </div>

                        <div class="card card-body">
                            <form method="POST" action="{{ route('update.Password') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <div class="input-style-1">
                                            <label for="old_password">Current Password</label>
                                            <input type="password"
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                placeholder="Current Password" name="old_password" id="old_password" />
                                            @error('old_password')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <div class="input-style-1">
                                            <label for="password">New Password</label>
                                            <input type="password"
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                placeholder="New Password" name="password" id="password" />
                                            @error('password')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <div class="input-style-1">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password"
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                placeholder="Confirm Password" name="password_confirmation"
                                                id="password_confirmation" />
                                            @error('password_confirmation')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('admin.dashboard') }}" class="btn btn-danger me-2">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        $(document).ready(function() {
            $('#profile_picture_input').change(function() {
                const formData = new FormData();
                formData.append('profile_picture', $(this)[0].files[0]);
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    url: '{{ route('update.profile.picture') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.success) {
                            $('#profile-picture').attr('src', data.image_url);
                            toastr.success('Profile picture updated successfully.');
                        } else {
                            toastr.error(data.message);
                        }
                    },
                    error: function() {
                        toastr.error(data.message);
                    }
                });
            });
        });
    </script>
@endpush
