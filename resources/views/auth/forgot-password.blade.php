@extends('layouts.frontend.app')
@push('title') Forgot Password @endpush
@push('style')

@endpush
@section('content')
    <div class="section-full  p-t80 p-b50">
        <div class="section-content">
            <div class="container">
                <div class="contact-one">
                    <!-- CONTACT FORM-->
                    <div class="row  d-flex justify-content-center flex-wrap">
                        <div class="col-lg-12">
                            <form class="" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="section-head left wt-small-separator-outer text-center">
                                    <br><br>
                                    <h2>Forgot Password</h2>
                                </div>
                                <!-- TITLE END -->
                                <div class="shadow p-a30 bg-white radius-lg contact-form-1">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input name="email" value="{{ old('email') }}" type="email" required="" class="form-control" placeholder="Email address">
                                                @error('email')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="site-button">Reset Password <span></span></button>
                                        </div>
                                        <div class="row col-lg-12 col-md-12 d-flex justify-content-between">
                                            <div>
                                                @if(Route::has('register'))
                                                    Don't have an account? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
                                                @endif
                                            </div>
                                            <div>
                                                @if(Route::has('login'))
                                                    Remember your password? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Login</b></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
@push('script')

@endpush
