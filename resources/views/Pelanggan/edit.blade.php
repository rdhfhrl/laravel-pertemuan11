@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Pelanggan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/pelanggan/'.$row->pel_id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-3 row">
                            <label for="pel_id_gol" class="col-md-4 col-form-label text-md-right">{{ __('ID Golongan') }}</label>

                            <div class="col-md-7">
                                <select class="form-select" name="pel_id_gol" id="pel_id_gol">
                                    @foreach($golongan as $gol)
                                    <option value="{{ $gol->gol_id }}" {{ $row->pel_id_gol == $gol->gol_id ? 'selected' : '' }}>{{ $gol->gol_nama }}</option>
                                    @endforeach
                                </select>

                                @error('pel_id_gol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_no" class="col-md-4 col-form-label text-md-right">{{ __('NO Pelanggan') }}</label>

                            <div class="col-md-7">
                                <input id="pel_no" type="number" class="form-control @error('pel_no') is-invalid @enderror" name="pel_no" value="{{ $row->pel_no }}" required autocomplete="pel_no" autofocus>

                                @error('pel_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-7">
                                <input id="pel_nama" type="text" class="form-control @error('pel_nama') is-invalid @enderror" name="pel_nama" value="{{ $row->pel_nama }}" required autocomplete="pel_nama">

                                @error('pel_nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-7">
                                <input id="pel_alamat" type="text" class="form-control @error('pel_alamat') is-invalid @enderror" name="pel_alamat" value="{{ $row->pel_alamat }}" required autocomplete="pel_alamat">

                                @error('pel_alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_hp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor HP') }}</label>

                            <div class="col-md-7">
                                <input id="pel_hp" type="text" class="form-control @error('pel_hp') is-invalid @enderror" name="pel_hp" value="{{ $row->pel_hp }}" required autocomplete="pel_hp">

                                @error('pel_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_ktp" class="col-md-4 col-form-label text-md-right">{{ __('KTP') }}</label>

                            <div class="col-md-7">
                                <input id="pel_ktp" type="text" class="form-control @error('pel_ktp') is-invalid @enderror" name="pel_ktp" value="{{ $row->pel_ktp }}" required autocomplete="pel_ktp">

                                @error('pel_ktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_seri" class="col-md-4 col-form-label text-md-right">{{ __('Seri') }}</label>

                            <div class="col-md-7">
                                <input id="pel_seri" type="text" class="form-control @error('pel_seri') is-invalid @enderror" name="pel_seri" value="{{ $row->pel_seri }}" required autocomplete="pel_seri">

                                @error('pel_seri')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_meteran" class="col-md-4 col-form-label text-md-right">{{ __('Meteran') }}</label>

                            <div class="col-md-7">
                                <input id="pel_meteran" type="text" class="form-control @error('pel_meteran') is-invalid @enderror" name="pel_meteran" value="{{ $row->pel_meteran }}" required autocomplete="pel_meteran">

                                @error('pel_meteran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_aktif" class="col-md-4 col-form-label text-md-right">{{ __('Aktif') }}</label>

                            <div class="col-md-7">
                                <select class="form-select" name="pel_aktif" id="pel_aktif">
                                    <option value="Y" {{ $row->pel_aktif == 'Y' ? 'selected' : '' }}>Y</option>
                                    <option value="N" {{ $row->pel_aktif == 'N' ? 'selected' : '' }}>N</option>
                                </select>

                                @error('pel_aktif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="pel_id_user" class="col-md-4 col-form-label text-md-right">{{ __('ID Golongan') }}</label>

                            <div class="col-md-7">
                                <select class="form-select" name="pel_id_user" id="pel_id_user">
                                    @foreach($users as $user)
                                    <option value="{{ $user->user_id }}" {{ $row->pel_id_user == $user->user_id ? 'selected' : '' }}>{{ $user->user_nama }}</option>
                                    @endforeach
                                </select>

                                @error('pel_id_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('UPDATE') }}
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

