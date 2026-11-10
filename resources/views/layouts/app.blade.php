
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MoneyMate') - Personal Finance</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #FFF8FA;
            color: #44363D;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button, input {
            font-family: inherit;
        }

        :root {
            --blush: #FCE7ED;
            --pink: #E8AFC0;
            --dusty-pink: #C9829A;
            --dark-pink: #A95F79;
            --white: #FFFFFF;
            --text: #44363D;
            --muted: #95858C;
            --border: #F1DDE4;
            --green: #65A88A;
            --red: #D77D85;
            --purple: #9B83BD;
            --blue: #7C9FCB;
        }

        .main-content {
            width: 100%;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            padding: 32px;
        }

        .card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 4px 18px rgba(169, 95, 121, 0.05);
        }

        .btn-primary {
            background: var(--dusty-pink);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 22px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: var(--dark-pink);
        }

        .text-muted {
            color: var(--muted);
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px 16px;
            }
        }
    </style>
</head>

<body>

    @include('components.navbar')

    <main class="main-content">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
