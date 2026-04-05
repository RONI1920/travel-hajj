<div class="topbar">
    <div class="topbar-title">@yield('page_title', 'Dashboard')</div>

    <div class="topbar-right">
        <span class="topbar-date" style="font-size:0.85rem; color:var(--text-muted); margin-right: 15px;">
            {{ date('l, d M Y') }}
        </span>

        <div class="dropdown">
            <div class="avatar" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                @php
                    // Logika: Jika user punya foto di DB, pakai itu. Jika tidak, pakai default.
                    $userPhoto = Auth::user()->photo;
                    $photoPath =
                        $userPhoto && file_exists(public_path('backend/image/' . $userPhoto))
                            ? asset('backend/assets/image/' . $userPhoto)
                            : asset('backend/assets/upload/admin-image.png'); // Ganti dengan nama file defaultmu
                @endphp

                <img src="{{ $photoPath }}" alt="user-profile" class="avatar-img">
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
                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                        <i class="mdi mdi-lock-outline"></i>
                        <span>Logout Admin</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
