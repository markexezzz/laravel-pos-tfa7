<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | POS</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; background: #f4f6f8; color: #1f2933; }
        nav { background: #1f2933; padding: 0 24px; display: flex; align-items: center; gap: 8px; }
        nav .brand { color: #fff; font-weight: 700; margin-right: 24px; padding: 16px 0; }
        nav a { color: #cbd2d9; text-decoration: none; padding: 16px 14px; }
        nav a.active, nav a:hover { color: #fff; background: #323f4b; }
        main { max-width: 1000px; margin: 32px auto; padding: 0 16px; }
        h1 { margin-top: 0; }
        .page-head { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 20px; }
        .button { display: inline-block; border: 0; border-radius: 6px; background: #1565c0; color: #fff; padding: 10px 15px; text-decoration: none; cursor: pointer; font: inherit; }
        .button.secondary { background: #52606d; }
        .button.small { padding: 7px 11px; font-size: .9rem; }
        .button:hover { opacity: .9; }
        .notice { padding: 12px 16px; border-radius: 6px; margin-bottom: 18px; background: #e3f9e5; color: #1f5130; }
        .errors { padding: 12px 16px; border-radius: 6px; margin-bottom: 18px; background: #ffebe6; color: #8a1c0d; }
        .form-card { background: #fff; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.1); max-width: 620px; }
        label { display: block; font-weight: 650; margin: 16px 0 6px; }
        input { box-sizing: border-box; width: 100%; padding: 10px; border: 1px solid #bcccdc; border-radius: 5px; font: inherit; }
        .field-error { display: block; color: #c0392b; font-size: .9rem; margin-top: 5px; }
        .actions { display: flex; gap: 10px; margin-top: 22px; }
        .avatar { width: 54px; height: 54px; object-fit: cover; border-radius: 50%; vertical-align: middle; }
        .avatar-placeholder { display: inline-flex; align-items: center; justify-content: center; width: 54px; height: 54px; border-radius: 50%; background: #d9e2ec; color: #334e68; font-weight: 700; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        th, td { text-align: left; padding: 12px 16px; border-bottom: 1px solid #e4e7eb; }
        th { background: #e4e7eb; }
        .empty { padding: 24px; background: #fff; text-align: center; color: #7b8794; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">POS System</span>
        <a href="{{ route('customers.index') }}" class="{{ request()->routeIs('customers.*') ? 'active' : '' }}">Customers</a>
        <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">Users</a>
    </nav>
    <main>
        @if (session('success'))
            <div class="notice">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="errors">
                <strong>Please correct the following:</strong>
                <ul>
                    @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>
