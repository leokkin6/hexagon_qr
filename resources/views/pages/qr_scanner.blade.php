@extends('main')

@section('has_class','has class')
@section('title','| QR SCANNER')
@section('content_header','QR Scanner')
@section('content_subheader','Scan for QR Entry')
@section('breadcrumb','QR Scanner')

@section('custom_page_style')
<!-- Range slider css -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.css') }}">

@endsection

@section('content')

<div class="card">
    <div class="card-block">
        <div class="row"> 
            <!-- Left Pane -->
            <div class="form-group col-xs-9 col-md-7">
                <h4 class="sub-title"><i class="icofont icofont-lock"></i>QR Scanner</h4>
                <div class="row">
                    <div class="form-group col-sm-8">
                        <div class="card blog-page">
                            <div class="card-block">
                                <center>
                                    <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                                    <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                                    <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                                    <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                                    <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                                </center>
                            </div>
                        </div>

                        <div class="form-group">
                            <center>
                                <select class="form-control" id="camera-select" style="margin-bottom: 10px"></select>
                                <div class="form-group">
                                    <button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="icofont icofont-upload-alt"></span></button>
                                    <button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button" data-toggle="tooltip"><span class="icofont icofont-ui-image"></span></button>
                                    <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="icofont icofont-ui-play"></span></button>
                                    <button title="Pause" class="btn btn-warning btn-sm" id="pause" type="button" data-toggle="tooltip"><span class="icofont icofont-ui-pause"></span></button>
                                    <button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><span class="icofont icofont-ui-play-stop"></span></button>
                                 </div>
                            </center>
                        </div>
                    </div>

                    <div class="form-group col">
                        <div class="card blog-page">
                            <div class="card-block">
                                <label id="zoom-value" width="100">Zoom: 2</label>
                                <br>
                                <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="50" value="20">
                                <br>
                                <label id="brightness-value" width="100">Brightness: 10</label>
                                <br>
                                <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="10">
                                <br>
                                <label id="contrast-value" width="100">Contrast: 20</label>
                                <br>
                                <input id="contrast" onchange="Page.changeContrast();" type="range" min="-128" max="128" value="20">
                                <br>
                                <label id="threshold-value" width="100">Threshold: 0</label>
                                <br>
                                <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                                <br>
                                <label id="sharpness-value" width="100">Sharpness: off</label>
                                <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                                <br>
                                <label id="grayscale-value" width="100">Grayscale: off</label>
                                <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                                <br>
                                <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                                <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox">
                                <br>
                                <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                                <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Pane -->
            <div class="form-group col">
                <h4 class="sub-title"><i class="icofont icofont-lock"></i>Scanned Value</h4>
                
                <div class="form-group">
                    <div class="card blog-page">
                        <div class="card-block">
                            <center>
                                <img width="240" height="240" id="scanned-img" src="{{ URL::asset('assets/images/qr-code.png') }}">
                            </center>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="card blog-page">
                        <div class="card-block">
                            <center>
                                <h5 id="scanned-QR"></h>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('custom_page_script')
 <!-- range slider js -->
<script type="text/javascript" src="{{ URL::asset('bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/pages/range-slider.js') }}"></script>

<!-- Scripts for webcam reader -->
<script type="text/javascript" src=" {{ URL::asset('/qr_login/option2/js/filereader.js') }}"></script>
<script type="text/javascript" src=" {{ URL::asset('/qr_login/option2/js/qrcodelib.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/qr_login/option2/js/webcodecamjs.js') }}"></script>
<script type="text/javascript" src=" {{ URL::asset('/qr_login/option2/js/qrReader.js' )}} "></script>

@endsection