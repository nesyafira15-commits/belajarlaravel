<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>profile</h1>
    <p> Nama : {{$Nama}}</p>
    <p> NIM : {{$NIM}} </P>
    <p> Kelas : {{$Kelas}}<p>
    <p> Status : {{$Status}}<p>

    @if ($Status == 'aktif')
     <p>Mahasiswa Aktif</P>
    @else
     <p>mahsiswa tidak aktif</P>
    @endif

    <nav> 
        <a href="/">beranda</a>
        <a href="/profile">profile</a>
    </nav>
</body>
</html>