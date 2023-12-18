@extends('layouts.king')

@section('content')
    <div class="container">
    <h1>Edit and Change your TO DO LIST</h1>
    <form action="/todo/{{$todo->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="{{$todo->nama_kegiatan}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jadwal Kegiatan</label>
                <input type="text" class="form-control" name="jadwal_kegiatan" placeholder="Jadwal Kegiatan" value="{{$todo->jadwal_kegiatan}}">
            </div>
                        
            <select class="form-select" name="durasi_kegiatan" value="{{$todo->durasi_kegiatan}}">
            <option value="">Pilih Jumlah Durasi</option>
            <option value="5 menit" @if($todo->durasi_kegiatan == "5 menit") selected @endif>5 Menit</option>
            <option value="10 menit" @if($todo->durasi_kegiatan == "10 menit") selected @endif>10 Menit</option>
            <option value="15 menit" @if($todo->durasi_kegiatan == "15 menit") selected @endif>15 Menit</option>
            <option value="30 menit" @if($todo->durasi_kegiatan == "30 menit") selected @endif>30 Menit</option>
            <option value="45 menit" @if($todo->durasi_kegiatan == "45 menit") selected @endif>45 Menit</option>
            <option value="1 jam" @if($todo->durasi_kegiatan == "1 jam") selected @endif>1 Jam</option>
            <option value="1 jam 30 menit" @if($todo->durasi_kegiatan == "1 jam 30 menit") selected @endif>1 Jam 30 Menit</option>
            <option value="2 jam" @if($todo->durasi_kegiatan == "2 jam") selected @endif>2 jam</option>
            <option value="2 jam 30 menit" @if($todo->durasi_kegiatan == "2 jam 30 menit") selected @endif>2 jam 30 menit</option>
            <option value="3 jam" @if($todo->durasi_kegiatan == "3 jam") selected @endif>3 Jam</option>
          
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan Kegiatan</label>
                <textarea class="form-control" name="keterangan_kegiatan" rows="10" placeholder="Keterangan Kegiatan">{{$todo->keterangan_kegiatan}}</textarea><br>
            </div>

            <div class="tombol">
                <input type="submit" name="submit" class="btn btn-info" value="Update Here"><br>
            </div>
    </form>
    </div>

@endsection