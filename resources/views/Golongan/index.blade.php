@extends('layouts.app')

@section('content')

<div class="container">
    <h4>DAFTAR GOLONGAN <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data</a></h4>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <td>KODE GOLONGAN</td>
                <td>NAMA GOLONGAN</td>
                <td>AKSI</td>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->gol_kode }}</td>
                <td>{{ $row->gol_nama }}</td>
                <td>
                  <div class="d-flex justify-content-start">
                    <a href="{{ url('golongan/' . $row->gol_id . '/edit') }}" class="btn btn-primary btn-sm me-2">Edit</a>
                      <form action="{{ url('/golongan/' . $row->gol_id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                       <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                      </form>
                  </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection