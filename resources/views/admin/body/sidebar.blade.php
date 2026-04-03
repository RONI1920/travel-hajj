<div class="sidebar">
    <div class="sidebar-logo">
        <div class="logo-icon">🕌</div>
        <span>Al-Baitullah Admin</span>
    </div>
    <div class="sidebar-menu">
        <div class="menu-section-label">Overview</div>
        <a href="/admin" class="menu-item {{ request()->is('admin') ? 'active' : '' }}">
            <span class="icon">📊</span> Dashboard
        </a>
        <div class="menu-item"><span class="icon">📋</span> Kelola Booking</div>
        <div class="menu-item"><span class="icon">👥</span> Data Jamaah</div>
        <div class="menu-item"><span class="icon">💳</span> Pembayaran</div>

        <div class="menu-section-label">Manajemen</div>
        <div class="menu-item"><span class="icon">📦</span> Paket Wisata</div>
        <div class="menu-item"><span class="icon">✈️</span> Jadwal Penerbangan</div>
        <div class="menu-item"><span class="icon">🏨</span> Hotel & Akomodasi</div>

        <div class="menu-section-label">Laporan</div>
        <div class="menu-item"><span class="icon">📈</span> Laporan Keuangan</div>
        <div class="menu-item"><span class="icon">📉</span> Statistik</div>
        <div class="menu-item"><span class="icon">⚙️</span> Pengaturan</div>

        {{-- Tombol Logout biasanya menggunakan Form di Laravel untuk keamanan --}}
        <div class="menu-item" style="color: #ff4d4d; margin-top: 20px; cursor: pointer;"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="icon">🚪</span> Keluar
        </div>

        {{-- Form Tersembunyi --}}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
