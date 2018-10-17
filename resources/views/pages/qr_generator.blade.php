
@extends('main')

@section('has_class','has class')
@section('title','| QR GENERATOR')
@section('content_header','QR Generator')
@section('content_subheader','Generate QR for registered employee')
@section('breadcrumb','QR Generator')


@section('content')
<!--QR Card -->
<div class="card">
    <div class="card-block">
        <!-- Tab panes -->
        {!! Form::open(['route' => 'user_registration.store']) !!}
        <div class="row">
            <div class="col-xs-9 col-md-7">
                <!-- Header LSection -->
                <h4 class="sub-title"><i class="icofont icofont-lock"></i> QR Authentication</h4>
                <!-- Information Forms -->
                <div class="form-group">
                    {{ Form::label('QRValue', 'QR Value:') }}
                    {{ Form::textarea('QRValue', null, array('class' => 'form-control','onkeyup'=>'generate_qrcode(this.value)', 'id'=>'QRValue', 'placeholder'=>'Input QR value here...')) }}
                </div>
                
                <!-- End of Information Forms -->
            </div>
            <!-- Header RSection -->
            <div class="form-group col">
                <h4 class="sub-title"><i class="icofont icofont-id-card"></i>QR Image</h4>
                <!-- Profile Card -->
                <div class="card user-card">
                    <div class="card-block">
                        <div class="img-hover" id="QRresult">
                            <center><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=applychange" title="Link to Google.com"></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		
        {!! Form::close() !!}
    </div>
</div>

@endsection

@section('custom_page_script')

<script type="text/javascript">

	function generate_qrcode(qrValue){
		$.ajax({
			type: 'get',
			url: '/admin/qr_system/qr_generator/getQRValueGen',
			data: {qrValue:qrValue},
			success: function(code){
				$('#QRresult').html(code);
			}
		});
	}

</script>

@endsection