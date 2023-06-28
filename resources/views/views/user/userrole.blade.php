@extends('lucid')

@push('css')
    <link href="{{ URL::asset('assets/vendor/jquery-datatable/dataTables.bootstrap.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('assets/vendor/select2/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ URL::asset('assets/vendor/multi-select/css/multi-select.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ URL::asset('assets/vendor/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">
                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                            class="fa fa-arrow-left"></i></a> Adm. User</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item active">Adm. User</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="body">
                    <button type="button" class="btn btn-outline-primary btnAddUser">Tambah User</button>
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom" id="sample_1">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:15%">Username</th>
                                <th class="text-center" style="width:35%">Name</th>
                                <th class="text-center" style="width:25%">Email</th>
                                <th class="text-center" style="width:15%">Level</th>
                                <th class="text-center" style="width:10%"></th>
                            </tr>
                            <tr>
                                <th><input type="text" class="form-control" id="filter_0" autocomplete="off"></th>
                                <th><input type="text" class="form-control" id="filter_1" autocomplete="off"></th>
                                <th><input type="text" class="form-control" id="filter_2" autocomplete="off"></th>
                                <th><input type="text" class="form-control" id="filter_3" autocomplete="off"></th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAddUser">
        <div class="modal-dialog modal-st" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title" id="defaultModalLabel">User Info</h5>
                </div>
                <form id="formData" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <select class="form-control" name="jenis" id="selJenis">
                                <option value="1">Organik</option>
                                <option value="2">Non Organik</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <select class="form-control" name="username" id="selKary" style="width:100%"></select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label class="control-label">Email</label><br>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Level</label><br>
                                    <select class="form-control" id="selLevel" style="width:100%" name="level">

                                    </select>
                                </div>
                            </div>
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
    <script src="{{ URL::asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}" type="text/javascript">
    </script>
    <script src="{{ URL::asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/jquery.blockUI.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/vendor/bootbox/bootbox.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/subjs/userrole.js') }}" type="text/javascript"></script>
@endpush
