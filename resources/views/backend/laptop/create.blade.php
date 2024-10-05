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
                    <a href="laptop/" class="btn btn-label-info btn-round me-2">< Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Laptop</h4>
                        </div>
                        @include('backend.components.alert')
                        <div class="card-body">
                            <form action="/laptop/store" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Cover</label>
                                    <input type="file" class="form-control" name="gambar" id="gambar"
                                        placeholder="Masukan Gambar" />
                                </div>
                                <div class="mb-3">
                                    <label for="merek" class="form-label">Merek</label>
                                    <input type="text" class="form-control" name="merek" id="merek"
                                        placeholder="Masukan Merek Laptop"
                                        value="{{ old('merek') }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="seri" class="form-label">Seri</label>
                                    <input type="text" class="form-control" name="seri" id="seri"
                                        placeholder="Masukan Seri Laptop"
                                        value="{{ old('seri') }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" id="harga"
                                        placeholder="Masukan Harga Laptop"
                                        value="{{ old('harga') }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" placeholder="Masukan Deskripsi Laptop">{{ old('merek') }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-primary" value="tambah">
                                    Submit
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
