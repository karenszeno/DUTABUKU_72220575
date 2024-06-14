@extends ('layouts.main')
@section('title', 'Form Edit Movies')
@section('artikel')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body"></div>
    {{-- FORM EDIT MOVIES DISINI--}}
    <form action="/update/{{ $mv->id}}" method="post"enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ $mv->title }}"required>
    </div>

    <div class="form-group">
        <label> genre</label>
        <select name="genre">
            <option value="0">Pilih Genre </option>
            <option value="Action" {{ $mv->genre ="Action" ?"Selected":""}}>Action </option>
            <option value="Komedi"{{ $mv->genre ="Komedi" ?"Selected":""}}> Komedi </option>
            <option value="Horror"{{ $mv->genre ="Horror" ?"Selected":""}}> Horror </option>

        </select>
    </div>
    <div class="form-group">
        <label>year</label>
        <input type="number" min="1900" max="2100" name="year" class="form-control" value="{{ $mv->year}}" required>
    </div>

    <div class="form-group">
        <label> poster </label>
        <input type="file" name="poster" class="form-control-file" accept="image*">
        <img src="{{ asset('/storage/' . $mv->poster)}}" alt="{{ $mv->poster}}" height="100 "width="90">
        
    </div>

    <div class="form-group">
        <button type="submit" class="btn-btn primary"> Simpan </button>
    </div>
</div>
</form>
@endsection