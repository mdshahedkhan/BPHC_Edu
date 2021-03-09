@extends('staff.app.app')
@push('CSS')
    <!-- DataTables -->
    <link href="{{ asset('assets/backend/assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- sweet alerts -->
    <link href="{{ asset('assets/backend/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">
    <!-- Plugins css -->
    <link href="{{ asset('assets/backend/assets/modal-effect/css/component.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Welcome !</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Employs</a></li>
                    <li class="active">Create</li>
                </ol>
            </div>
        </div>
        <!-- Start Widget -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>All Employees Manage</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('staff.employs.create') }}" class="btn btn-inverse">Create New Employs</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employs)
                                        <tr class="deleteRow{{ $employs->id }}">
                                            <td><img width="40px" src="{{ asset('upload/employs/'.json_decode($employs->profile_image)) }}" alt=""></td>
                                            <td>{{ $employs->first_name .' '.$employs->surname }}</td>
                                            <td>{{ $employs->position }}</td>
                                            <td>{{ $employs->salary }}</td>
                                            <td width="120px">
                                                <button type="button" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-{{ $employs->is }}"><i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                                <button type="button" onclick="SubmitForm('{{ route('staff.employs.destroy', json_encode($employs->id)) }}', '{{ $employs->id }}')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- col -->
        </div>
    </div> <!-- container -->
    @foreach($employees as $employs)
        <div class="md-modal md-effect-11 " id="modal-{{ $employs->id }}">
            <div class="md-content">
                <h3><i class="fa fa-eye"></i> Previews Details</h3>
                <hr>
                <div>
                    <div class="row" style="display: flex">
                        <div class="col-md-4">
                            <img src="{{ asset('upload/employs/'.json_decode($employs->profile_image)) }}" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-md-8">
                            <table class="table-bordered table table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $employs->first_name .' '.$employs->surname }}</td>
                                </tr>
                                <tr>
                                    <th>Position</th>
                                    <td>{{ $employs->position }}</td>
                                </tr>
                                @if(!$employs->education == null)
                                    <tr>
                                        <th>Education</th>
                                        <td>
                                            @foreach(json_decode($employs->education) as $ed)
                                                <span class="label label-info">{{ $ed }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endif
                                @if($employs->result == null)
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                            @foreach(json_decode($employs->result) as $rs)
                                                <span class="label label-info">{{ $rs }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Salary</th>
                                    <td>{{ $employs->salary }}&#2547</td>
                                </tr>
                                @if($employs->job_experience)
                                    <tr>
                                        <th>Job Experience</th>
                                        <td>{{ $employs->jub_summary }}</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                    <button class="md-close btn-sm btn-primary btn-lg waves-effect waves-light"><i class="fa fa-close"></i> Close me!</button>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@push('JS')
    <script src="{{ asset('assets/backend/assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/sweet-alert/sweet-alert.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/sweet-alert/sweet-alert.init.js') }}"></script>
    <!-- Modal-Effect -->
    <script src="{{ asset('assets/backend/assets/modal-effect/js/classie.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/modal-effect/js/modalEffects.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        } );
    </script>
@endpush
