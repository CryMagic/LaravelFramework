<div class="page-sidebar pagescroll">

    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">

        <!-- USER INFO - START -->
        <div class="profile-info row">
            @if(Auth::check())
            <div class="profile-image col-xs-4">
                <a href="ui-profile.html">
                    <img alt="" src="{{ url('images/user/',Auth::user()->avatar) }}" class="img-responsive img-circle">
                </a>
            </div>

            <div class="profile-details col-xs-8">

                <h3>
                    <a href="ui-profile.html">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a>

                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>

                <p class="profile-title">FullStack Developer</p>

            </div>
            @endif

        </div>
        <!-- USER INFO - END -->



        <ul class='wraplist'>
            <li class="open">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('category.index') }}">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Danh mục sản phẩm</span>
                    <span class="arrow "></span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('product.index') }}">
                    <i class="fa fa-cubes"></i>
                    <span class="title">Sản phẩm</span>
                    <span class="arrow "></span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('method-payment.index') }}">
                    <i class="fa fa-money"></i>
                    <span class="title">Phương thức thanh toán</span>
                    <span class="arrow "></span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-dollar "></i>
                    <span class="title">Thanh toán</span>
                    <span class="arrow "></span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span class="title">Khách hàng</span>
                    <span class="arrow "></span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('supply.index') }}">
                    <i class="fa fa-users"></i>
                    <span class="title">Nhà cung cấp</span>
                    <span class="arrow "></span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">Đơn Hàng</span>
                    <span class="arrow "></span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span class="title">Tài khoản người dùng</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="{{ route('user.index') }}">Danh sách tài khoản</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('user.create') }}">Thêm mới tài khoản</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Messaging</span>
                    <span class="arrow "></span><span class="label label-accent">4</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-mail-inbox.html">Inbox</a>
                    </li>
                    <li>
                        <a class="" href="eco-mail-compose.html">Compose</a>
                    </li>
                    <li>
                        <a class="" href="eco-mail-view.html">View</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-bar-chart"></i>
                    <span class="title">Reports</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-report-site.html">Site</a>
                    </li>
                    <li>
                        <a class="" href="eco-report-visitors.html">Visitors</a>
                    </li>
                    <li>
                        <a class="" href="eco-report-statistics.html">Statistics</a>
                    </li>
                </ul>
            </li>
                    </ul>

        </div>
    <!-- MAIN MENU - END -->
</div>