@extends ('layouts.main')
@section('title', 'Form Add Movies')
@section('artikel')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body"></div>
    {{-- FORM ADD MOVIES DISINI--}}
    <form action="/save" method="post"enctype="multipart/form-data">
    @csrf
    <div class="form-group"></div>
    <label>Title</label>
    <input type="text" , name="title" , class="form-control" , required>

    <div class="form-group">
        <label> genre</label>
        <select name="genre">
            <option value="0">Pilih Genre </option>
            <option value="Action"> Action </option>
            <option value="Komedi"> Komedi </option>
            <option value="Horror"> Horror </option>

        </select>
    </div>
    <div class="form-group">
        <label>year</label>
        <input type="number" min="1900" max="2100" name="year" class="form-control" required>
    </div>

    <div class="form-group">
        <label> poster </label>
        <input type="file" name="poster" class="form-control-file" accept="image/*">
    </div>

    <div>
            <label>Apakah Member atau bukan:</label>
            <input type="radio" id="member" name="member" value="member">
            <label for="member">Member</label>
            <input type="radio" id="bukan" name="nomember" value="bukan">
            <label for="bukan">Bukan</label>
        </div>

    <div class="form-group">
        <button type="submit" class="btn-btn primary"> Simpan </button>
    </div>

    <a href="form.html">Form Tambahan </a>
</div>
</form>
@endsection