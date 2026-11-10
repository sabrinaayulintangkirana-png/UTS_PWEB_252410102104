
@extends('layouts.app')

@section('title', 'Pengelolaan Keuangan')

@section('content')

<style>
    .management {
        max-width: 1200px;
        margin: auto;
        padding: 35px 30px;
    }

    .management-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
        margin-bottom: 28px;
    }

    .management-header h1 {
        font-size: 27px;
        margin-bottom: 8px;
    }

    .management-header p {
        color: #95858C;
        font-size: 14px;
    }

    .management-summary {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-bottom: 28px;
    }

    .management-card {
        background: white;
        border: 1px solid #F1DDE4;
        border-radius: 16px;
        padding: 22px;
    }

    .management-card p {
        color: #95858C;
        font-size: 13px;
        margin-bottom: 12px;
    }

    .management-card h2 {
        font-size: 22px;
    }

    .income {
        color: #65A88A;
    }

    .expense {
        color: #D77D85;
    }

    .saving {
        color: #9B83BD;
    }

    .transaction-table {
        background: white;
        border: 1px solid #F1DDE4;
        border-radius: 18px;
        padding: 25px;
        overflow-x: auto;
    }

    .transaction-table h2 {
        font-size: 18px;
        margin-bottom: 22px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 450px;
    }

    th {
        text-align: left;
        color: #95858C;
        font-size: 12px;
        font-weight: 600;
        padding: 14px;
        background: #FFF8FA;
    }

    td {
        padding: 17px 14px;
        border-bottom: 1px solid #F8EDF1;
        font-size: 13px;
    }

    .type-label {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
    }

    .type-income {
        background: #E8F5EF;
        color: #65A88A;
    }

    .type-expense {
        background: #FCEAEC;
        color: #D77D85;
    }

    .type-saving {
        background: #F0EBF8;
        color: #9B83BD;
    }

    @media (max-width: 650px) {
        .management {
            padding: 25px 16px;
        }

        .management-summary {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .management-header h1 {
            font-size: 23px;
        }
    }
</style>

<div class="management">

    <div class="management-header">
        <div>
            <h1>Pengelolaan Keuangan</h1>
            <p>Atur dan pantau setiap pemasukan serta pengeluaranmu.</p>
        </div>
    </div>

    <div class="management-summary">

        <div class="management-card">
            <p>Total Pemasukan</p>
            <h2 class="income">Rp1.500.000</h2>
        </div>

        <div class="management-card">
            <p>Total Pengeluaran</p>
            <h2 class="expense">Rp250.000</h2>
        </div>

        <div class="management-card">
            <p>Total Tabungan</p>
            <h2 class="saving">Rp300.000</h2>
        </div>

    </div>

    <div class="transaction-table">

        <h2>Daftar Transaksi</h2>

        <table>
            <thead>
                <tr>
                    <th>Nama Transaksi</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($transaksi as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>

                        <td>
                            @if ($item['jenis'] == 'Pemasukan')
                                <span class="type-label type-income">
                                    Pemasukan
                                </span>
                            @elseif ($item['jenis'] == 'Pengeluaran')
                                <span class="type-label type-expense">
                                    Pengeluaran
                                </span>
                            @else
                                <span class="type-label type-saving">
                                    Tabungan
                                </span>
                            @endif
                        </td>

                        <td>
                            <strong>
                                Rp{{ number_format($item['jumlah'], 0, ',', '.') }}
                            </strong>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection
