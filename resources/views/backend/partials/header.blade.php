<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                    <em class="icon ni ni-menu"></em>
                </a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route('admins.backend.home') }}" class="logo-link">
                    <img class="logo-light logo-img" src="" srcset=" 2x" alt="logo">
                    <img class="logo-dark logo-img" src="" srcset=" 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown chats-dropdown hide-mb-xs">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-na">
                                <em class="icon ni ni-comments"></em>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                <a href="#">Setting</a>
                            </div>
                            <div class="dropdown-body">
                                <ul class="chat-list">
                                    <li class="chat-item">
                                        <a class="chat-link" href="message.html">
                                            <div class="chat-media user-avatar">
                                                <span>IH</span>
                                                <span class="status dot dot-lg dot-gray"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Iliash Hossain</div>
                                                    <span class="time">Now</span></div>
                                                <div class="chat-context">
                                                    <div class="text">
                                                        You: Please confrim if you got my last messages.
                                                    </div>
                                                    <div class="status delivered">
                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-item is-unread">
                                        <a class="chat-link" href="message.html">
                                            <div class="chat-media user-avatar bg-pink">
                                                <span>AB</span>
                                                <span class="status dot dot-lg dot-success"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                    <span class="time">4:49 AM</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Hi, I am Ishtiyak, can you help me
                                                        with this problem ?
                                                    </div>
                                                    <div class="status unread">
                                                        <em class="icon ni ni-bullet-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-foot center">
                                <a href="message.html">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info">
                                <em class="icon ni ni-bell"></em>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">
                                                You have requested to <span>Widthdrawl</span>
                                            </div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-active">Administator</div>
                                    <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                        <span class="sub-text">info@softnio.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="admin-profile.html">
                                            <em class="icon ni ni-user-alt"></em>
                                            <span>View Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin-profile-setting.html">
                                            <em class="icon ni ni-setting-alt"></em>
                                            <span>Account Setting</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-signout"></em>
                                            <span>Sign out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
