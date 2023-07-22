@extends('includes.main')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Aduan</h4>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted">Jumlah Keseluruhan</p>
                                <p class="text-muted">Total: {{ $aduan }}</p>
                            </div>
                            {{-- <div class="progress progress-md">
                                <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="21"
                                    aria-valuemin="0" aria-valuemax="1000"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Deskripsi Aduan</h4>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted">Jumlah Keseluruhan</p>
                                <p class="text-muted">Total: {{ $descAduan }}</p>
                            </div>
                            {{-- <div class="progress progress-md">
                                <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Inventaris</h4>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted">Jumlah Keseluruhan</p>
                                <p class="text-muted">Total: {{ $inventaris }}</p>
                            </div>
                            {{-- <div class="progress progress-md">
                                <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User</h4>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted">Jumlah Keseluruhan</p>
                                <p class="text-muted">Total: {{ $user }}</p>
                            </div>
                            {{-- <div class="progress progress-md">
                                <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pengaduan Layanaan TI</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="tabel-main" class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th>Actions</th> --}}
                                            <th>No</th>
                                            <th>No Aduan</th>
                                            <th>Nama User</th>
                                            <th>Tgl. Masuk</th>
                                            <th>Tgl. Keluar</th>
                                            <th>No. Hp</th>
                                            <th>Status</th>
                                            <th>Nama Pengambil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ URL::asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/js/data-table.js') }}"></script> --}}
    <script src="{{ URL::asset('js/dashboard.js') }}" type="text/javascript"></script>
@endpush
