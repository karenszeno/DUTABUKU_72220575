<!-- resources/views/hasil_gaji.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hasil Perhitungan Gaji Karyawan</h1>
    <p><strong>ID:</strong> {{ $id }}</p>
    <p><strong>Nama:</strong> {{ $nama }}</p>
    <p><strong>Golongan:</strong> {{ $golongan }}</p>
    <p><strong>Gaji Pokok:</strong> {{ $gaji_pokok }}</p>
    <p><strong>Jumlah Lembur:</strong> {{ $jumlah_lembur }}</p>
    <p><strong>Tunjangan Anak:</strong> {{ $tunjangan_anak }}</p>
    <p><strong>Jumlah Tidak Hadir:</strong> {{ $jumlah_tidak_hadir }}</p>
    <p><strong>Total Gaji:</strong> {{ $total_gaji }}</p>
</div>
@endsection
