<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Al-Baitullah Admin')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">

    <link href="{{ asset('backend/assets/app.root.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/app.admin.css') }}" rel="stylesheet">
</head>

<body>
    <div id="admin" class="page active">
        <div class="admin-layout">

            {{-- SIDEBAR --}}
            @include('admin.body.sidebar')

            <main class="main-content">
                {{-- TOPBAR --}}
                @include('admin.body.header')

                {{-- CONTENT --}}
                @include('admin.body.content')


                <div class="admin-body">
                    @yield('admin')
                </div>
            </main>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
