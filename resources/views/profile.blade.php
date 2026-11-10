
@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<style>
    .profile-page {
        max-width: 1000px;
        margin: auto;
        padding: 35px 30px;
    }

    .profile-heading {
        margin-bottom: 28px;
    }

    .profile-heading h1 {
        font-size: 27px;
        margin-bottom: 8px;
    }

    .profile-heading p {
        color: #95858C;
        font-size: 14px;
    }

    .profile-card {
        background: white;
        border: 1px solid #F1DDE4;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 18px rgba(169, 95, 121, 0.05);
    }

    .profile-top {
        display: flex;
        align-items: center;
        gap: 22px;
        padding-bottom: 25px;
        border-bottom: 1px solid #F1DDE4;
        margin-bottom: 25px;
    }

    .profile-avatar {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: #FCE7ED;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #A95F79;
        font-size: 32px;
        font-weight: 700;
        flex-shrink: 0;
    }

    .profile-top h2 {
        font-size: 20px;
        margin-bottom: 7px;
    }

    .profile-top p {
        color: #95858C;
        font-size: 13px;
    }

    .profile-details {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 22px;
    }

    .profile-field label {
        display: block;
        color: #95858C;
        font-size: 12px;
        margin-bottom: 9px;
    }

    .profile-field p {
        background: #FFF8FA;
        border: 1px solid #F1DDE4;
        border-radius: 10px;
        padding: 14px;
        font-size: 14px;
        font-weight: 600;
        overflow-wrap: anywhere;
    }

    .profile-note {
        margin-top: 25px;
        padding: 15px;
        background: #FFF8FA;
        border-radius: 12px;
        color: #95858C;
        font-size: 12px;
        line-height: 1.6;
    }

    @media (max-width: 600px) {
        .profile-page {
            padding: 25px 16px;
        }

        .profile-details {
            grid-template-columns: 1fr;
        }

        .profile-card {
            padding: 22px;
        }

        .profile-top {
            align-items: flex-start;
        }
    }
</style>

<div class="profile-page">

    <div class="profile-heading">
        <h1>Profil Saya</h1>
        <p>Informasi akun dan identitas pengguna MoneyMate.</p>
    </div>

    <div class="profile-card">

        <div class="profile-top">

            <div class="profile-avatar">
                SL
            </div>

            <div>
                <h2>{{ $profil['nama'] }}</h2>
                <p>Mahasiswa · MoneyMate Member</p>
            </div>

        </div>

        <div class="profile-details">

            <div class="profile-field">
                <label>Nama Lengkap</label>
                <p>{{ $profil['nama'] }}</p>
            </div>

            <div class="profile-field">
                <label>Username</label>
                <p>{{ $profil['username'] }}</p>
            </div>

            <div class="profile-field">
                <label>Email</label>
                <p>{{ $profil['email'] }}</p>
            </div>

            <div class="profile-field">
                <label>Pekerjaan</label>
                <p>{{ $profil['pekerjaan'] }}</p>
            </div>

        </div>

        <div class="profile-note">
            <strong>Informasi Akun</strong><br>
            Profil ini menggunakan data contoh yang diberikan melalui
            PageController untuk keperluan demonstrasi aplikasi UTS.
        </div>

    </div>

</div>

@endsection
