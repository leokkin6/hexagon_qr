
@extends('main')

@section('has_class','has class')
@section('title','| QR GENERATOR')
@section('content_header','QR Generator')
@section('content_subheader','Generate QR for registered employee')
@section('breadcrumb','QR Generator')


@section('content')
<!--QR Card -->
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5>Custom</h5>
				<span>
					Customize QR Generator
				</span>
				<div class="card-header-right">
					<i class="icofont icofont-rounded-down"></i>
					<i class="icofont icofont-refresh"></i>
					<i class="icofont icofont-close-circled"></i>
				</div>
				
				<div class="card-block">
					<div class="row">
						<div class="col-xs-9 col-md-7">
							<div class="media-body">
                                <form class="">
                                    <div class="">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Write value for QR Code..."></textarea>
                                        <div class="text-right m-t-20"><a href="#" class="btn btn-primary waves-effect waves-light">Generate</a></div>
                                    </div>
                                </form>
                            </div>

						</div>

						<div class="col-xs-3 col-md-5">
							<a href="{{ URL::asset('assets/images/light-box/l1.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                                {{-- {{ $qr }} --}}
                            </a>
						</div>

					</div>

				</div>

			</div>
		</div>			
	</div>
</div>

@endsection
