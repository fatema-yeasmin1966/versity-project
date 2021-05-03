<header class="site-header header-style-4 mobile-sider-drawer-menu">

    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">
            <div class="container clearfix">

                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="index.html">
                            <img src="images/logo-dark.png" alt="" />
                        </a>
                    </div>
                </div>

                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>

                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">

                        <div class="header-nav-request">
                            <a href="{{ route('login') }}" class="contact-slide-show site-button-secondry-outline button-sm"> @if(auth()->check()) {{  auth()->user()->name }} @else Login Now @endif</a>
                        </div>

                    </div>

                </div>


                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                    <ul class=" nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                    </ul>

                </div>

            </div>
        </div>

    </div>

</header>
