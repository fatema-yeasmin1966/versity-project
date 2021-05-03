@extends('layouts.frontend.app')
@push('title') Login @endpush
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
                            <form class="" method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="section-head left wt-small-separator-outer text-center">
                                    <br><br>
                                    <h2>Login</h2>
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

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input name="password" type="password" class="form-control" required="" placeholder="Password">
                                                @error('password')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="site-button">Login <span></span></button>
                                        </div>
                                        <div class="row col-lg-12 col-md-12 d-flex justify-content-between">
                                            <div>
                                                @if(Route::has('register'))
                                                    Don't have an account? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
                                                @endif
                                            </div>
                                            <div>
                                                @if(Route::has('password.request'))
                                                    Did you forget your password? <a href="{{ route('password.request') }}" class="text-info m-l-5"><b>Recover</b></a>
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
