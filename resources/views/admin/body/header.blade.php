<div class="topbar">
    <div class="topbar-title">@yield('page_title', 'Dashboard')</div>

    <div class="topbar-right">
        <span class="topbar-date" style="font-size:0.85rem; color:var(--text-muted); margin-right: 15px;">
            {{ date('l, d M Y') }}
        </span>

        <div class="dropdown">
            <div class="avatar" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
            </div>

            <ul class="dropdown-menu dropdown-menu-end profile-dropdown" aria-labelledby="profileDropdown">
                <li class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">
                        Welcome, {{ Auth::user()->name }} !
                    </h6>
                </li>

                <li>
                    <a href="#" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>My Account</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-item notify-item">
                        <i class="mdi mdi-lock-outline"></i>
                        <span>Lock Screen</span>
                    </a>
                </li>

                <li>
                    <div class="dropdown-divider"></div>
                </li>

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item notify-item logout-item"
                            style="width: 100%; border: none; background: none; display: flex; align-items: center; gap: 12px; padding: 12px 20px;">
                            <i class="mdi mdi-location-exit"
                                style="font-size: 1.2rem; color: var(--gold); width: 20px; text-align: center;"></i>
                            <span style="color: var(--text-muted); font-size: 0.9rem;">Logout</span>
                        </button>
                    </form>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</div>
