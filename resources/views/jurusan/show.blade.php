@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">Kode Mata Pelajaran</label>
                            <input type="text" name="kode_mata_pelajaran" value="{{ $jurusan->kode_mata_pelajaran }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Mata Pelajaran</label>
                            <input type="text" name="nama_mata_pelajaran" value="{{ $jurusan->nama_mata_pelajaran }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Semester</label>
                            <input type="text" name="semester" value="{{ $jurusan->semester }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" value="{{ $jurusan->jurusan }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('jurusan.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection