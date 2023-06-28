@extends('lucid')

@push('css')
    <link href="{{ URL::asset('assets/vendor/jquery-datatable/dataTables.bootstrap.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('assets/vendor/select2/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('assets/vendor/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">
                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                            class="fa fa-arrow-left"></i></a> Permission</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item active">Permission</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row clearfix permission-read">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="body">
                    <button type="button" class="btn btn-outline-primary btnAddPermission permission-create"
                        style="display: none">Tambah Permission</button>
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom" id="sample_1">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:15%">Deskripsi</th>
                                <th class="text-center" style="width:10%"></th>
                            </tr>
                            <tr>
                                <th><input type="text" class="form-control" id="filter_0" autocomplete="off"></th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
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
    <script src="{{ URL::asset('assets/vendor/jquery-datatable/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-datatable/dataTables.bootstrap.js') }}" type="text/javascript">
    </script>
    <script src="{{ URL::asset('assets/vendor/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.blockUI.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/vendor/bootbox/bootbox.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/subjs/permission.js') }}" type="text/javascript"></script>
@endpush
