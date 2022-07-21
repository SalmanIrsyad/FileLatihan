@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa
                        <a href="{{ route('siswa.create') }}"
                            class="btn btn-sm btn-primary" style="float: right;">Add Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama Siswa</th>
                                        <th>Alamat Siswa</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($siswa as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nis }}</td>
                                            <td>{{ $data->nama_siswa }}</td>
                                            <td>{{ $data->alamat_lahir }}</td>
                                            <td>{{ $data->tanggal_lahir }}</td>
                                            <td>
                                                <form action="{{ route('siswa.destroy', $data->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('siswa.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">Edit
                                                    </a> |
                                                    <a href="{{ route('siswa.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">Show
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Are You Sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection