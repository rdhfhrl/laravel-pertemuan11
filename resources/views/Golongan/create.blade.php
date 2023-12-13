@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Golongan') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/golongan') }}">
                        @csrf

                        <div class="form-group mb-3 row">
                            <label for="gol_kode" class="col-md-4 col-form-label text-md-right">{{ __('Kode Golongan') }}</label>

                            <div class="col-md-7">
                                <input id="gol_kode" type="text" class="form-control @error('gol_kode') is-invalid @enderror" name="gol_kode" required autocomplete="gol_kode">

                                @error('gol_kode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="gol_nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Golongan') }}</label>

                            <div class="col-md-7">
                                <input id="gol_nama" type="text" class="form-control @error('gol_nama') is-invalid @enderror" name="gol_nama" required autocomplete="gol_nama">

                                @error('gol_nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('TAMBAH') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
