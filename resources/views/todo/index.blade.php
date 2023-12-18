@extends('layouts.king')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/todo/create">Tambah Jadwal Kegiatan</a>
        <table class="table table-hover">
            <tr>
                <th>Nama Kegiatan</th>
                <th>Jadwal Kegiatan</th>
                <th>Keterangan Kegiatan</th>
                <th>Durasi Kegiatan</th> 
                <th>Action</th>
            </tr>
            @foreach($todo as $t)
            <tr>
                <td>{{$t->nama_kegiatan}}</td>
                <td>{{$t->jadwal_kegiatan}}</td>
                <td>{{$t->keterangan_kegiatan}}</td>
                <td>{{$t->durasi_kegiatan}}</td>
                <td>
                    <a class="btn btn-success" href="/todo/{{$t->id}}/edit">Edit Here</a>
                    <form action="/todo/{{$t->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete Here" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
