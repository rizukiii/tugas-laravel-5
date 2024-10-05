@extends('backend.layout.main')
@section('title', 'Detail Laptop')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                    <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
                </div>
                <div class="ms-md-auto py-2 py-md-0">

                    <a href="{{ url()->previous() }}" class="btn btn-primary btn-round">< Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th style="width: 100px">Gambar</th>
                                        <th style="width: 10px">:</th>
                                        <td><img src="" alt=""></td>
                                    </tr>
                                    <tr>
                                        <th>Merek</th>
                                        <th>:</th>
                                        <td>{{ $laptop->merek }}</td>
                                    </tr>
                                    <tr>
                                        <th>Seri</th>
                                        <th>:</th>
                                        <td>{{ $laptop->seri }}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <th>:</th>
                                        <td>{{ $laptop->harga }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <th>:</th>
                                        <td>{{ $laptop->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Merek</th>
                                        <th>:</th>
                                        <td>{{ $laptop->merek }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
