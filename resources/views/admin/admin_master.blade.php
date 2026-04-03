<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Al-Baitullah Admin')</title>

    {{-- CSS STYLE --}}
    <link href="{{ asset('backend/assets/app.root.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/app.admin.css') }}" rel="stylesheet">
</head>

<body>
    <div id="admin" class="page">
        <div class="admin-layout">

            {{-- SIDEBAR (Tetap di sini atau dipisah ke partials) --}}
            @include('admin.body.sidebar')

            <div class="main-content">
                {{-- HEADER / TOPBAR --}}
                @include('admin.body.header')

                <div class="main-content">
                    <div class="admin-body">
                        <div
                            style="font-family:var(--font-arabic);font-size:1.2rem;color:var(--gold);margin-bottom:1.5rem">
                            بِسْمِ اللهِ — Selamat datang, Super Admin
                        </div>
                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-icon gold">👥</div>
                                <div>
                                    <div class="stat-value">1,284</div>
                                    <div class="stat-label">Total Jamaah</div>
                                </div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon green">✅</div>
                                <div>
                                    <div class="stat-value">892</div>
                                    <div class="stat-label">Booking Aktif</div>
                                </div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon blue">💰</div>
                                <div>
                                    <div class="stat-value">Rp 4.2M</div>
                                    <div class="stat-label">Pendapatan Bulan Ini</div>
                                </div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon red">⏳</div>
                                <div>
                                    <div class="stat-value">47</div>
                                    <div class="stat-label">Menunggu Konfirmasi</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">📋 Booking Terbaru</div>
                                <button class="btn btn-gold" style="padding:8px 16px;font-size:0.82rem">Lihat
                                    Semua</button>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID Booking</th>
                                        <th>Nama Jamaah</th>
                                        <th>Paket</th>
                                        <th>Keberangkatan</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="color:var(--gold)">#ABU-0892</td>
                                        <td>Ahmad Fauzi</td>
                                        <td>Umroh Reguler</td>
                                        <td>15 Jan 2025</td>
                                        <td>Rp 28,05jt</td>
                                        <td><span class="badge badge-warning">Menunggu</span></td>
                                    </tr>
                                    <tr>
                                        <td style="color:var(--gold)">#ABU-0891</td>
                                        <td>Siti Rahmawati</td>
                                        <td>Umroh Ramadhan</td>
                                        <td>1 Mar 2025</td>
                                        <td>Rp 45,00jt</td>
                                        <td><span class="badge badge-success">Terkonfirmasi</span></td>
                                    </tr>
                                    <tr>
                                        <td style="color:var(--gold)">#ABU-0890</td>
                                        <td>Hj. Nur Azizah</td>
                                        <td>Haji Furoda</td>
                                        <td>Jun 2025</td>
                                        <td>Rp 185,00jt</td>
                                        <td><span class="badge badge-info">Proses Visa</span></td>
                                    </tr>
                                    <tr>
                                        <td style="color:var(--gold)">#ABU-0889</td>
                                        <td>Budi Santoso</td>
                                        <td>Umroh Reguler</td>
                                        <td>15 Jan 2025</td>
                                        <td>Rp 57,00jt</td>
                                        <td><span class="badge badge-success">Terkonfirmasi</span></td>
                                    </tr>
                                    <tr>
                                        <td style="color:var(--gold)">#ABU-0888</td>
                                        <td>Fatimah Zahra</td>
                                        <td>Umroh Plus Turki</td>
                                        <td>20 Feb 2025</td>
                                        <td>Rp 38,50jt</td>
                                        <td><span class="badge badge-danger">Dibatalkan</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- FOOTER --}}
                @include('admin.body.footer')
            </div>
        </div>
    </div>
</body>

</html>
