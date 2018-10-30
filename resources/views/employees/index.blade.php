@extends('main')
 
@section('title','| User Profile')
@section('content_header','User Profile')
{{-- @section('content_subheader','User profile table') --}}
@section('breadcrumb', 'User Profile')

@section('custom_page_style')
<!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Employee Profiling</h5>
        <span>List of employees registered to the system.</span>
        <div class="card-header-right">
            <i class="icofont icofont-rounded-down"></i>
            <i class="icofont icofont-refresh"></i>
            <i class="icofont icofont-close-circled"></i>
        </div>
    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="simpletable" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Action</th>
                        <th>Employee Id</th>
                        <th>Title</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Department</th>
                        <th>Unit</th>
                        <th>Division</th>
                        <th>Position</th>
                        <th>Email Address</th>
                        <th>Image</th>
                        <th>QR Vaue</th>
                        <th>Hash Value</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                @php
                    $i=1;
                @endphp

                @foreach($employees as $employee)
                <tr>
                    <th style="vertical-align: left;text-align: center">{{$i++}}</th>
                    <td style="vertical-align: left" align="center">
                        <form id="frm_{{$employee->id}}"
                            action="{{url('employees/delete/'.$employee->id)}}"
                            method="post" style="padding-bottom: 0px;margin-bottom: 0px">
                            <a title="Edit" href="{{url('employees/update/'.$employee->id)}}">
                                <span class="icofont icofont-edit btn btn-primary btn-xs"></span>
                            </a>
                            <input type="hidden" name="_method" value="delete"/>
                            {{csrf_field()}}
                            <a title="Delete" href="javascript:if(confirm('Are you sure want to delete?')) $('#frm_{{$employee->id}}').submit()">
                                <span class="icofont icofont-ui-delete btn btn-danger btn-xs"></span>
                            </a>
                        </form>
                    </td>
                    <td style="vertical-align: left">{{ $employee->emp_id }}</td>
                    <td style="vertical-align: left">{{ $employee->title }}</td>
                    <td style="vertical-align: left">{{ $employee->last_name }}</td>
                    <td style="vertical-align: left">{{$employee->first_name}}</td>
                    <td style="vertical-align: left">{{ $employee->middle_name }}</td>
                    <td style="vertical-align: left">{{ $employee->department}}</td>
                    <td style="vertical-align: left">{{$employee->unit}}</td>
                    <td style="vertical-align: left">{{ $employee->division }}</td>
                    <td style="vertical-align: left">{{ $employee->position }}</td>
                    <td style="vertical-align: left">{{$employee->email}}</td>
                    <td style="vertical-align: left"><img src="{{ asset('uploads/' . $employee->image) }}" style="width:45px;height:45px" /></td>
                    <td style="vertical-align: left">{{ $employee->qr_value }}</td>
                    <td style="vertical-align: left">{{ $employee->hash_value }}</td>
                    <td style="vertical-align: left">{{ $employee->status }}</td>
                </tr>
                @endforeach

                </tbody>

                {{-- <tfoot>
                    <tr>
                        <th>Employee Id</th>
                        <th>Title</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Department</th>
                        <th>Unit</th>
                        <th>Division</th>
                        <th>Position</th>
                        <th>Start date</th>
                        <th>Email Address</th>
                        <th>Image</th>
                        <th>QR Vaue</th>
                        <th>Hash Value</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot> --}}
            </table>
        </div>
    </div>
@endsection

@section('custom_page_script')
<!-- data-table js -->
    <script src="{{ URL::asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/data-table/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/data-table/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/data-table/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    // Animate select box length
    var searchInput = $(".search-box input");
    var inputGroup = $(".search-box .input-group");
    var boxWidth = inputGroup.width();
    searchInput.focus(function(){
        inputGroup.animate({
            width: "300"
        });
    }).blur(function(){
        inputGroup.animate({
            width: boxWidth
        });
    });
});
</script>

<script type="text/javascript">
    
    $(document).ready(function() {
        $('#simpletable').DataTable({
            "scrollY": 400,
            "scrollX": true
        });
    });

</script>

@endsection


