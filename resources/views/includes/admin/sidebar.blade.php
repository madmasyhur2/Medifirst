<div id="kt_aside" class="aside overflow-visible pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ route('admin.dashboard') }}" class="menu-link menu-center">
        <img alt="Logo" src="{{ asset('backend/media/logos/logo.svg') }}" class="h-45px logo" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-y my-2 my-lg-5 scroll-ms" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu"
            data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold"
                id="#kt_aside_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item {{ request()->routeIs('admin.dashboard') ? 'here show' : '' }} py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.dashboard') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-desktop fs-2x"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" 
                    class="menu-item {{ request()->routeIs('admin.masterdata.*', 'admin.membership.*') ? 'here show' : '' }} py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.masterdata.index') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-share-alt fs-2x"></i>
                    </span>
                    <span class="menu-title">MasterData</span>
                    </a>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    {{-- 
                    <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu content-->
                            <div class="menu-content">
                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">Pages</span>
                            </div>
                            <!--end:Menu content-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">User Profile</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/user-profile/overview.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Overview</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/user-profile/projects.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Projects</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/user-profile/campaigns.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Campaigns</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/user-profile/documents.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Documents</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/user-profile/followers.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Followers</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/user-profile/activity.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Activity</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Account</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/overview.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Overview</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/settings.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Settings</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/security.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Security</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/activity.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Activity</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/billing.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Billing</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/statements.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Statements</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/referrals.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Referrals</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/api-keys.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">API Keys</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="account/logs.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Logs</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Authentication</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Corporate Layout</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/corporate/sign-in.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sign-in</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/corporate/sign-up.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sign-up</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/corporate/two-factor.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Two-Factor</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/corporate/reset-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reset Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/corporate/new-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">New Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Overlay Layout</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/overlay/sign-in.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sign-in</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/overlay/sign-up.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sign-up</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/overlay/two-factor.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Two-Factor</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/overlay/reset-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reset Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/overlay/new-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">New Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Creative Layout</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/creative/sign-in.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sign-in</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/creative/sign-up.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sign-up</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/creative/two-factor.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Two-Factor</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/creative/reset-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reset Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/creative/new-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">New Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Fancy Layout</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/fancy/sign-in.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sign-in</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/fancy/sign-up.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sign-up</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/fancy/two-factor.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Two-Factor</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/fancy/reset-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reset Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/layouts/fancy/new-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">New Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Email Templates</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/email/welcome-message.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Welcome Message</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/email/reset-password.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reset Password</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/email/subscription-confirmed.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Subscription Confirmed</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/email/card-declined.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Credit Card Declined</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/email/promo-1.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Promo 1</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/email/promo-2.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Promo 2</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="authentication/email/promo-3.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Promo 3</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="authentication/extended/multi-steps-sign-up.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Multi-steps Sign-up</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="authentication/general/welcome.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Welcome Message</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="authentication/general/verify-email.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Verify Email</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="authentication/general/coming-soon.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Coming Soon</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="authentication/general/password-confirmation.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Password Confirmation</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="authentication/general/account-deactivated.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Account Deactivation</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="authentication/general/error-404.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Error 404</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="authentication/general/error-500.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Error 500</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Corporate</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/about.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">About</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/team.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Our Team</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/contact.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Contact Us</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/licenses.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Licenses</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/sitemap.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sitemap</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Social</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/social/feeds.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Feeds</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/social/activity.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Activty</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/social/followers.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Followers</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/social/settings.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Settings</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Blog</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/blog/home.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Blog Home</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/blog/post.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Blog Post</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Careers</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/careers/list.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Careers List</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="pages/careers/apply.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Careers Apply</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    --}}
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item {{ request()->routeIs('admin.profiles.*', 'admin.employees.*') ? 'here show' : '' }} py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.profiles.index') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-users fs-2x"></i>
                    </span>
                    <span class="menu-title">Akun</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.report.index') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-chart-pie fs-2x"></i>
                    </span>
                    <span class="menu-title">Laporan</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.sale.index') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-receipt fs-2x"></i>
                    </span>
                    <span class="menu-title">Penjualan</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.purchase.index') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-credit-card fs-2x"></i>
                    </span>
                    <span class="menu-title">Pembelian</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.finance.index') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-wallet fs-2x"></i>
                    </span>
                    <span class="menu-title">Keuangan</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.multioutlet.index') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-door-open fs-2x"></i>
                    </span>
                    <span class="menu-title">Multi Outlet</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.contact.index') }}" class="menu-link menu-center">
                    <span class="menu-icon me-0">
                    <i class="las la-phone fs-2x"></i>
                    </span>
                    <span class="menu-title">Kontak</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>