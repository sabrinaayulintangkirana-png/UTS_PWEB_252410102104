
@extends('layouts.app')

@section('title', 'Login')

@section('content')

<style>
    .login-wrapper {
        min-height: 85vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px 20px;
        background: linear-gradient(135deg, #FFF8FA, #FCE7ED);
    }

    .login-card {
        width: 100%;
        max-width: 430px;
        background: white;
        padding: 42px;
        border-radius: 24px;
        box-shadow: 0 12px 40px rgba(169, 95, 121, 0.10);
        border: 1px solid #F1DDE4;
    }

    .login-logo {
        text-align: center;
        margin-bottom: 32px;
    }

    .login-logo h1 {
        font-size: 32px;
        color: #A95F79;
        margin-bottom: 8px;
    }

    .login-logo p {
        color: #95858C;
        font-size: 14px;
    }

    .login-form label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 9px;
        color: #44363D;
    }

    .login-form input {
        width: 100%;
        padding: 14px;
        border: 1px solid #F1DDE4;
        border-radius: 10px;
        outline: none;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .login-form input:focus {
        border-color: #C9829A;
    }

    .login-form button {
        width: 100%;
        padding: 14px;
        background: #C9829A;
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
    }

    .login-form button:hover {
        background: #A95F79;
    }

    .login-error {
        color: #D77D85;
        font-size: 12px;
        margin-top: -14px;
        margin-bottom: 15px;
    }

    .login-note {
        text-align: center;
        margin-top: 24px;
        color: #95858C;
        font-size: 12px;
    }

    @media (max-width: 480px) {
        .login-card {
            padding: 30px 24px;
        }
    }
</style>

<div class="login-wrapper">
    <div class="login-card">

        <div class="login-logo">
            <h1>MoneyMate<span style="color: #E8AFC0;">.</span></h1>
            <p>Kelola keuanganmu, wujudkan tujuanmu.</p>
        </div>

        <form action="{{ route('login.process') }}" method="POST" class="login-form">
            @csrf

            <label for="username">Username</label>

            <input
                type="text"
                id="username"
                name="username"
                placeholder="Masukkan username kamu"
                value="{{ old('username') }}"
                required
            >

            @error('username')
                <p class="login-error">{{ $message }}</p>
            @enderror

            <button type="submit">
                Masuk ke MoneyMate →
            </button>
        </form>

        <p class="login-note">
            Personal Finance Management for Students
        </p>

    </div>
</div>

@endsection
