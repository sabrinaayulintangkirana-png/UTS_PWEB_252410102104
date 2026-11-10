
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<style>
    .dashboard {
        max-width: 1200px;
        margin: auto;
        padding: 35px 30px;
    }

    .welcome {
        margin-bottom: 30px;
    }

    .welcome h1 {
        font-size: 27px;
        color: #44363D;
        margin-bottom: 8px;
    }

    .welcome p {
        color: #95858C;
        font-size: 14px;
    }

    .summary-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
        margin-bottom: 30px;
    }

    .summary-card {
        background: white;
        border: 1px solid #F1DDE4;
        border-radius: 18px;
        padding: 22px;
        box-shadow: 0 4px 18px rgba(169, 95, 121, 0.05);
    }

    .summary-card .label {
        color: #95858C;
        font-size: 13px;
        margin-bottom: 14px;
    }

    .summary-card h2 {
        font-size: 23px;
        margin-bottom: 8px;
        color: #44363D;
    }

    .summary-card small {
        color: #95858C;
        font-size: 11px;
    }

    .income { color: #65A88A !important; }
    .expense { color: #D77D85 !important; }
    .savings { color: #9B83BD !important; }
    .balance { color: #C9829A !important; }

    .dashboard-section {
        background: white;
        border: 1px solid #F1DDE4;
        border-radius: 18px;
        padding: 25px;
    }

    .section-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 22px;
        gap: 10px;
    }

    .section-heading h2 {
        font-size: 18px;
    }

    .section-heading a {
        color: #C9829A;
        font-size: 13px;
        font-weight: 600;
    }

    .transaction-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 17px 0;
        border-bottom: 1px solid #F8EDF1;
        gap: 15px;
    }

    .transaction-item:last-child {
        border-bottom: none;
    }

    .transaction-name {
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .transaction-type {
        color: #95858C;
        font-size: 12px;
    }

    .transaction-amount {
        font-size: 14px;
        font-weight: 700;
        white-space: nowrap;
    }

    @media (max-width: 900px) {
        .summary-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .dashboard {
            padding: 25px 16px;
        }

        .summary-grid {
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .summary-card {
            padding: 16px;
        }

        .summary-card h2 {
            font-size: 17px;
        }

        .dashboard-section {
            padding: 18px;
        }
    }
</style>

<div class="dashboard">

    <div class="welcome">
        <h1>Halo, {{ $username }}! 👋</h1>
        <p>Selamat datang kembali di MoneyMate. Yuk, cek kondisi keuanganmu hari ini.</p>
    </div>

    <div class="summary-grid">

        <div class="summary-card">
            <p class="label">Total Saldo</p>
            <h2 class="balance">Rp1.250.000</h2>
            <small>Sisa uang yang kamu miliki</small>
        </div>

        <div class="summary-card">
            <p class="label">Total Pemasukan</p>
            <h2 class="income">Rp1.500.000</h2>
            <small>Uang yang diterima</small>
        </div>

        <div class="summary-card">
            <p class="label">Total Pengeluaran</p>
            <h2 class="expense">Rp250.000</h2>
            <small>Uang yang digunakan</small>
        </div>

        <div class="summary-card">
            <p class="label">Target Tabungan</p>
            <h2 class="savings">Rp300.000</h2>
            <small>Alokasi untuk menabung</small>
        </div>

    </div>

    <div class="dashboard-section">

        <div class="section-heading">
            <h2>Transaksi Terbaru</h2>

            <a href="{{ route('pengelolaan', ['username' => $username]) }}">
                Lihat Semua →
            </a>
        </div>

        @foreach ($transaksi as $item)
            <div class="transaction-item">

                <div>
                    <p class="transaction-name">
                        {{ $item['nama'] }}
                    </p>

                    <p class="transaction-type">
                        {{ $item['jenis'] }}
                    </p>
                </div>

                <p class="transaction-amount
                    {{ $item['jenis'] == 'Pemasukan' ? 'income' : ($item['jenis'] == 'Pengeluaran' ? 'expense' : 'savings') }}">

                    {{ $item['jenis'] == 'Pengeluaran' ? '-' : '+' }}
                    Rp{{ number_format($item['jumlah'], 0, ',', '.') }}

                </p>

            </div>
        @endforeach

    </div>

</div>

@endsection
