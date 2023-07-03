@extends('includes.main')

@push('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Permission</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="tabel-main" class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><button class="btn btn-outline-success" id="openModal">Tambah
                                            Data</button></th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Action</th>
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

    <div class="modal fade" id="modalAddSifat">
        <div class="modal-dialog modal-st" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title" id="defaultModalLabel">Tambah Data Permission</h5>
                </div>
                <form id="formData" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">Nama Permission</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ URL::asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/js/data-table.js') }}"></script> --}}
    <script src="{{ URL::asset('js/permission.js') }}" type="text/javascript"></script>
@endpush
