<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">

    <link rel="shortcut icon" href="./images/favicon.png">
    <title>{{ env("APP_NAME", 'Laraboi') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css') }}">
</head>

<body class="nk-body npc-subscription has-aside ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">
            	@include()
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                                <div class="nk-sidebar-menu" data-simplebar>
                                    <!-- Menu -->
                                    <ul class="nk-menu">
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">Menu</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/index.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                                <span class="nk-menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/subscriptions.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-file-text"></em></span>
                                                <span class="nk-menu-text">My Subscription</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/payments.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-report-profit"></em></span>
                                                <span class="nk-menu-text">Payment History</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/downloads.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-download-cloud"></em></span>
                                                <span class="nk-menu-text">Download</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/profile-setting.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                                <span class="nk-menu-text">Account Setting</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">See Others</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                                <span class="nk-menu-text">Pre-Built Pages</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item"><a href="html/subscription/pricing.html" class="nk-menu-link"><span class="nk-menu-text">Pricing</span></a></li>
                                                <li class="nk-menu-item"><a href="html/subscription/team-access.html" class="nk-menu-link"><span class="nk-menu-text">Team Access</span></a></li>
                                                <li class="nk-menu-item"><a href="html/subscription/profile-activity.html" class="nk-menu-link"><span class="nk-menu-text">Login Activity</span></a></li>
                                                <li class="nk-menu-item"><a href="html/subscription/invoices.html" class="nk-menu-link"><span class="nk-menu-text">Invoices <span class="count">(2)</span></span></a></li>
                                                <li class="nk-menu-item"><a href="html/subscription/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">View Invoice</span></a></li>
                                                <li class="nk-menu-item"><a href="html/subscription/tickets.html" class="nk-menu-link"><span class="nk-menu-text">Tickets <span class="count">(5)</span></span></a></li>
                                                <li class="nk-menu-item"><a href="html/subscription/ticket-details.html" class="nk-menu-link"><span class="nk-menu-text">Ticket Details</span></a></li>
                                                <li class="nk-menu-item"><a href="html/subscription/support.html" class="nk-menu-link"><span class="nk-menu-text">Support</span></a></li>
                                                <li class="nk-menu-item"><a href="html/subscription/subscriptions-detail.html" class="nk-menu-link"><span class="nk-menu-text">Subscription Details</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- Menu -->
                                    <ul class="nk-menu nk-menu-sm">
                                        <!-- Menu -->
                                        <li class="nk-menu-heading">
                                            <span>Help Center</span>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/faqs.html" class="nk-menu-link">
                                                <span class="nk-menu-text">FAQs</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/contact.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Contact</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/subscription/support.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Support</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- .nk-sidebar-menu -->
                                <div class="nk-aside-close">
                                    <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                                </div><!-- .nk-aside-close -->
                            </div><!-- .nk-aside -->
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <p>Blank Layout for Subscription Panel</p>
                                </div>
                                <!-- footer @s -->
                                <div class="nk-footer">
                                    <div class="container wide-xl">
                                        <div class="nk-footer-wrap g-2">
                                            <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="#">Softnio</a>
                                            </div>
                                            <div class="nk-footer-links">
                                                <ul class="nav nav-sm">
                                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
