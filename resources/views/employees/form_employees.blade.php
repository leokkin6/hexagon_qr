@extends('main')
 
@section('title','| Employee Registration')
@section('content_header','Employee Registration')
@section('content_subheader','Employee registration for QR Access')
@section('breadcrumb', 'Employee Registration')

 
@section('content')
<!--General Information Card-->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-block">
        <!-- Tab panes -->
        <div class="row">
            <div class="col-xs-9 col-md-7">
                @if(isset($employee))
                    {!! Form::model($employee,['method'=>'put','id'=>'frm', 'files'=>true]) !!}
                @else
                    {!! Form::open(['id'=>'frm', 'files'=>true]) !!}
                @endif
                <!-- Header LSection -->
                    <h4 class="sub-title"><i class="icofont icofont-ui-user"></i></i>{{isset($employee)?' Edit':' New'}} Employee | General Information </h4>
                <!-- Information Forms -->
                <div class="row">
                    <div class="form-group col-sm-9">
                        {{ Form::label('emp_id', 'Employee ID:') }}
                        {{ Form::text('emp_id', null, array('class' => 'form-control', 'placeholder'=>'Employee ID', 'id'=>'txt_employeeID','required'=>'')) }}
                    </div>
                    <div class="form-group col-sm-3">
                        {{ Form::label('is_user', 'System User:') }}
                        {{ Form::select('is_user', ['N' => 'No','Y' => 'Yes'],null,['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('last_name', 'Last Name:') }}
                    {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder'=>'Last Name', 'id'=>'txt_LastName', 'required'=>'')) }}
                </div>
                <div class="row">
                    <div class="form-group col">
                        {{ Form::label('title', 'Title:') }} 
                        {{ Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Title', 'required'=>'')) }}
                    </div>
                    <div class="form-group col">
                        {{ Form::label('first_name', 'First Name:') }} 
                        {{ Form::text('first_name', null, array('class'=>'form-control', 'placeholder'=>'First Name', 'required'=>'')) }}
                    </div>
                    <div class="form-group col">
                        {{ Form::label('middle_name', 'Middle Name:') }}
                        {{ Form::text('middle_name', null, array('class' => 'form-control', 'placeholder'=>'Middle Name', 'required'=>'')) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('department', 'Deparment') }} 
                        {{ Form::text('department', null, array('class'=>'form-control', 'placeholder'=>'Deparment', 'id'=>'txt_Department', 'required'=>'')) }}
                    </div>
                    <div class="form-group col">
                        {{ Form::label('unit', 'Unit') }} 
                        {{ Form::text('unit', null, array('class'=>'form-control', 'placeholder'=>'Unit', 'required'=>'')) }}
                    </div>
                    <div class="form-group col">
                        {{ Form::label('division', 'Division') }} 
                        {{ Form::text('division', null, array('class'=>'form-control', 'placeholder'=>'Division', 'required'=>'')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('position', 'Position:') }}
                    {{ Form::text('position', null, array('class' => 'form-control', 'placeholder'=>'Position', 'required'=>'')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email', 'E-mail Address:') }}
                    {{ Form::email('email', null, array('class' => 'form-control', 'placeholder'=>'E-mail Address', 'required'=>'','data-parsley-type'=>'email')) }}
                </div>
                {{ Form::submit('Submit',array('class'=>'pull-right btn btn-primary col')) }} 
                <br>
                <br>
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
                                <img id="myImg" class="img-fluid img-circle" src="{{asset((isset($employee) && $employee->image!='')?'uploads/'.$employee->image:'assets/images/avatar.png')}}"  height="200px" width="200px">
                                <div class="img-overlay">
                                    <span>
                                    <a href="{{ URL::asset('assets/images/avatar.png') }}" class="btn btn-sm btn-primary" height="200px" width="200px"></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col">
                        {!! Form::file('image', array('class' => 'image form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::hidden('status', 'ACTIVE') }}
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
                    {{ Form::label('qr_value', 'QR Value:') }}
                    {{ Form::text('qr_value', null, array('class' => 'form-control', 'id'=>'txt_QRValue', 'readonly')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('hash_value', 'Hashed Value:') }}
                    {{ Form::text('hash_value', null, array('class' => 'form-control','id'=>'txt_QRHash', 'readonly')) }}
                </div> 
                <div class="form-group">
                    {{ Form::label('qr_link', 'Link:') }}
                    {{ Form::text('qr_link', null, array('class' => 'form-control','id'=>'txt_qrLink', 'readonly')) }}
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
                        <div class="img-hover" id="QRresult"> 
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

 
<script type="text/javascript">
    $(document).ready(function () {
     $('#txt_employeeID,#txt_LastName,#txt_Department').keyup(function() {
        var qrvalue = $('#txt_QRValue').val();

        $('#txt_QRValue').val($('#txt_employeeID').val()+'-'+$('#txt_LastName').val()+'-'+$('#txt_Department').val());
        generate_qrcode(qrvalue);
        });
    }); 

    function generate_qrcode(qrValue){
        $.ajax({
            type: 'get',
            url: '/qr/generator/getQRValueReg',
            data: {qrValue:qrValue},
            success: function(data){
                $('#txt_qrLink').val('eov.hgc.com/'+data.codeHash);
                $('#QRresult').html(data.code);
                $('#txt_QRHash').val(data.codeHash);
                
            }
        });
    }
      
</script>

<script type="text/javascript">
    $(function () {
    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#myImg').attr('src', e.target.result);
};
</script>


@endsection