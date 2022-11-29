@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman about</h1>

    <img src="<?= $img ?>" alt="<?= $img ?>">
    <br><br><br>
    <h3><?= $nama ?></h3>
    <h4>{{ $alamat }}</h4>
    <br>
    <p>Halaman ini akan meng import file pcss yang ada ddidalam folder public</p>
    <p>hanya dengan href langsussng hanya dengan memangiil nama filenya</p>
    <p>hal tersebut karena fille sudah relatif terhubung dengan folder public</p>
@endsection
