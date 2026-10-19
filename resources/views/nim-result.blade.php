<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="alert alert-success mx-auto" style="max-width: 620px;">
        <h1 class="h4">Data berhasil dikirim</h1>
        <p class="mb-1"><strong>NIM:</strong> {{ $nim }}</p>
        <p class="mb-3"><strong>Nama:</strong> {{ $nama }}</p>
        <a href="{{ route('nim.form') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
</body>
</html>