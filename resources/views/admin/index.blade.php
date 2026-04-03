@extends('admin.admin_master')

@section('title', 'Dashboard Admin - Al-Baitullah')
@section('page_title', 'Dashboard Admin')

@section('content')
    {{-- BAGIAN YANG KAMU TANYAKAN TARUH DI SINI --}}

    <div style="font-family:var(--font-arabic);font-size:1.2rem;color:var(--gold);margin-bottom:1.5rem">
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
            <button class="btn btn-gold" style="padding:8px 16px;font-size:0.82rem">Lihat Semua</button>
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
                {{-- ... Seterusnya sesuai kode yang kamu punya ... --}}
            </tbody>
        </table>
    </div>
@endsection
