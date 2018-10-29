@extends('main')
 
@section('title','| User Profile')
@section('content_header','User Profile')
@section('content_subheader','User profile table')
@section('breadcrumb', 'User Profile')

@section('custom_page_style')

@endsection

@section('content')
<div class="container-fluid">
    <div class="table-responsive text-center">
        <div class="float-right">
            <a href="{{url('employees/create')}}" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-user"></span> New Employee
            </a>
        </div>
        <h1 style="font-size: 2.2rem">Manage Employee List</h1>
        <hr/>
        {!! Form::open(['method'=>'get']) !!}
        <div class="float-right">
            <div class="col-sm-5 form-group pull-right">
                <div class="input-group pull-left">
                    <div class=text-right> </div>
                    <input class="form-control pull-right" id="search"
                        value="{{ request('search') }}"
                        placeholder="Search Employee ID" name="search"
                        type="text" id="search"/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-warning"
                            >
                        Search
                        </button>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{request('field')}}" name="field"/>
            <input type="hidden" value="{{request('sort')}}" name="sort"/>
        </div>
        {!! Form::close() !!}
        <table class="table table-bordered"  >
            <thead class="bg-dark" >
                <tr>
                    <th width="60px" style="vertical-align: middle;text-align: center">No</th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Employee Id
                        </a>
                        {{request('field')=='title'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Title
                        </a>
                        {{request('field')=='title'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Last Name
                        </a>
                        {{request('field')=='last_name'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        First Name
                        </a>
                        {{request('field')=='first_name'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Middle Name
                        </a>
                        {{request('field')=='middle_name'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Department
                        </a>
                        {{request('field')=='department'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Unit
                        </a>
                        {{request('field')=='unit'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Division
                        </a>
                        {{request('field')=='division'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Position
                        </a>
                        {{request('field')=='position'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Email
                        </a>
                        {{request('field')=='email'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Image
                        </a>
                        {{request('field')=='image'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        QR Value
                        </a>
                        {{request('field')=='qr_value'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Hash Value
                        </a>
                        {{request('field')=='hash_value'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">
                        <a href="{{url('employees')}}?search={{request('search')}}&gender={{request('emp_id')}}&field=emp_id&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Status
                        </a>
                        {{request('field')=='status'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                    </th>
                    <th style="vertical-align: middle">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach($employees as $employee)
                <tr>
                    <th style="vertical-align: middle;text-align: center">{{$i++}}</th>
                    <td style="vertical-align: middle">{{ $employee->emp_id }}</td>
                    <td style="vertical-align: middle">{{ $employee->title }}</td>
                    <td style="vertical-align: middle">{{ $employee->last_name }}</td>
                    <td style="vertical-align: middle">{{$employee->first_name}}</td>
                    <td style="vertical-align: middle">{{ $employee->middle_name }}</td>
                    <td style="vertical-align: middle">{{ $employee->department}}</td>
                    <td style="vertical-align: middle">{{$employee->unit}}</td>
                    <td style="vertical-align: middle">{{ $employee->division }}</td>
                    <td style="vertical-align: middle">{{ $employee->position }}</td>
                    <td style="vertical-align: middle">{{$employee->email}}</td>
                    <td style="vertical-align: middle"><img src="{{ ('uploads/' . $employee->image) }}" style="width:100px;height:80px" /></td>
                    <td style="vertical-align: middle">{{ $employee->qr_value }}</td>
                    <td style="vertical-align: middle">{{ $employee->hash_value }}</td>
                    <td style="vertical-align: middle">{{ $employee->status }}</td>
                    <td style="vertical-align: middle" align="center">
                        <form id="frm_{{$employee->id}}"
                            action="{{url('employees/delete/'.$employee->id)}}"
                            method="post" style="padding-bottom: 0px;margin-bottom: 0px">
                            <a  title="Edit"
                                href="{{url('employees/update/'.$employee->id)}}"><span class="glyphicon glyphicon-edit"></span>
                            Edit</a>
                            <input type="hidden" name="_method" value="delete"/>
                            {{csrf_field()}}
                            <a  title="Delete"
                                href="javascript:if(confirm('Are you sure want to delete?')) $('#frm_{{$employee->id}}').submit()"><span class="glyphicon glyphicon-trash"></span>
                            Delete
                            </a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav>
            <ul class="pagination justify-content-end">
                {{$employees->links('vendor.pagination.bootstrap-4')}}
            </ul>
        </nav>
    </div>
</div>
</div>
@endsection

@section('custom_page_script')
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
@endsection
