@extends('layouts.layout')

@section('content')
<h2>{{ isset($mahasiswa) ? 'Edit' : 'Tambah' }} Mahasiswa</h2>
<form action="{{ isset($mahasiswa) ? route('mahasiswa.update', $mahasiswa->id) : route('mahasiswa.store') }}" method="POST">
    @csrf
    @if(isset($mahasiswa)) @method('PUT') @endif

    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama ?? '') }}"><br>
    
    <label>NIM:</label><br>
    <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim ?? '') }}"><br>
    
    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}"><br>

    <button type="submit">{{ isset($mahasiswa) ? 'Update' : 'Simpan' }}</button>
</form>
@endsection
