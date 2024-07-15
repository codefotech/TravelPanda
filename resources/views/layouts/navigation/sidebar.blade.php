<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link" style="font-size: 25px;">
            <span class="text-dark fw-bold">TechToTravel &nbsp;</span>
            <i class="fas fa-plane codefotech_text_color"></i>
{{--            <img src="{{ asset('assets-2/img/icons/logo.png') }}" alt="" width="100%">--}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{ url('/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboards</div>
            </a>
        </li>

        <!-- Settings -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx bx-cog"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('/dashboard/settings/general_settings') }}" class="menu-link">
                        <div>General Settings</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/dashboard/settings/email_configuration') }}" class="menu-link">
                        <div>Email Configuration</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/dashboard/settings/payment_configuration') }}" class="menu-link">
                        <div>Payment Configuration</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/dashboard/settings/captcha_configuration') }}" class="menu-link">
                        <div>Captcha Configuration</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Traveller -->
        <li class="menu-item">
            <a href="{{ url('/dashboard/traveller') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-plane-alt"></i>
                <div>Traveller</div>
            </a>
        </li>

        <!-- Destination -->
        <li class="menu-item">
            <a href="{{ url('/dashboard/destination') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-traffic-cone"></i>
                <div>Destination</div>
            </a>
        </li>

        <!-- Package -->
        <li class="menu-item">
            <a href="{{ url('/dashboard/package') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-collection"></i>
                <div>Package</div>
            </a>
        </li>

        <!-- Team Member -->
        <li class="menu-item">
            <a href="{{ url('/dashboard/team_member') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div>Team Member</div>
            </a>
        </li>

        <!-- Slider -->
        <li class="menu-item">
            <a href="{{ url('/dashboard/slider') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-carousel"></i>
                <div>Slider</div>
            </a>
        </li>

        <!-- Testimonial -->
        <li class="menu-item active">
            <a href="{{ url('/dashboard/testimonial') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                <div>Testimonial</div>
            </a>
        </li>

        <!-- Client -->
        <li class="menu-item active">
            <a href="{{ url('/dashboard/client') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-check"></i>
                <div>Client</div>
            </a>
        </li>

        <!-- Service -->
        <li class="menu-item active">
            <a href="{{ url('/dashboard/service') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-wrench"></i>
                <div>Service</div>
            </a>
        </li>

        <!-- Payment -->
        <li class="menu-item active">
            <a href="{{ url('/dashboard/payment') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-badge-dollar"></i>
                <div>Payment</div>
            </a>
        </li>

        <!-- FAQ -->
        <li class="menu-item active">
            <a href="{{ url('/dashboard/faq') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-hand"></i>
                <div>FAQ</div>
            </a>
        </li>

        <!-- Social Media -->
        <li class="menu-item">
            <a href="{{ url('/dashboard/social_media') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-network-chart"></i>
                <div>Social Media</div>
            </a>
        </li>
    </ul>
</aside>
