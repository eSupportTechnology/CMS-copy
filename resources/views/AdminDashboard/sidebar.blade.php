<!-- Page Sidebar Start -->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <!-- Logo Section -->
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard') }}">
                <img class="img-fluid for-light" src="{{ asset('frontend/assets/images/logo.png') }}" alt="Logo">
                <img class="img-fluid for-dark" src="{{ asset('frontend/assets/images/logo.png') }}" alt="Logo Dark">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            
        </div>

        <div class="logo-icon-wrapper">
            <a href="index.html"><img class="img-fluid" src="frontend/assets/images/logo/logo-icon.png" alt=""></a>
        </div>
        <nav class="sidebar-main ">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ route('admin') }}">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                        </a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>

                    <!-- Dashboard -->
                    <li class="sidebar-list mt-5" >
                        <a class="sidebar-link sidebar-title" href="{{ route('admin') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.dashboard') }}">AdminDashboard</a></li>
                        </ul>
                    </li>


                    <!-- Customer Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('admin') }}">
                            <i class="fa fa-users"></i> <!-- Corrected Icon -->
                            <span>Customer Management</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.customers.index') }}">All Customers</a></li>
                        </ul>
                    </li>

                    <!-- Booking Requests -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                        <i class="fa fa-file-text"></i> <!-- Corrected Icon -->
                            <span>Booking Requests</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.orders.pending') }}">Pending Orders</a></li>
                            <li><a href="{{ route('admin.orders.half') }}">Half Orders</a></li>
                            <li><a href="{{ route('admin.orders.success') }}">Success Orders</a></li>
                        </ul>
                    </li>

                    <!-- Course Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('admin') }}">
                            <i class="fa fa-book"></i> <!-- Corrected Icon -->
                            <span>Courses Management</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('courses.index') }}">All Courses</a></li>
                            <li><a href="{{ route('courses.create') }}">Add Courses</a></li>
                        </ul>
                    </li>

                    <!-- Batches -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <i class="fa fa-list-alt"></i>
                            <span>Batches</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.batches.index') }}">All Batches</a></li>
                            <li><a href="{{ route('admin.batches.create') }}">Add New Batch</a></li>
                        </ul>
                    </li>

                    <!-- Course File Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('admin') }}">
                            <i class="fa fa-folder-open"></i> <!-- Corrected Icon -->
                            <span>Courses Links</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('courseFile.index') }}">All Courses Files</a></li>
                        </ul>
                    </li>

                    <!-- Branch Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('admin') }}">
                            <i class="fa fa-building"></i> <!-- Corrected Icon -->
                            <span>Branches</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('branches.index') }}">All Branches</a></li>
                            <li><a href="{{ route('branches.create') }}">Create Branches</a></li>
                        </ul>
                    </li>

                    <!-- Vip Packages -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                        <i class="fa fa-gift"></i> <!-- Corrected Icon -->
                            <span>Vip Packages</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('vip-packages.index') }}">All Packages</a></li>
                            <li><a href="{{ route('vip-packages.create') }}">Add Packages</a></li>
                        </ul>
                    </li>

                    <!-- You Tube Videos -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                        <i class="fa fa-youtube"></i> <!-- Corrected Icon -->
                            <span>You-Tube Videos </span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.youtube-videos.index') }}">All Packages</a></li>
                        </ul>
                    </li>

                    <!-- Reviews -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <i class="fa fa-star"></i>
                            <span>Reviews</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.reviews.index') }}">All Reviews</a></li>
                        </ul>
                    </li>

                    <!-- Blog Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <i class="fa fa-edit"></i>
                            <span>Blogs</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.blogs.index') }}">All Blogs</a></li>
                            <li><a href="{{ route('admin.blogs.create') }}">Add New Blog</a></li>
                        </ul>
                    </li>

                    <!-- Ad Banners -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <i class="fa fa-image"></i>
                            <span>Ad Banners</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.adbanners.index') }}">All Banners</a></li>
                            <li><a href="{{ route('admin.adbanners.create') }}">Add New Banner</a></li>
                        </ul>
                    </li>


                    <!-- Settings -->
                    <li class="sidebar-list mb-5">
                        <a class="sidebar-link sidebar-title" href="#">
                            <i class="fa fa-cog"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="sidebar-submenu mb-5">
                            <li><a href="{{ route('admin.banners.index') }}">Manage Banners</a></li>
                            <li><a href="{{ route('admin.employees.index') }}">Manage Employees</a></li>
                        </ul>
                    </li>


                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var sidebarTitles = document.querySelectorAll(".sidebar-title");

        sidebarTitles.forEach(function (title) {
            title.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent default action

                let submenu = this.nextElementSibling; // Get the submenu
                if (submenu && submenu.classList.contains("sidebar-submenu")) {
                    submenu.classList.toggle("d-block"); // Toggle visibility
                }
            });
        });
    });
</script>
