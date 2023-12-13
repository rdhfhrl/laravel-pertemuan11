@extends('layouts.app')

@section('content')

<div class="container">

  <h4>DAFTAR USERS<a class="btn btn-primary btn-sm float-end" href="{{ url('users/create') }}">Tambah Data</a></h4>

    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <td>EMAIL</td>
          <td>NAMA</td>
          <td>ALAMAT</td>
          <td>NOMOR HP</td>
          <td>POS</td>
          <td>ROLE</td>
          <td>AKTIF</td>
          <td>AKSI</td>
        </tr>
      </thead>
      <tbody>
          @foreach($rows as $row)
          <tr>
              <td>{{ $row->user_email }}</td>
              <td>{{ $row->user_nama }}</td>
              <td>{{ $row->user_alamat }}</td>
              <td>{{ $row->user_hp }}</td>
              <td>{{ $row->user_pos }}</td>
              <td>{{ $row->user_role }}</td>
              <td>{{ $row->user_aktif }}</td>
              <td>
                  <div class="d-flex justify-content-start">
                    <a href="{{ url('users/' . $row->user_id . '/edit') }}" class="btn btn-primary btn-sm me-2">Edit</a>
                      <form action="{{ url('/users/' . $row->user_id) }}" method="POST">
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