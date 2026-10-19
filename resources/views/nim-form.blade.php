<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form NIM dan Nama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card mx-auto shadow-sm" style="max-width: 620px;">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Form NIM dan Nama</h1>
        </div>
        <div class="card-body">
            <p class="text-muted">Data dikirim menggunakan HTTP POST.</p>
 
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
            <form method="POST" action="{{ route('nim.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim"
                           value="{{ old('nim') }}" required maxlength="30">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                           value="{{ old('nama') }}" required maxlength="100">
                </div>
                <button type="submit" class="btn btn-primary">Kirim Data</button>
                <a href="{{ route('courses') }}" class="btn btn-outline-secondary">Buka Layout</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>