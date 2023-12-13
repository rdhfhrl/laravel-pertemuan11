@extends('layouts.app')

@section('content')

<div class="container">

<h4>DAFTAR PELANGGAN <a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Data</a></h4>

    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <td>ID GOLONGAN</td>
          <td>NO PELANGGAN</td>
          <td>NAMA</td>
          <td>ALAMAT</td>
          <td>NOMOR HP</td>
          <td>KTP</td>
          <td>SERI</td>
          <td>METERAN</td>
          <td>AKTIF</td>
          <td>ID USER</td>
          <td>AKSI<td>
        </tr>
      </thead>
      <tbody>
        @foreach($rows as $row)
        <tr>
          <td>{{ $row->pel_id_gol }}</td>
          <td>{{ $row->pel_no }}</td>
          <td>{{ $row->pel_nama }}</td>
          <td>{{ $row->pel_alamat }}</td>
          <td>{{ $row->pel_hp }}</td>
          <td>{{ $row->pel_ktp }}</td>
          <td>{{ $row->pel_seri }}</td>
          <td>{{ $row->pel_meteran }}</td>
          <td>{{ $row->pel_aktif }}</td>
          <td>{{ $row->pel_id_user }}</td>
          <td>
            <div class="d-flex justify-content-start">
              <a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}" class="btn btn-primary btn-sm me-2">Edit</a>
                <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
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