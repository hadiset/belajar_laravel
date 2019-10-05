<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kateogri</title>
</head>
<body>
    <div>
        <p>TODO: list daftar kategori</p>
        {{-- Menampilkan daftar kategori --}}
        {{$daftar_kategori[0]->name}}

        @if($daftar_kategori[0]->name == 'Elektronik')
        {{-- Munculkan sidebar kiri --}}
        <div>Munculkan sidebar kiri</div>
        
        @elseif($daftar_kategori[0]->name == 'Ransel')
        {{-- Munculkan sidebar kanan --}}
        <div>Munculkan sidebar kanan</div>
        
        @else
        {{-- Jangan munculkan sidebar --}}
        <div>Tidak ada sidebar</div>
        @endif

        @unless($daftar_kategori[0]->name == 'Tas')
        {{-- Ekseskudi kode kalo nilai salah --}}
            Kamu belum keren
        @endunless


    </div>
</body>
</html>