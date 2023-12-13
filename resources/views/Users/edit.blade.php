@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Users') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/users/'.$row->user_id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-3 row">
                            <label for="user_email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-7">
                                <input id="user_email" type="email" class="form-control @error('user_email') is-invalid @enderror" name="user_email" value="{{ $row->user_email }}" required autocomplete="user_email" autofocus>

                                @error('user_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="user_password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="user_password" type="password" class="form-control @error('user_password') is-invalid @enderror" name="user_password" autocomplete="new-password">

                                @error('user_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="user_nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-7">
                                <input id="user_nama" type="text" class="form-control @error('user_nama') is-invalid @enderror" name="user_nama" value="{{ $row->user_nama }}" required autocomplete="user_nama">

                                @error('user_nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="user_alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-7">
                                <textarea id="user_alamat" class="form-control @error('user_alamat') is-invalid @enderror" name="user_alamat" required autocomplete="user_alamat">{{ $row->user_alamat }}</textarea>

                                @error('user_alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="user_hp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Hp') }}</label>

                            <div class="col-md-7">
                                <input id="user_hp" type="text" class="form-control @error('user_hp') is-invalid @enderror" name="user_hp" value="{{ $row->user_hp }}" required autocomplete="user_hp">

                                @error('user_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="user_pos" class="col-md-4 col-form-label text-md-right">{{ __('Pos') }}</label>

                            <div class="col-md-7">
                                <input id="user_pos" type="text" class="form-control @error('user_pos') is-invalid @enderror" name="user_pos" value="{{ $row->user_pos }}" required autocomplete="user_pos">

                                @error('user_pos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="user_role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-7">
                                <input id="user_role" type="number" class="form-control @error('user_role') is-invalid @enderror" name="user_role" value="{{ $row->user_role }}" required autocomplete="user_role">

                                @error('user_role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="user_aktif" class="col-md-4 col-form-label text-md-right">{{ __('Aktif') }}</label>

                            <div class="col-md-7">
                                <select class="form-select" name="user_aktif" id="user_aktif">
                                    <option value="Y" {{ $row->user_aktif == 'Y' ? 'selected' : '' }}>Y</option>
                                    <option value="N" {{ $row->user_aktif == 'N' ? 'selected' : '' }}>N</option>
                                </select>

                                @error('user_aktif')
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
