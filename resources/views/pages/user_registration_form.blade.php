@extends('main')
 
@section('title','| User Registration')
@section('content_header','User Registration')
@section('content_subheader','User registration for QR Access')
@section('breadcrumb', 'User Registration')

 
@section('content')
<!--General Information Card-->
<div class="card">
    <div class="card-block">
        <!-- Tab panes -->
        <div class="row">
            <div class="col-xs-9 col-md-7">
                <!-- Header LSection -->
                <h4 class="sub-title"><i class="icofont icofont-ui-user"></i></i> General Information</h4>
                <!-- Information Forms -->
                {!! Form::open(['route' => 'user_registration.store']) !!}
                <div class="row">
                    <div class="form-group col-sm-9">
                        {{ Form::label('EmployeeID', 'Employee ID:') }}
                        {{ Form::text('EmployeeID', null, array('class' => 'form-control', 'placeholder'=>'Employee ID', 'required'=>'')) }}
                    </div>
                    <div class="form-group col-sm-3">
                        {{ Form::label('SystemUser', 'System User:') }}
                        {{ Form::select('SystemUser', ['N' => 'No','Y' => 'Yes'],null,['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('LastName', 'Last Name:') }}
                    {{ Form::text('LastName', null, array('class' => 'form-control', 'placeholder'=>'Last Name', 'required'=>'')) }}
                </div>
                <div class="row">
                    <div class="form-group col">
                        {{ Form::label('Title', 'Title:') }} 
                        {{ Form::text('Title', null, array('class'=>'form-control', 'placeholder'=>'Title', 'required'=>'')) }}
                    </div>
                    <div class="form-group col">
                        {{ Form::label('FirstName', 'First Name:') }} 
                        {{ Form::text('FirstName', null, array('class'=>'form-control', 'placeholder'=>'First Name', 'required'=>'')) }}
                    </div>
                    <div class="form-group col">
                        {{ Form::label('MiddleName', 'Middle Name:') }}
                        {{ Form::text('MiddleName', null, array('class' => 'form-control', 'placeholder'=>'Middle Name', 'required'=>'')) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('Department', 'Deparment') }} 
                        {{ Form::text('Deparment', null, array('class'=>'form-control', 'placeholder'=>'Deparment', 'required'=>'')) }}
                    </div>
                    <div class="form-group col">
                        {{ Form::label('Unit', 'Unit') }} 
                        {{ Form::text('Unit', null, array('class'=>'form-control', 'placeholder'=>'Unit', 'required'=>'')) }}
                    </div>
                    <div class="form-group col">
                        {{ Form::label('Division', 'Division') }} 
                        {{ Form::text('Division', null, array('class'=>'form-control', 'placeholder'=>'Division', 'required'=>'')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('Position', 'Position:') }}
                    {{ Form::text('Position', null, array('class' => 'form-control', 'placeholder'=>'Position', 'required'=>'')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('Email', 'E-mail Address:') }}
                    {{ Form::text('Email', null, array('class' => 'form-control', 'placeholder'=>'E-mail Address', 'required'=>'')) }}
                </div>
                {{ Form::submit('Submit',array('class'=>'pull-right btn btn-primary col')) }}   
                <!-- End of Information Forms -->
            </div>
            <!-- Header RSection -->
            <div class="col-xs-3 col-md-5">
                <div class="form-group">
                    <h4 class="sub-title"><i class="icofont icofont-id-card"></i> Identification Photo</h4>
                    <!-- Profile Card -->
                    <div class="col">
                        <div class="card rounded-card user-card">
                            <div class="card-block">
                                <div class="img-hover">
                                    <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/avatar.png')}}" alt="round-img">
                                    {{--
                                    <div class="img-overlay">
                                        <span>
                                        <a href="{{ URL::asset('assets/images/avatar.png') }}" class="btn btn-sm btn-primary" data-popup="lightbox"><i class="icofont icofont-plus"></i></a>
                                        <a href="" class="btn btn-sm btn-primary"><i class="icofont icofont-link-alt"></i></a> 
                                        </span>
                                    </div>
                                    --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col">
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--QR Authentication-->
<div class="card">
    <div class="card-block">
        <!-- Tab panes -->
        <div class="row">
            <div class="col-xs-9 col-md-7">
                <!-- Header LSection -->
                <h4 class="sub-title"><i class="icofont icofont-lock"></i> QR Authentication</h4>
                <!-- Information Forms -->
                <div class="form-group">
                    {{ Form::label('QRValue', 'QR Value:') }}
                    {{ Form::text('QRValue', null, array('class' => 'form-control', 'readonly')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('HashedValue', 'Hashed Value:') }}
                    {{ Form::text('HashedValue', null, array('class' => 'form-control', 'readonly')) }}
                </div>
                {!! Form::close() !!}
                <!-- End of Information Forms -->
            </div>
            <!-- Header RSection -->
            <div class="form-group col">
                <h4 class="sub-title"><i class="icofont icofont-id-card"></i>QR Image</h4>
                <!-- Profile Card -->
                <div class="card user-card">
                    <div class="card-block">
                        <div class="img-hover">
                            <center><img class="img-fluid" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=9e2256c95f8f0d7db5709ab27a778b9f" alt=""></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('custom_page_script')

    {!! Html::script('js/parsley.min.js') !!}

@endsection