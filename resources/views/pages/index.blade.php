@extends('main')

@section('has-class','has-class')
@section('title','| Gatekeeper')
@section('content_header','Gatekeeper')
@section('breadcrumb','Gatekeeper')

@section('content')
    <div class="card">
        <div class="card-block">
            <!-- Tab panes -->
            <div class="row">
                <div class="col-xs-9 col-md-6">
                    <!-- Header LSection -->
                    <h4 class="sub-title"><i class="icofont icofont-ui-user"></i></i> Employee Information</h4>
                    <!-- Information Forms -->
                </div>

                <div class="col-xs-3 col-md-6">
                    <!-- Header RSection -->
                    <h4 class="sub-title"><i class="icofont icofont-id-card"></i> Identification Photo</h4>
                <!-- Profile Card -->
                    <div class="col">
                        <div class="card rounded-card user-card">
                            <div class="card-block">
                                <div class="img-hover">
                                    <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round2.jpg')}}" alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                          <a href="{{ URL::asset('assets/images/user-card/img-round2.jpg') }}" class="btn btn-sm btn-primary" data-popup="lightbox"><i class="icofont icofont-plus"></i></a>
                                          <a href="" class="btn btn-sm btn-primary"><i class="icofont icofont-link-alt"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Entry History</h5>
            <div class="card-header-right">
                <i class="icofont icofont-rounded-down"></i>
                <i class="icofont icofont-refresh"></i>
                <i class="icofont icofont-close-circled"></i>
            </div>
        </div>

        <div class="card-block">
            <div class="row users-card">
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round1.jpg') }}" alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                            <a href="assets/images/user-card/img-round1.jpg" class="btn btn-sm btn-primary" data-popup="lightbox">
                                                <i class="icofont icofont-plus"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="icofont icofont-link-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="user-content">
                                    <h4 class="">Cedric Kelly</h4>
                                    <h5 class="">Network engineer</h5>
                                </div>
                                <ul class="icons-list mt-15">
                                    <li>
                                        <a href="#" data-popup="tooltip" data-original-title="Google Drive">
                                            <i class="icon-google-drive"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-popup="tooltip" data-original-title="Twitter">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-popup="tooltip" data-original-title="Github">
                                            <i class="icon-github"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round2.jpg') }} " alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                            <a href="assets/images/user-card/img-round2.jpg" class="btn btn-sm btn-primary" data-popup="lightbox">
                                                <i class="icofont icofont-plus"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="icofont icofont-link-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="user-content">
                                    <h4 class="">Howard Hatfield</h4>
                                    <h5 class="">UX/UI designer</h5>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round3.jpg') }}" alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                            <a href="assets/images/user-card/img-round3.jpg" class="btn btn-sm btn-primary" data-popup="lightbox">
                                                <i class="icofont icofont-plus"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="icofont icofont-link-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                            </div>
                            <div class="user-content">
                                <h4 class="">Jenette Caldwell</h4>
                                <h5 class="">SEO specialist</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round4.jpg') }}" alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                            <a href="assets/images/user-card/img-round4.jpg" class="btn btn-sm btn-primary" data-popup="lightbox">
                                                <i class="icofont icofont-plus"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="icofont icofont-link-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="user-content">
                                    <h4 class="">Hermione Butler</h4>
                                    <h5 class="">Chief officer</h5>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

@endsection
