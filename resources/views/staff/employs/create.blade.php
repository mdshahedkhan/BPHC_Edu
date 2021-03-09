@extends('staff.app.app')
@push('CSS')
    <link href="{{ asset('assets/backend/assets/jquery-multi-select/multi-select.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/assets/select2/select2.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .deimage{
            background: #16a085;
            width: 110px;
            padding: 8px;
            color: #ffffff;
            border-radius: 3px;
        }
        .deimage::-webkit-file-upload-button{
            display: none;
        }
    </style>
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
                                <h3 class="panel-title">Add New Employs Forms</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('staff.employs.index') }}" class="btn btn-inverse">All Employs</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" data-url="{{ route('staff.employs.store') }}" enctype="multipart/form-data" id="EmploysCreate" novalidate="novalidate">
                            <div class="row" style="margin-left: 50px">
                                <div class="error-message" style="display: none">
                                    <div class="alert alert-danger">
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label" for="firstname">First Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter First Name">
                                            {{--<label id="cname-error" class="error" for="cname">This field is required.</label>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-2 control-label" for="surname">Surname</label>
                                        <div class="col-md-10">
                                            <input type="text" id="surname" name="surname" class="form-control" placeholder="Enter Surname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email">Email Address</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="password">Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="row" style="margin-left: 80px;">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="position">Position</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="position" name="position">
                                                <option value="">Select</option>
                                                {!! Position() !!}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="col-md-3 control-label" for="phone">Phone No</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone No">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="col-md-3 control-label" for="salary">Salary</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" id="salary" name="salary" value="{{ old('salary') }}" placeholder="0.00&#2547">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 80px;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox checkbox-primary">
                                                <input id="job_experience_checkbox" name="job_experience" value="" type="checkbox">
                                                <label for="job_experience_checkbox">Job Experience</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-md-3 control-label" for="education">Education</label>
                                    <div class="col-md-9">
                                        <select class="js-example-basic-multiple form-control" id="education" name="education[]" multiple="multiple">
                                            {!! EducationList() !!}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="col-md-3 control-label" for="result">Result</label>
                                    <div class="col-md-9">
                                        <select class="js-example-basic-multiple form-control" id="result" name="result[]" multiple="multiple">
                                            {!! ResultList() !!}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="job_experience_box" style="display: none">
                                <label class="col-md-2 control-label" for="job_experience">Jub Summary</label>
                                <div class="col-md-10 summernote">
                                    <textarea id="job_experience" name="jub_summary" class="job_experience form-control" rows="5" placeholder="Share Job Experience"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="description">Home Address</label>
                                <div class="col-md-10 summernote">
                                    <textarea id="description" name="description" class="summernote form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 40px">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label for="profile-image" class="control-label col-md-6">Profile Image</label>
                                            <div class="col-md-3">
                                                <input type="file" class="deimage" onchange="readFile(this)" name="profile_image" id="profile-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6 image" style="margin-left: 130px; margin-top: 5px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label for="nid_image" class="control-label col-md-5">Profile Image</label>
                                            <div class="col-md-7">
                                                <input type="file" class="deimage" onchange="readFile(this)" multiple name="nid_image[]" id="nid_image">
                                            </div>
                                        </div>
                                        <div class="col-md-9 gallery" style="margin-left: 88px; margin-top: 5px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-right">
                                    <input type="submit" class="btn btn-success" value="Add new Employs">
                                </div>
                            </div>
                        </form>
                    </div> <!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col -->
        </div>
    </div> <!-- container -->
@endsection
@push("CSS")
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push("JS")
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
