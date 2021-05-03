@extends('layouts.frontend.app')
@push('title') Home @endpush
@push('style')

@endpush
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr bg-center bg-gray" style="background-image:url({{ asset('assets/frontend/images/banner/1.jpg') }});">
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="site-text-primary">Corona Specialist Doctors</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- OUR TEAM START -->
    <div class="section-full p-t80 p-b50 bg-white team-bg-section-outer virus-bg-outer">
        <div class="container">
            <div class="section-content">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer">
                    <h2>Meet Our Best Doctors</h2>
                    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus...</p>
                </div>
                <!-- TITLE END-->
                <div class="section-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">
                                <div class="wt-media site-bg-secondry radius-lg">
                                    <img src="{{ asset('assets/frontend/images/team/pic1.png') }}" alt="">
                                    <div class="team-social-center radius-lg">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30 site-bg-primary  radius-lg">
                                    <div class="team-detail  text-center text-white">

                                        <h4 class="m-t0 team-name"><a href="javascript:0"  class="site-text-white">Malcolm Franzcrip</a></h4>
                                        <span class="team-position">Throat Specialist</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media site-bg-secondry radius-lg">
                                    <img src="{{ asset('assets/frontend/images/team/pic2.png') }}" alt="">
                                    <div class="team-social-center radius-lg">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30 site-bg-primary  radius-lg">
                                    <div class="team-detail  text-center  text-white">

                                        <h4 class="m-t0 team-name"><a href="javascript:0"  class="site-text-white">Froster Collings</a></h4>
                                        <span class="team-position">Senior Virus Expert</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media site-bg-secondry radius-lg">
                                    <img src="{{ asset('assets/frontend/images/team/pic3.png') }}" alt="">
                                    <div class="team-social-center radius-lg">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30 site-bg-primary radius-lg">
                                    <div class="team-detail  text-center  text-white">

                                        <h4 class="m-t0 team-name"><a href="javascript:0" class="site-text-white">Melena Marshall</a></h4>
                                        <span class="team-position">Cardiologist</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media site-bg-secondry radius-lg">
                                    <img src="{{ asset('assets/frontend/images/team/pic4.png') }}" alt="">
                                    <div class="team-social-center radius-lg">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30 site-bg-primary  radius-lg">
                                    <div class="team-detail  text-center text-white">

                                        <h4 class="m-t0 team-name"><a href="javascript:0"  class="site-text-white">Malcolm Franzcrip</a></h4>
                                        <span class="team-position">Throat Specialist</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media site-bg-secondry radius-lg">
                                    <img src="{{ asset('assets/frontend/images/team/pic5.png') }}" alt="">
                                    <div class="team-social-center radius-lg">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30 site-bg-primary  radius-lg">
                                    <div class="team-detail  text-center  text-white">

                                        <h4 class="m-t0 team-name"><a href="javascript:0"  class="site-text-white">Froster Collings</a></h4>
                                        <span class="team-position">Senior Virus Expert</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media site-bg-secondry radius-lg">
                                    <img src="{{ asset('assets/frontend/images/team/pic3.png') }}" alt="">
                                    <div class="team-social-center radius-lg">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30 site-bg-primary radius-lg">
                                    <div class="team-detail  text-center  text-white">

                                        <h4 class="m-t0 team-name"><a href="javascript:0" class="site-text-white">Melena Marshall</a></h4>
                                        <span class="team-position">Cardiologist</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <span class="virus-bg-virus1 floating"><img src="{{ asset('assets/frontend/images/background/v-1.png') }}" alt=""></span>
                    <span class="virus-bg-virus2 floating-2"><img src="{{ asset('assets/frontend/images/background/v-2.png') }}" alt=""></span>
                    <span class="virus-bg-virus3 floating-3"><img src="{{ asset('assets/frontend/images/background/v-3.png') }}" alt=""></span>
                </div>

            </div>
        </div>
    </div>
    <!-- OUR TEAM SECTION END -->
@endsection
@push('script')
    <script>

    </script>
@endpush
