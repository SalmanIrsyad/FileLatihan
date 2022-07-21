@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">  
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa</div>

                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="">Kode Mata Pelajaran</label>
                                <input type="text" name="kode_mata_pelajaran" value="{{ $jurusan->kode_mata_pelajaran }}"
                                    class="form-control @error('kode_mata_pelajaran') is-invalid @enderror">
                                @error('kode_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Mata Pelajaran</label>
                                <input type="text" name="nama_mata_pelajaran" value="{{ $jurusan->nama_mata_pelajaran }}"
                                    class="form-control @error('nama_mata_pelajaran') is-invalid @enderror">
                                @error('nama_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Semester</label>
                                <input type="text" name="semester" value="{{ $jurusan->semester }}"
                                    class="form-control @error('semester') is-invalid @enderror">
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label for="jurusan">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control form-select @error('jurusan') is-invalid @enderror">
                                    <option value="0" hidden selected>Jurusan</option>
                                    <option value="RPL">RPL</option>
                                    <option value="TBSM">TBSM</option>
                                    <option value="TKRO">TKRO</option>
                                </select>
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection