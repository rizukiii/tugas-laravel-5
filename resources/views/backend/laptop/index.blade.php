@extends('backend.layout.main')
@section('title', 'Dashboard')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                    <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
                </div>
                <div class="ms-md-auto py-2 py-md-0">

                    <a href="laptop/create" class="btn btn-primary btn-round">+ Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Gambar</th>
                                        <th>Merek</th>
                                        <th>Seri</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($laptop as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ Storage::url($item->gambar) }}" alt="" style="width: 100px; height:100px"></td>
                                            <td>{{ $item->merek }}</td>
                                            <td>{{ $item->seri }}</td>
                                            <td>{{ $item->harga }}</td>
                                            <td>{{ Str::limit($item->deskripsi, 50, '...') }}</td>
                                            <td>
                                                <a href="/laptop/show/{{ $item->id }}" class="btn btn-info w-50 my-1">Detail</a>
                                                <a href="/laptop/edit/{{ $item->id }}" class="btn btn-warning text-white w-50 my-1">Update</a>
                                                <a href="/laptop/destroy/{{ $item->id }}" class="btn btn-danger w-50 my-1">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                <span class="text-secondary fw-bold">
                                                    Data Tidak Ada!
                                                </span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
