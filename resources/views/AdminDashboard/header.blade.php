<!-- Page Header Start-->
<div class="page-header">
    <div class="header-wrapper row m-0">

        <!-- Search Bar -->
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search..." name="q" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                        <i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>

        <!-- Logo Section -->
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper">
                <a href="{{ route('admin.dashboard') }}">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="">
                </a>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>

        <!-- Right Header Content -->
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">

                <!-- Website Link -->
                <li class="nav-item">
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-primary btn-sm">
                        <i data-feather="globe"></i> Website
                    </a>
                </li>

                <!-- Theme Mode Toggle -->
                <li>
                    <div class="mode">
                        <svg>
                            <use href="{{ asset('frontend/assets/svg/icon-sprite.svg#moon') }}"></use>
                        </svg>
                    </div>
                </li>

                <!-- Profile Dropdown -->
                <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="media profile-media">
                        
                        <div class="media-body">
                            @if(Auth::guard('employee')->check())
                                <span>{{ Auth::guard('employee')->user()->name }}</span>
                                <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                            @else
                                <span>Guest</span>
                            @endif
                        </div>
                    </div>

                    <ul class="profile-dropdown onhover-show-div">
                        
                        <li>
                            <a href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-feather="log-out"></i><span>Log out</span>
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Header Ends -->
