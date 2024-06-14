<!DOCTYPE html>
<html>
<head>
    <title>Mengirim String</title>
</head>
<body>
    <h1>Kumpulan Makanan</h1>
    <hl>
        @foreach($makan as $makan)
            <li>{{ $makan }}</li>
        @endforeach
    </hl>
</body>
</html>
