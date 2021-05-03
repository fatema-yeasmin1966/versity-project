<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        @if(Auth::check())
            <div class="user-profile">
                <div class="user-pro-body">
                    <div><img src="{{ asset($user->avatar ?? 'assets/backend/images/user.png') }}" alt="" class="img-circle"></div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                           data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}<span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="{{ route('profile') }}" class="dropdown-item"><i class="ti-user"></i> My
                                Profile</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:0" class="dropdown-item logout-btn"><i class="fas fa-power-off"></i>
                                Logout</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
            </div>
    @endif
    <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(auth()->user()->type == 'Doctor')
                {{-- Corona Doctor --}}

                @endif

                @if(auth()->user()->type == 'Admin')
                {{-- Admin --}}

                @endif
                <br>
                <br>
                <br>
                <br>
                <br>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
