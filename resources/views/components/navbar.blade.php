
@if (request()->is('dashboard', 'pengelolaan', 'profile'))
<nav style="background: white; border-bottom: 1px solid #F1DDE4; padding: 18px 5%; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">

    <a href="{{ route('dashboard', ['username' => request('username', 'Mahasiswa')]) }}"
       style="font-size: 24px; font-weight: 800; color: #A95F79;">
        MoneyMate<span style="color: #E8AFC0;">.</span>
    </a>

    <div style="display: flex; align-items: center; gap: 24px; flex-wrap: wrap; font-size: 14px; font-weight: 600;">
        <a href="{{ route('dashboard', ['username' => request('username', 'Mahasiswa')]) }}">
            Dashboard
        </a>

        <a href="{{ route('pengelolaan', ['username' => request('username', 'Mahasiswa')]) }}">
            Pengelolaan
        </a>

        <a href="{{ route('profile', ['username' => request('username', 'Mahasiswa')]) }}">
            Profile
        </a>

        <a href="{{ route('login') }}" style="color: #C9829A;">
            Keluar
        </a>
    </div>

</nav>
@endif
