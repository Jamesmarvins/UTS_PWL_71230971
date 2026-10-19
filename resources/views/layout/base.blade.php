<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard Akademik')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; }
        .site-header { min-height: 95px; }
        .panel { background: #fff; border: 1px solid #dee2e6; border-radius: .5rem; padding: 1rem; }
        .side-panel { min-height: 390px; }
        .content-panel { min-height: 390px; }
        .vertical-menu .nav-link { border-radius: .35rem; }
        .vertical-menu .nav-link.active { background: #0d6efd; color: white; }
        footer { background: #212529; color: white; }
    </style>
</head>
<body>
<div class="container-fluid px-3 px-lg-4 py-3">
    {{-- Header dibagi dua sesuai diagram soal. --}}
    <header class="row g-3 mb-3 site-header">
        <div class="col-md-6">
            <div class="panel h-100 d-flex align-items-center">
                <div><h1 class="h4 mb-1">LEFT HEADER</h1><p class="mb-0 text-muted">Sistem Informasi Akademik</p></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel h-100 d-flex align-items-center justify-content-md-end">
                <div class="text-md-end"><h2 class="h4 mb-1">RIGHT HEADER</h2><p class="mb-0 text-muted">Laravel 12 + Bootstrap</p></div>
            </div>
        </div>
    </header>
 
    {{-- Baris utama: left navigation, content, right navigation. --}}
    <div class="row g-3">
        <aside class="col-md-2">
            <div class="panel side-panel">
                <h2 class="h6">LEFT NAVIGATION</h2>
                <hr>
                <nav class="nav flex-column gap-2">
                    <a class="nav-link px-0" href="{{ route('nim.form') }}">Form NIM</a>
                    <a class="nav-link px-0" href="{{ route('courses') }}">Akademik</a>
                    <a class="nav-link px-0" href="{{ route('data.customers') }}">Data Customers (JSON)</a>
                </nav>
            </div>
        </aside>
 
        <main class="col-md-8">
            <div class="panel content-panel">
                <h2 class="h6 mb-3">CONTENT</h2>
                <div class="row g-3">
                    {{-- Vertical navigation untuk child pages, ditempatkan di dalam content. --}}
                    <aside class="col-lg-3">
                        <nav class="nav flex-column nav-pills vertical-menu gap-1">
                            <a class="nav-link {{ request()->routeIs('courses') ? 'active' : '' }}" href="{{ route('courses') }}">Courses</a>
                            <a class="nav-link {{ request()->routeIs('students') ? 'active' : '' }}" href="{{ route('students') }}">Students</a>
                            <a class="nav-link {{ request()->routeIs('grades') ? 'active' : '' }}" href="{{ route('grades') }}">Grades</a>
                            <a class="nav-link {{ request()->routeIs('assignments') ? 'active' : '' }}" href="{{ route('assignments') }}">Assignments</a>
                        </nav>
                    </aside>
                    <section class="col-lg-9">
                        @yield('content')
                    </section>
                </div>
            </div>
        </main>
 
        <aside class="col-md-2">
            <div class="panel side-panel">
                <h2 class="h6">RIGHT NAVIGATION</h2>
                <hr>
                <p class="small mb-2">Teknologi:</p>
                <ul class="small ps-3">
                    <li>Laravel 12</li>
                    <li>Blade Template</li>
                    <li>Bootstrap 5</li>
                </ul>
                <a class="small" href="{{ route('data.sales') }}">Lihat Sales (JSON)</a>
            </div>
        </aside>
    </div>
 
    <footer class="rounded mt-3 text-center p-3">
        <small>FOOTER - Pemrograman Web Lanjut</small>
    </footer>
</div>
</body>
</html>