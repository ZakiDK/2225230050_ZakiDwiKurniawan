@extends('layouts.king')

@section('content')
    <div class="container">
        <h1>Create your TO DO LIST</h1>
        <form action="/todo/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jadwal Kegiatan</label>
                <input type="text" class="form-control" name="jadwal_kegiatan" placeholder="Jadwal Kegiatan">
            </div>
                        
            <select class="form-select" name="durasi_kegiatan">
            <option value="">Pilih Jumlah Durasi</option>
            <option value="5 menit">5 Menit</option>
            <option value="10 menit">10 Menit</option>
            <option value="15 menit">15 Menit</option>
            <option value="30 menit">30 Menit</option>
            <option value="45 menit">45 Menit</option>
            <option value="1 ja,">1 Jam</option>
            <option value="1 jam 30 menit">1 Jam 30 Menit</option>
            <option value="2 jam">2 jam</option>
            <option value="2 jam 30 menit">2 jam 30 menit</option>
            <option value="3 jam">3 Jam</option>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan Kegiatan</label>
                <textarea class="form-control" name="keterangan_kegiatan" rows="10"  placeholder="Keterangan Kegiatan"></textarea><br>
            </div>
            <div class="tombol">
                <input type="submit" name="submit" class="btn btn-info" value="Save Here"><br>
            </div>

        </form>
    </div>

@endsection
