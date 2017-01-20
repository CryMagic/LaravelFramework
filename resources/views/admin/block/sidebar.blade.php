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
                <a href="index-ecommerce.html">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-cubes"></i>
                    <span class="title">Products</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-products.html">All Products</a>
                    </li>
                    <li>
                        <a class="" href="eco-product-add.html">Add Product</a>
                    </li>
                    <li>
                        <a class="" href="eco-product-edit.html">Edit Product</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-dollar "></i>
                    <span class="title">Billing</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-invoices.html">All Invoices</a>
                    </li>
                    <li>
                        <a class="" href="eco-invoice-add.html">Add Invoice</a>
                    </li>
                    <li>
                        <a class="" href="eco-invoice-edit.html">Edit Invoice</a>
                    </li>
                    <li>
                        <a class="" href="eco-invoice-view.html">View Invoice</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span class="title">Customers</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-customers.html">All Customers</a>
                    </li>
                    <li>
                        <a class="" href="eco-customer-add.html">Add Customer</a>
                    </li>
                    <li>
                        <a class="" href="eco-customer-edit.html">Edit Customer</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span class="title">Vendors</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-vendors.html">All Vendors</a>
                    </li>
                    <li>
                        <a class="" href="eco-vendor-add.html">Add Vendor</a>
                    </li>
                    <li>
                        <a class="" href="eco-vendor-edit.html">Edit Vendor</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">Orders</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-orders.html">All Orders</a>
                    </li>
                    <li>
                        <a class="" href="eco-order-add.html">Add Order</a>
                    </li>
                    <li>
                        <a class="" href="eco-order-edit.html">Edit Order</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span class="title">Users</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-users.html">All Users</a>
                    </li>
                    <li>
                        <a class="" href="eco-user-add.html">Add User</a>
                    </li>
                    <li>
                        <a class="" href="eco-user-edit.html">Edit User</a>
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
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Product Categories</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-categories.html">Product Categories</a>
                    </li>
                    <li>
                        <a class="" href="eco-category-add.html">Add Product Category</a>
                    </li>
                    <li>
                        <a class="" href="eco-category-edit.html">Edit Product Category</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-tags"></i>
                    <span class="title">Product Tags</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="eco-tags.html">All Product Tags</a>
                    </li>
                    <li>
                        <a class="" href="eco-tag-add.html">Add Product Tag</a>
                    </li>
                    <li>
                        <a class="" href="eco-tag-edit.html">Edit Product Tag</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="eco-account-settings.html">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Settings</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-suitcase"></i>
                    <span class="title">Multi Purpose</span>
                    <span class="arrow "></span><span class="label label-accent">HOT</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="general.html" target='_blank'>General Admin</a>
                    </li>
                    <li>
                        <a class="" href="hospital.html" target='_blank'>Hospital Admin</a>
                    </li>
                    <li>
                        <a class="" href="music.html" target='_blank'>Music Admin</a>
                    </li>
                    <li>
                        <a class="" href="crm.html" target='_blank'>CRM Admin</a>
                    </li>
                    <li>
                        <a class="" href="socialmedia.html" target='_blank'>Social Media Admin</a>
                    </li>
                    <li>
                        <a class="" href="freelancing.html" target='_blank'>Freelancing Admin</a>
                    </li>
                    <li>
                        <a class="" href="university.html" target='_blank'>University Admin</a>
                    </li>
                    <li>
                        <a class="" href="ecommerce.html" target='_blank'>Ecommerce Admin</a>
                    </li>
                    <li>
                        <a class="" href="blog.html" target='_blank'>Blog Admin</a>
                    </li>
                </ul>
            </li>

        </ul>

        <div class="menustats">
            <h5>Project Progress</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                </div>
            </div>
            <h5>Target Achieved</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-accent" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                </div>
            </div>
        </div>

    </div>
    <!-- MAIN MENU - END -->
</div>