<!-- resources/views/input_gaji.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Perhitungan Gaji Karyawan</h1>
    <form action="{{ route('hitung_gaji') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" id="id" name="id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="golongan">Golongan:</label>
            <select id="golongan" name="golongan" class="form-control" required>
                <option value="Golongan I">Golongan I</option>
                <option value="Golongan II">Golongan II</option>
                <option value="Golongan III">Golongan III</option>
                <option value="Golongan IV">Golongan IV</option>
            </select>
        </div>

        <div class="form-group">
            <label for="gaji_pokok">Gaji Pokok:</label>
            <input type="number" id="gaji_pokok" name="gaji_pokok" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jumlah_lembur">Jumlah Lembur:</label>
            <input type="number" id="jumlah_lembur" name="jumlah_lembur" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tunjangan Anak:</label><br>
            <input type="radio" id="tunjangan_ada" name="tunjangan_anak" value="ada" required>
            <label for="tunjangan_ada">Ada</label><br>
            <input type="radio" id="tunjangan_tidak" name="tunjangan_anak" value="tidak" required>
            <label for="tunjangan_tidak">Tidak</label>
        </div>

        <div class="form-group">
            <label for="jumlah_tidak_hadir">Jumlah Tidak Hadir:</label>
            <input type="number" id="jumlah_tidak_hadir" name="jumlah_tidak_hadir" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Hitung Gaji</button>
        </div>
    </form>
</div>
@endsection
