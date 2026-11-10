@props([
    'title',
    'value',
    'note',
    'color' => '#C98298'
])

<div class="stat-card">
    <div class="stat-indicator" style="background: {{ $color }}"></div>

    <p class="stat-title">{{ $title }}</p>

    <h2>{{ $value }}</h2>

    <p class="stat-note">{{ $note }}</p>
</div>

<style>
    .stat-card {
        background: white;
        border: 1px solid #F1E3E8;
        border-radius: 16px;
        padding: 22px;
        flex: 1;
        min-width: 180px;
    }

    .stat-indicator {
        width: 35px;
        height: 5px;
        border-radius: 10px;
        margin-bottom: 18px;
    }

    .stat-title {
        color: #927D85;
        font-size: 13px;
        margin-bottom: 10px;
    }

    .stat-card h2 {
        font-size: 27px;
        margin-bottom: 8px;
    }

    .stat-note {
        color: #927D85;
        font-size: 12px;
    }
</style>