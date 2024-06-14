@extends('layouts/main')
@section('title', 'movies')
@section('artikel')

<div class=" card">
    <div class="card-header">
        <a href="/movies/add-form" class="btn btn-primary"> <i class="bi bi-plus-square"></i> tambah buku</a>
        <div class="card-body">
            @if (@session('alert'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('alert')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @endif
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Poster</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mv as $idx => $m)
                                <tr>
                                    <td>{{ $idx + 1 }}</td>
                                    <td>{{ $m->title}}</td>
                                    <td>{{ $m->genre}}</td>
                                    <td>{{ $m->year}}</td>
                                    <td>
                                        <img src="{{ asset('/storage/' . $m->poster)}}" alt="{{ $m->poster}}" height="100"
                                            width="90">
                                    </td>
                                    <td>
                                        <a href="/movies/edit-form/{{ $m->id}}"class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="/delete/{{ $m->id}}"class="btn btn-success"><i class="bi bi-trash3-fill"></i></a>
                                    </td>
                                </tr>
                                <!-- <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011-07-25</td>
                            <td>$170,750</td>
                        </tr> -->
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>
<h1> DUTABUKU_575 </h1>
<p> BUKU </p>
@endsection